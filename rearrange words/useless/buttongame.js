const questionElement = document.getElementById("question");
const optionsContainer = document.getElementById("optionsContainer");
const nextButton = document.getElementById("next-btn");
const selectedAnswers = document.getElementById('selectedAnswers')

let score = 0;
let currentQuestionIndex = 0;

function startQuiz(){
    nextButton.removeEventListener("click",startQuiz);
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";

    //fetch questions from the server
    fetch('getQuestions.php')
    .then(response => response.json())
    .then(data => {
        questions = data;
        showQuestion();
    })
    .catch(error => console.error('Error fetching question:', error));
    showQuestion();
}


function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML =  questionNo + ". " + currentQuestion.question;
    //insert tablereference pic on the left
    //insert output reference pic on the right

    //creating answer options that are the right answer
    currentQuestion.answers.forEach(answer => {
        const draggables = documnet.createElement("draggables");
        draggables.innerHTML = answer;
        optionsContainer.appendChild(draggables)
        draggables.classList.add("default");
        draggables.forEach(draggables => {
            draggables.addEventListener('dragstart',() => {
                draggables.classList.add('dragging');
            })
        })
        draggables.addEventListener('dragend',() => {
            draggables.classList.remove('dragging');
        })
    })

    //creating answer options for other options
    currentQuestion.answers.forEach(answerOptions => {
        draggables.innerHTML = answer;
        draggable.setAttribute("draggable",true);
        draggables.classList.add("default");
        draggables.forEach(draggables => {
            draggables.addEventListener('dragstart',() => {
                draggables.classList.add('dragging');
            })
        })
        draggables.addEventListener('dragend',() => {
            draggables.classList.remove('dragging');
        })
        optionsContainer.appendChild(draggables)

    })
    
}

function resetState(){
    nextButton.style.display = "none";
    while (optionsContainer.firstChild){
        optionsContainer.removeChild(optionsContainer.firstChild);
    }
    selectedAnswers.splice(0,answersSelected.length);
}

let answersSelected = [];

function selectAnswer(e){
    selectedOption = e.target;
    nextButton.removeEventListener("click",handleNextButton);

}
selectedAnswers.forEach(selectedAnswers => {
        selectedAnswers.addEventListener ('dragover', e => {
            e.preventDefault();
            const afterElement = getDragAfterElement(selectedAnswers, e.clientY);
            if (afterElement == null){
                selectedAnswers.appendChild(draggables)
            }else {
                selectedAnswers.insertBefore(draggables, afterElement)
            }
        })
    })
 function getDragAfterElement(selectedAnswers,y){
    const draggableElements = [...selectedAnswers.querySelectorALL('.draggable:not(.dragging)')];

    draggableElements.reduce((closest,child) => {
        const box = child.getBoundingClientRect()
        const offset = y - box.top - box.height /2;
        if (offset < 0 && offset > closest.offset){
            return {offset: offset, element: child}
        }else{
            return closest
        }
    },{offset: Number.NEGATIVE_INFINITY}).element
    }
//done copied code from youtube, but since stuff not showing in the html so i give up lmao
//dont give up cuz NEVER GONNA GIVE YOU UP- NEVER BACK DOWN NEVER WHATTTTTT


startQuiz();

//from youtube copy paste, not edited;
/*
const draggables = document.createElement("draggables");
draggables.forEach(draggables => {
    draggables.addEventListener('dragstart', () => {
        draggables.classList.add('dragging');
    })
})
draggables.addEventListener('dragend', () => {
    draggables.classList.remove('dragging');
})

selectedAnswers.foreach( selectedAnswers => {
    selectedAnswers.addEventListener('dragover', e => {
        e.preventDefault();
        const afterElement = getDragAfterElement(selectedAnswers, e.clientY)
        if (afterElement == null){
            selectedAnswers.appendChild(draggables)
        }else {
            selectedAnswers.insertBefore(draggables, afterElement)
        }
        const draggables = document.querySelector(".dragging");
        selectedAnswers.appendChild(draggables);
    })

})
 function getDragAfterElement(selectedAnswers,y) {
    const draggableElements = [...selectedAnswers.querySelectorAll('.draggables:not(.dragging)')];

    draggableElements.reduce((closest, child) => {
        const box = child.getBoundingClientRect()
        const offset = y - box.top - box.height /2;
        if (offset < 0 && offset > closest.offset){
            return{offset: offset, element: child}
        }else{
            return closest
        }
    },{offset:Number.NEGATIVE_INFINITY}).element
 }

 */