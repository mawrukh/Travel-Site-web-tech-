<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Trivia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://hamnarauf.github.io/Tourist-Bug/img/logo.png">
    <style>
    body {
        height: 700px;
        font-family: 'Metrophobic', sans-serif;
        background-color: #ffffff;
        background: url('https://clubthrifty.com/wp-content/uploads/2018/02/Cheap-Places-to-Travel.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        color: #005500;
    }

    ul {
        text-align: left;
        list-style-type: none;
    }

    .questionAnswerForm {
        display: none;
        width: 70%;
        background: white;
        text-align: center;
        border: 3px solid black;
        padding: 20px;
        color: black;
    }

    button {
        width: 80px;
        height: 40px;
        font-size: 20px;
    }

    .question {
        background: lightgray;
        text-align: center;
    }

    .answers {
        background: darkgray;
    }

    .startButton {
        display: block;
        border-radius: 10%;
        margin: 20px;
        margin-left: 0px;
        width: 400px;
        height: 50px;
        background-color: #3866AF;
        color: #ffffff;
        line-height: 22px;
    }

    .startButton:hover,
    .startButton:focus {
        background-color: orange;
    }

    .quizStart {
        position: relative;
        //display: flex;
        flex-direction: column;
        justify-content: right;
        width: 90%;
        margin-left: 500px;
    }

    .quizStart h1,
    h2 {
        margin: 0;
        padding: 10;
    }

    main div {
        margin: 0 auto;
    }

    label:nth-child(1) {
        background-color: #3866AF
    }

    label:nth-child(2) {
        background-color: #387AAF
    }

    label:nth-child(3) {
        background-color: #3894AF
    }

    label:nth-child(4) {
        background-color: #38A9AF
    }

    label {
        padding: 20px;
        margin-bottom: 10px;
        display: flex;
        color: #ffffff;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease-out;
        line-height: 22px;
    }

    label:hover,
    label:focus {
        background-color: orange;
    }

    fieldset {
        border: none;
    }

    .restartButton {
        margin-top: 40px;
        width: 300px;
        height: 50px;
        background-color: #3866AF;
        color: #ffffff;
        line-height: 22px;
    }

    .gif {
        width: 300px;
        height: 300px;
    }

    //for any screen larger than 320px
    @media screen and (min-width: 320px) {}
    </style>
</head>

<body>
    <header>
        <ul>
            <li>Question: <span class="questionNumber">0</span>/10</li>
            <li>Score: <span class="score">0</span></li>
        </ul>
    </header>
    <main>

        <div class="quizStart">
            <h1>Been Around The World?</h1>
            <h2>Let's Test Your Travel Trivia...</h2>

            <button class="startButton">Go!</button>
        </div>



        <div class="questionAnswerForm"></div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="script.js"></script>
    <script src="data.js"></script>
    <script>
    let questionNumber = 0;
    let score = 0;

    //on click of startQuizButton hide quizStart div
    //unhide questionAnswerForm div
    //change the text in the span with class questionNumber to 1
    function startQuiz() {
        $('.quizStart').on('click', '.startButton', function(event) {
            $('.quizStart').remove();
            $('.questionAnswerForm').css('display', 'block');
            $('.questionNumber').text(1);

        });
    }

    //generate question html
    function generateQuestion() {
        if (questionNumber < STORE.length) {
            return `<div class="question-${questionNumber}">
    <h2>${STORE[questionNumber].question}</h2>
    <form>
    <fieldset>
    <label class="answerOption">
    <input type="radio" value="${STORE[questionNumber].answers[0]}" name="answer" required>
    <span>${STORE[questionNumber].answers[0]}</span>
    </label>
    <label class="answerOption">
    <input type="radio" value="${STORE[questionNumber].answers[1]}" name="answer" required>
    <span>${STORE[questionNumber].answers[1]}</span>
    </label>
    <label class="answerOption">
    <input type="radio" value="${STORE[questionNumber].answers[2]}" name="answer" required>
    <span>${STORE[questionNumber].answers[2]}</span>
    </label>
    <label class="answerOption">
    <input type="radio" value="${STORE[questionNumber].answers[3]}" name="answer" required>
    <span>${STORE[questionNumber].answers[3]}</span>
    </label>
    <button type="submit" class="submitButton">Submit</button>
    </fieldset>
    </form>
    </div>`;
        } else {
            renderResults();
            restartQuiz();
            $('.questionNumber').text(10)
        }
    }

    //when quiz is over this is the html for the page
    function renderResults() {
        if (score >= 8) {
            $('.questionAnswerForm').html(
                `<div class="results correctFeedback"><h3>You're a First Class World Traveler! </h3><img src="https://media.giphy.com/media/XkOlXpEyWbskM/giphy.gif" alt="dancing flight attendant animated icon" class ="gif"/><p>You got ${score} / 10</p><p>Rock on With Ya Bad Self!</p><button class="restartButton">Restart Quiz</button></div>`
                );
        } else if (score < 8 && score >= 5) {
            $('.questionAnswerForm').html(
                `<div class="results correctFeedback"><h3>So close.</h3><img src="https://media.giphy.com/media/qLWdMYX1NYF2g/giphy.gif" alt="almost there animated icon" class ="gif"/><p>You got ${score} / 10</p><p>Not too shabby, keep on trucking!</p><button class="restartButton">Restart Quiz</button></div>`
                );
        } else {
            $('.questionAnswerForm').html(
                `<div class="results correctFeedback"><h3>You really should get out more...</h3><img src="https://media.giphy.com/media/11StaZ9Lj74oCY/giphy.gif" alt="penguin animcated icon" class ="gif"/><p>You got ${score} / 10</p><p>Or maybe you should just re-take the quiz.</p><button class="restartButton">Restart Quiz</button></div>`
                );
        }
    }

    //fxn to add html into questionAnswerForm div that generates the question
    function renderQuestion() {
        $('.questionAnswerForm').html(generateQuestion());
    }

    function userSelectAnswer() {
        $('form').on('submit', function(event) {
            event.preventDefault();
            let selected = $('input:checked');
            let answer = selected.val();
            let correctAnswer = `${STORE[questionNumber].correctAnswer}`;
            if (answer === correctAnswer) {
                selected.parent().addClass('correct');
                ifAnswerIsCorrect();
            } else {
                selected.parent().addClass('wrong');
                ifAnswerIsWrong();
            }
        });
    }

    function ifAnswerIsCorrect() {
        userAnswerFeedbackCorrect();
        updateScore();
    }

    function ifAnswerIsWrong() {
        userAnswerFeedbackWrong();
    }

    //user feedback for correct answer
    function userAnswerFeedbackCorrect() {
        let correctAnswer = `${STORE[questionNumber].correctAnswer}`;
        $('.questionAnswerForm').html(
            `<div class="correctFeedback"><p><b>Rock on! You got it right!</b></p><button type=button class="nextButton">Next</button></div>`
            );
    }

    //user feedback for wrong answer
    function userAnswerFeedbackWrong() {
        let correctAnswer = `${STORE[questionNumber].correctAnswer}`;
        // let iconImage = `${STORE[questionNumber].icon}`;
        $('.questionAnswerForm').html(
            `<div class="correctFeedback"><p><b>Oops! Wrong Answer.</b><br>The correct answer is <span>"${correctAnswer}"</span></p><button type=button class="nextButton">Next</button></div>`
            );
    }


    function renderNextQuestion() {
        $('main').on('click', '.nextButton', function(event) {
            changeQuestionNumber();
            renderQuestion();
            userSelectAnswer();
        });
    }

    function changeQuestionNumber() {
        //if (questionNumber < STORE.length) {
        questionNumber++;
        //}
        $('.questionNumber').text(questionNumber + 1);
    }

    function updateScore() {
        score++;
        $('.score').text(score);
    }


    function restartQuiz() {
        $('main').on('click', '.restartButton', function(event) {
            location.reload();
        });
    }

    function createQuiz() {
        startQuiz();
        renderQuestion();
        userSelectAnswer();
        renderNextQuestion();
    }

    $(createQuiz);
    </script>
    <script>
    const STORE = [{
            question: 'Which US city is referred to as ‘Sin City’?',
            answers: [
                'New York',
                'Los Angeles',
                'Las Vegas',
                'Miami'
            ],
            correctAnswer: 'Las Vegas',

        },
        {
            question: 'What is the capital city of Vietman?',
            answers: [
                'Quy Nihon',
                'Mumbai',
                'Tripoli',
                'Hanoi'
            ],
            correctAnswer: 'Hanoi',

        },
        {
            question: 'What is the name of Africa’s highest mountain?',
            answers: [
                'Mount Kenya',
                'Mount Elbrus',
                'Kilimanjaro',
                'Mont Blanc'
            ],
            correctAnswer: 'Kilimanjaro',

        },
        {
            question: 'What’s the capital of Venezuela?',
            answers: [
                'Caracas',
                'Lima',
                'Guayaquil',
                'Maracaibo'
            ],

            correctAnswer: 'Caracas',

        },
        {
            question: 'What time of the year is Mardi Gras in New Orleans?',
            answers: [
                'June',
                'December',
                'February',
                'August'
            ],
            correctAnswer: 'February',

        },
        {
            question: 'Where is the Mona Lisa found?',
            answers: [
                'National Gallery in Oslo',
                'Vatican Historical Museum',
                'Louve Museum in Paris',
                'Smithsonian in Washington DC'
            ],
            correctAnswer: 'Louve Museum in Paris',

        },
        {
            question: 'In which country is Punjabi - the world’s 10th most popular language -most spoken',
            answers: [
                'India',
                'Saudi Arabia',
                'Nigeria',
                'Papua New Guinea'
            ],
            correctAnswer: 'India',

        },
        {
            question: 'Where is the ‘Forbidden City’?',
            answers: [
                'Beijing, China',
                'Algarve, Portugal',
                'Seoul, South Korea',
                'Bangkok, Thailand'
            ],
            correctAnswer: 'Beijing, China',

        },
        {
            question: 'The Galapagos Islands are part of which country?',
            answers: [
                'Fiji',
                'French Polynesia',
                'Tonga',
                'Ecuador'
            ],
            correctAnswer: 'Ecuador',

        },
        {
            question: 'Where’s the Burj Khalifa, the tallest building in the world?',
            answers: [
                'Shanghai',
                'Dubai',
                'Hong Kong',
                'Seoul'
            ],
            correctAnswer: 'Dubai',

        }
    ];
    </script>
</body>

</html><?php /**PATH C:\Users\PC\proj1\travelSite\resources\views/welcome.blade.php ENDPATH**/ ?>