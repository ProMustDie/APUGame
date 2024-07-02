const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answers");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;
let questions = [];

function startQuiz() {
    console.log("restart...");
    nextButton.removeEventListener("click", startQuiz);
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";
     // Fetch questions from the server
     fetch('get_questions.php')
     .then(response => response.json())
     .then(data => {
         questions = data;
         showQuestion();
     })
     .catch(error => console.error('Error fetching questions:', error));

    showQuestion();
}

function showQuestion() {
    resetState();
    console.log("next question...");
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;
    
    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer;
        button.classList.add("btn");
        answerButtons.appendChild(button);
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
}

let answersSelected = [];

function selectAnswer(e) {
    const selectedBtn = e.target;
    nextButton.removeEventListener("click", handleNextButton);
    // Changing classes
    selectedBtn.classList.toggle("selected");

    if (!selectedBtn.classList.contains("selected")) {
        selectedBtn.classList.add("answer-buttons");
        selectedBtn.classList.add("btn");
        answersSelected = answersSelected.filter(btn => btn !== selectedBtn);
    } else {
        selectedBtn.classList.remove("answer-buttons");
        selectedBtn.classList.remove("btn");
        answersSelected.push(selectedBtn);
    }

    console.log(answersSelected);

    if (answersSelected.length > 0) {
        nextButton.style.display = "block";
        nextButton.addEventListener("click", checkAnswer);
    } else {
        nextButton.style.display = "none";
        nextButton.removeEventListener("click", checkAnswer);
    }

    console.log("answers selected...");
}

function addClasstoCorrectAnswers() {
    answersSelected.forEach(element => {
        element.classList.add("correct");
        console.log("correct class added");
    });
}
function addClasstoincorrectAnswers() {
    answersSelected.forEach(element => {
        element.classList.add("incorrect");
        console.log("incorrect class added");
    });
}

//checking answer part
function checkAnswer() {
    nextButton.removeEventListener("click", checkAnswer);

    const selectedBtns = answersSelected;
    const question_id = questions[currentQuestionIndex].questionID;

    // Decode HTML entities in selected answers
    const decodedSelectedAnswers = selectedBtns.map(btn => {
        const parser = new DOMParser();
        const dom = parser.parseFromString('<!doctype html><body>' + btn.innerHTML, 'text/html');
        return dom.body.textContent;
    });

    // Send an AJAX request to check the answer on the server
    fetch('check_answer.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            selected_answers: decodedSelectedAnswers,
            question_id: question_id
        }),
    })
        .then(response => response.json())
        .then(data => {
            const is_correct = data.is_correct;

            if (is_correct) {
                addClasstoCorrectAnswers();
                score++;
                console.log("correct");
            } else {
                addClasstoincorrectAnswers();
                console.log("incorrect");
            }
        });

    Array.from(answerButtons.children).forEach(button => {
        button.disabled = true;
    });

    nextButton.style.display = "block";
    nextButton.addEventListener("click", handleNextButton);
    console.log("checked question...");
}





function showScore(){
    resetState();
    nextButton.removeEventListener("click", handleNextButton);
    questionElement.innerHTML = `You acheived ${score} out of ${questions.length}!`;
    nextButton.innerHTML = "Play Again";
    nextButton.style.display = "block";
    nextButton.addEventListener("click", startQuiz);
    console.log("complete...");
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
