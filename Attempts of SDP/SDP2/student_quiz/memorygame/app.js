//This file is not used btw
document.addEventListener('DOMContentLoaded', () => {
  const grid = document.querySelector('.grid');
  const resultDisplay = document.querySelector('#result');
  resultDisplay.textContent = "Match the Cards to its Corresponding Pair";
  //eh why it still showing memory matching cards??^^
  let cardArray = [];
  let cardsChosen = [];
  let cardsWon = [];

  // Fetch data from the database and create the game board
  function fetchAndCreateBoard() {
    // Perform an AJAX request to fetch data from the server
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          cardArray = JSON.parse(xhr.responseText);
          createBoard(cardArray);
        } else {
          console.error('Error fetching data from the server');
        }
      }
    };
    xhr.open('GET', 'fetch_cards.php', true);
    xhr.send();
  }

  // Create the game board based on the fetched data
  function createBoard(cardArray) {
    cardArray.forEach((card, i) => {
        const cardContainer = document.createElement('div');
        const cardImg = document.createElement('img');
        const cardText = document.createElement('p');
      
        cardContainer.classList.add('card-container');
        cardImg.classList.add('card-img');
        cardText.classList.add('card-text');

        cardImg.setAttribute('src', 'cardback.png');
        cardContainer.addEventListener('click', flipCard);

        cardText.textContent = card;

        cardContainer.appendChild(cardImg);
        cardContainer.appendChild(cardText);

        cardContainer.addEventListener('click', toggleText);

        grid.appendChild(cardContainer);
    });
}


  // Show text
  function toggleText(event) {
    const cardContainer = event.currentTarget;
    // Check if the card is already matched
    if (cardsWon.includes(cardContainer)) {
        return;
    }
    const cardText = cardContainer.querySelector('.card-text');
    const cardImg = cardContainer.querySelector('.card-img');
    cardText.classList.toggle('show');
    cardImg.classList.toggle('hidden');
}
  
  // Check for match
function checkForMatch() {
    console.log(cardsChosen);
    if (cardsChosen.length !== 2) return;

    const cardOneContent = cardsChosen[0].querySelector('.card-text').textContent;
    const cardTwoContent = cardsChosen[1].querySelector('.card-text').textContent;

    // Perform an AJAX request to verify if the selected cards are a match
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.isMatch) {
                    // Correct match, update score, lock cards, etc.
                    alert('Correct match!');
                    cardsWon.push(cardsChosen[0], cardsChosen[1]);
                    resultDisplay.textContent = "Pairs Matched: " + (cardsWon.length/2);
                    if (cardsWon.length === cardArray.length) {
                        resultDisplay.textContent = 'Congratulations, You matched ' +  (cardsWon.length/2) + " pairs!";
                    }
                    disableMatchedCards(); // Disable matched cards
                    // Clear the selected cards array after a successful match
                    cardsChosen = [];
                } else {
                    // Incorrect match, flip cards back
                    alert('Incorrect match! Try again.');
                    cardsChosen.forEach(card => {
                        card.querySelector('.card-img').classList.toggle('hidden');
                        card.querySelector('.card-text').classList.toggle('show');
                    });
                    // Clear the selected cards array after flipping back
                    cardsChosen = [];
                }
            } else {
                console.error('Error verifying match with the server');
            }
        }
    };

    xhr.open('GET', `verify_match.php?cardOneContent=${encodeURIComponent(cardOneContent)}&cardTwoContent=${encodeURIComponent(cardTwoContent)}`, true);
    xhr.send();
}



 // Disable flipping and text toggling for matched cards
function disableMatchedCards() {
  cardsWon.forEach(card => {
      card.removeEventListener('click', flipCard);
  });
}

  // Flip card
function flipCard(event) {
  const cardContainer = event.currentTarget;
  // Check if the card is already matched
  if (cardsWon.includes(cardContainer)) {
      return;
  }

  // Toggle selection status of the card
  const index = cardsChosen.indexOf(cardContainer);
  if (index !== -1) {
      // If the card is already selected, remove it from cardsChosen
      cardsChosen.splice(index, 1);
  } else {
      // If the card is not selected, add it to cardsChosen
      cardsChosen.push(cardContainer);
  }

  // Perform the match check
  checkForMatch();
}

  
  fetchAndCreateBoard();
});


