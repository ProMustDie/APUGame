<!--
session_start(); // Start the session at the very beginning

// Check if the user is not logged in (adjust the 'user_id' or 'logged_in' according to your login script)
if (!isset($_SESSION['Id'])) {
    // User is not logged in, redirect to login page
    header('Location: login.php');
    exit; // Stop further execution of the script
}
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ</title>
    <link rel="stylesheet" type="text/css" href="mcq.css">
</head>
<body>    

<body>
      

    <div class="app">
        <a href="../studentui/choosegameui.php?button=MCQ" class="back"><-Back</a>
        <h1 id="quizName">Quiz name will be displayed here</h1>
        <div class="quiz">
            <h2 id="question">Question should be here</h2>
            <div id="answers" class="answer-buttons">
                <!-- Answer buttons will be dynamically added here -->
            </div>
            <button id="next-btn">Next</button>
        </div>
    </div>

<script>    
const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answers");
const nextButton = document.getElementById("next-btn");
const quizName = document.getElementById("quizName");

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
     fetch(<?= "'get_questions.php?quizID=".$_GET['quizID']."'"?>)
     .then(response => response.json())
     .then(data => {
         questions = data;
         showQuestion();
     })
     .catch(error => console.error('Error fetching questions:', error));
}

function showQuestion() {
    resetState();
    console.log("next question...");
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;
    quizName.innerHTML = currentQuestion.quizName;
    
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
    saveResults(score);
}
function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex<questions.length){
        showQuestion();
    }else{
        showScore();
    }
}
/*
function saveResults(score){
    const quizID =  < ?= json_encode($_GET['quizID']); ?>;
    fetch('save_results.php', {
        method: 'POST', // or 'GET' if you are sending data in the query string
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `score=${score}&quizID=${quizID}`
})
.then(response => response.text())
.then((response) => {
  console.log(response); // Handling the response from your PHP script
})
.catch((error) => {
  console.error('Error:', error); // Handling errors
});
}
*/
startQuiz();

</script>

</body>
</html>