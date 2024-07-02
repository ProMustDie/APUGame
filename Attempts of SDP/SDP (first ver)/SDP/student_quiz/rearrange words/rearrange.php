<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Game</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="rearrange.css" rel ="stylesheet">
</head>
<body>

    <main class="flex justify-center items-center h-screen bg-[#58cc02]">
        <div class="wrapper md:w-3/5 w-full p-10" >
        <p><a href="../studentui/choosegameui.php?button=Rearranging+the+Words" class="back"><-Back</a></p>
            <h2 class="text-3xl font-medium mb-4" id="quizName" style="font-family: poppins,sans-serif; font-weight:900; border-bottom: 1px solid #353839; padding-bottom: 30px; font-size: 40px;">Quiz Name</h2>
            <h2 class="text-sm text-gray-600 mb-8" id="displayQuestion" style="font-family: poppins,sans-serif;font-weight: 700;color:#1266be;font-size: 20px;word-spacing: 2px;">Questions</h2>
            <div class="answer-wrapper" id="answer-dropzone">
                <div id="drop-here">Drop your answers here</div>
            </div>
            <div class="question-wrapper" id="question-dropzone">
                <!-- Question words will be added dynamically here -->
                <div id="question-text" style="display:none">Words Given</div>
            </div>
            <div class="flex justify-center mt-10">
                <button id="checkAnswer">Check Your Answer</button>
            </div>
        </div>
    </main>

    <script>

        const questionElement = document.getElementById("displayQuestion");
        const nextButton = document.getElementById("checkAnswer");
        const quizName = document.getElementById("quizName");
        const questionDropzone = document.getElementById('question-dropzone');
        const answerDropzone = document.getElementById('answer-dropzone');
        const dropHereText = document.getElementById('drop-here');
        const questionText = document.getElementById('question-text');
        let questions = [];

        function handleDragStart(event) {
            event.dataTransfer.setData('text/plain', event.target.id);
        }

        function attachDragListeners() {
            const draggableWords = document.querySelectorAll('.word');
            draggableWords.forEach(word => {
                word.addEventListener('dragstart', handleDragStart);
            });
        }

        function fetchAndCreateGame(){
            questionDropzone.style.display = "";
            answerDropzone.style.display = "";
            nextButton.removeEventListener("click", fetchAndCreateGame);
            currentQuestionIndex = 0;
            score = 0;
            resetState();
             fetch(<?= "'get_questions.php?quizID=".$_GET['quizID']."'"?>)
             .then(response => response.json())
             .then(data => {
                 questions = data;
                 initializeGame();
             })
             .catch(error => console.error('Error fetching questions:', error));
         
            initializeGame();
        }

        function initializeGame() {
            resetState();
            nextButton.innerHTML = "Check Your Answer";
            nextButton.removeEventListener("click", initializeGame);
            let currentQuestion = questions[currentQuestionIndex];
            let questionNo = currentQuestionIndex + 1;
            questionElement.innerHTML = questionNo + ". " + currentQuestion.question;
            const items = currentQuestion.answers.map((content, id) => {
                return { id: id, content: content };
            });
            nextButton.addEventListener("click", checkAnswer);

            function handleDrop(event, dropzone) {
                event.preventDefault();
                const data = event.dataTransfer.getData('text/plain');
                const draggedElement = document.getElementById(data);
                const target = event.target.closest('.word');
                if (target) {
                    const targetIndex = Array.from(dropzone.children).indexOf(target);
                    dropzone.insertBefore(draggedElement, dropzone.children[targetIndex]);
                } else {
                    dropzone.appendChild(draggedElement);
                }
                attachDragListeners();
                updateDropHereVisibility();
            }

            items.forEach(item => {
                const wordElement = document.createElement('div');
                wordElement.textContent = item.content;
                wordElement.classList.add('word', 'draggable');
                wordElement.setAttribute('draggable', true);
                wordElement.setAttribute('id', `word-${item.id}`);
                questionDropzone.appendChild(wordElement);
            });

            questionDropzone.addEventListener('dragover', event => event.preventDefault());
            answerDropzone.addEventListener('dragover', event => event.preventDefault());
            answerDropzone.addEventListener('drop', event => handleDrop(event, answerDropzone));
            questionDropzone.addEventListener('drop', event => handleDrop(event, questionDropzone));
            attachDragListeners();
        }


        function checkAnswer() {
            nextButton.removeEventListener("click", checkAnswer);
            const question_id = questions[currentQuestionIndex].questionID;
            currentQuestionIndex++;
            if(currentQuestionIndex<questions.length){
                nextButton.innerHTML = "Next Question";
                nextButton.addEventListener("click", initializeGame);
            }else{
                nextButton.innerHTML = "Show Scores";
                nextButton.addEventListener("click", showScore);
            }

            const answerWords = Array.from(document.querySelectorAll('#answer-dropzone .word')).map(word => word.textContent.trim());
            fetch('check_answer.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        selected_answers: answerWords,
                        question_id: question_id
                    }),
                })
                    .then(response => response.json())
                    .then(data => {
                        const isCorrect = data.is_correct;
                    
                        if (isCorrect) {
                            answerDropzone.style.backgroundColor = 'rgba(0, 255, 0, 0.2)';
                            score++;
                        } else {
                            answerDropzone.style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
                        }
                    });
                
                    const allWords = document.querySelectorAll('.word');
                    allWords.forEach(word => {
                        word.removeEventListener('dragstart', handleDragStart);
                    });
        }

        function updateDropHereVisibility() {
            if (answerDropzone.children.length === 1) {
                dropHereText.style.display = 'block';
            } else {
                dropHereText.style.display = 'none';
            }

            if (questionDropzone.children.length === 1) {
                questionText.style.display = 'block';
            } else {
                questionText.style.display = 'none';
            }
        }

        function resetState() {
            answerDropzone.style.backgroundColor = '';
            const Words = document.querySelectorAll('.word');
            Words.forEach(word => {
                word.remove();
            });
            dropHereText.style.display = 'block';
            questionText.style.display = 'none';
        }


        function showScore(){
            resetState();
            nextButton.removeEventListener("click", showScore);
            questionElement.innerHTML = `You acheived ${score} out of ${questions.length}!`;
            nextButton.innerHTML = "Play Again";
            nextButton.style.display = "block";
            questionDropzone.style.display = "none";
            answerDropzone.style.display = "none";
            nextButton.addEventListener("click", fetchAndCreateGame);
        }

        fetchAndCreateGame();
    </script>
</body>
</html>
