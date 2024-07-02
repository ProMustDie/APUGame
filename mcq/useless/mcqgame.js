const questions = [
    {
        question: "What function in Python can be used to display text?",
        answers: [
            { text: "print", correct: true },
            { text: "if...else...", correct: false },
            { text: "class", correct: false },
            { text: "def", correct: false },
        ]
    },
    {
        question: "q2",
        answers: [
            { text: "a", correct: false },
            { text: "b", correct: true },
            { text: "c", correct: false },
            { text: "d", correct: false },
        ]
    },
    {
        question:" what is the name of a bird",
        answers: [
            {text:"penguin", correct:true},
            {text:"fish", correct: false},
            {text:"rio",correct:false},
            {text:"baymax", correct:false}            
        ]

    }
];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answers");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion() {
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if (answer.correct) {
            button.dataset.correct = true
        }else{
            button.dataset.correct = false;
        }
        button.addEventListener("click", selectAnswer);
    })
    
    ;
}

function resetState() {
    nextButton.style.display = "none";
    while (answerButtons.firstChild) {
        answerButtons.removeChild(answerButtons.firstChild);
    }
   answersSelected.splice(0,answersSelected.length);
   console.log(answersSelected);
   
}

let answersSelected = [];

function selectAnswer(e){
    const selectedBtn = e.target;
    //changing classes
    selectedBtn.classList.toggle("selected");
    if (!selectedBtn.classList.contains("selected")) {
        selectedBtn.classList.add("answer-buttons");
        selectedBtn.classList.add("btn");
        answersSelected.splice(selectedBtn)
        
    } else {
        selectedBtn.classList.remove("answer-buttons");
        selectedBtn.classList.remove("btn");
        answersSelected.push(selectedBtn)
    }
    nextButton.style.display = "block"
    nextButton.addEventListener("click",checkAnswer)
    
}
function addClasstoCorrectAnswers() {
    answersSelected.forEach(element => {
        element.classList.add("correct");
    });
}
function addClasstoincorrectAnswers() {
    answersSelected.forEach(element => {
        element.classList.add("incorrect");
    });
}

//checking answer part
function checkAnswer() {
   /* if (answersSelected.length === 0){
        return;
    }*/
    const isCorrect = answersSelected.every(button =>
        button.dataset.correct === "true");

    const isFalse = answersSelected.every(button=>
        button.dataset.correct === "false");    


    if (isCorrect) {
        addClasstoCorrectAnswers();
        score++;
    }else if(isFalse){
        addClasstoincorrectAnswers();
    }else {
        addClasstoincorrectAnswers();
    }

    Array.from(answerButtons.children).forEach(button => {
        if (button.dataset.correct === "true") {
            button.classList.add("correct");
        }
        button.disabled = true;
    });

    nextButton.style.display = "block";
    nextButton.addEventListener("click", handleNextButton)
} 
        //else {
            //startQuiz();
        





function showScore(){
    resetState();
    questionElement.innerHTML = `You acheived ${score} out of ${questions.length}!`;
    nextButton.innerHTML = "Play Again";
    nextButton.style.display = "block";
}
function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex<questions.length){
        showQuestion();
    }else{
        showScore();
    }
}
startQuiz();
