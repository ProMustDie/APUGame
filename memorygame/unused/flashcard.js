function textToImage(text,font = '50px Times New Roman', color = '#f6ae2d', bgColor = '#2f4858')
{
    const canvas = document.createElement('canvas');
    const context = canvas.getContext('2d')

    context.font = font;

    const textMetrics = context.measureText(text);
    canvas.width = textMetrics.width;
    canvas.height = parseInt(font,20);

    context.fillStylele = bgColor;
    context.fillRect(0, 0, canvas.width, canvas.heaight);

    context.fillStyle = color;

    context.fillText(text,0,parseInt(font,20))

    const img = new Image();
    img.src = canvas.toDataURL('image/png');

    return img;
}

const text = 'print'
textToImage(text)


//creating the options
const cardArray = [
    {
        name: 'q1',
        img: 'textToImage(text)',
        text: 'print',
    },
    {
        name: 'q1',
        img: 'Hello World'
    },
    {
        name: 'q2',
        img: 'x = 5'
    },
    {
        name: 'q2',
        img: 'x = 5'
    },
    {
        name: 'q3',
        img: 'Creating integer varaible'
    },
    {
        name:'q3',
        img: 'x = int(3)'
    },
    {
        name: 'q4',
        img: 'def myfunc(): print("python is awesome")'
    },
    {
        name: 'q4',
        img: 'summoning a function to print text'
    }
];

//randomizing the options
cardArray.sort(() => 0.5 - Math.random());

//taking the grid from html
const gridDisplay = document.querySelector('#grid')
const resultDisplay = document.querySelector('#result')

let cardsChosen = []
let cardsChosenIds = []
let cardsWon = []


//creating the cardback for each variable
function createBoard() {
    for(let i = 0; i<cardArray.length; i++)
        {
        const card = document.createElement('img')
        card.setAttribute('src', 'cardback.png')
        card.setAttribute('data-id', i)
        card.addEventListener("click", flipcard)
        console.log(card, i)
        gridDisplay.append(card)
}}

function checkMatch(){
    const cards = document.querySelector('img')
    const optionOneID = cardsChosenIds[0]
    const optionTwoID = cardsChosenIds[1]
    

    if (cardsChosen[0] == cardsChosen [1]){
        alert('Correct!')
        cards[optionOneID].setAttribute('src','white.png')
        cards[optionTwoID].setAttribute('src','white.png')
        cards[optionOneID].removeEventListener('click', flipcard)
        cards[optionTwoID].removeEventListener('click', flipcard)
        cardsWon.push(cardsChosen)
    } else if(optionOneID == optionTwoID){
        alert('You have clicked the same card')
        cards[optionOneID].setAttribute('src','cardback.png')
        cards[optionTwoID].setAttribute('src','cardback.png')
    } else{
        cards[optionOneID].setAttribute('src','cardback.png')
        cards[optionTwoID].setAttribute('src','cardback.png')    
        alert('Sorry, try again')
    }

    cardsChosen = []
    cardsChosenIds = []
    resultDisplay.textContent = cardsWon.length
    if (cardsWon.length === cardArray.length/2){
    resultDisplay.textContent = 'Congratulations!'
    }
}

function flipcard() {
    let cardId = this.getAttribute('data-id')
    cardsChosen.push(cardArray[cardId].name)
    cardsChosenIds.push(cardId)
    this.setAttribute('src',cardArray[cardId].img)
    if (cardsChosen.length == 2) {
       setTimeout(checkMatch, 300)}
}

createBoard()
