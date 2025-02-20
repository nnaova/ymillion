<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Question</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: rgb(255, 248, 236);
        }
        .answer-option {
            display: inline-block;
            margin-right: 10px;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.5rem;
            margin: 1rem;
            padding: 1.5rem;
            background-color: #4EC0DD;
        }

        .answer-option:hover {
            background-color: #f0f0f0;
        }

        .answer-option.selected {
            - background-color: #cceeff;
        }

        #questionForm {
            display: flex;
            flex-direction: column;
        }

        h1 {
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            margin-top: 2rem;
        }

        h2 {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
        }

        .container {
            position: relative;
            width: 20%;
        }

        .bar {
            height: 4px;
            border-radius: 8px;
            /* equivalent to rounded-lg */
            width: 100%;
            background-color: #472ceb;
            transition: all 0.5s;
        }

        .demo-bg {
            opacity: 0.6;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: auto;
            z-index: -1;
        }
    </style>
    <script>
        function selectAnswer(answerId) {
            // Remove 'selected' class from all options
            var answerOptions = document.getElementsByClassName('answer-option');
            for (var i = 0; i < answerOptions.length; i++) {
                answerOptions[i].classList.remove('selected');
            }

            // Add 'selected' class to the clicked option
            document.getElementById(answerId).classList.add('selected');

            // Set the value of the hidden input field 'answer' to the selected answer's ID
            document.getElementById('answer').value = answerId;

            // Submit the form
            document.getElementById('questionForm').submit();
        }
    </script>
</head>

<body>
    <img class="demo-bg" src="{{ url('/images/background.svg') }}" alt="">

    <h1>FIN DES YMMERSIONS</h1>

    <div class="container">
        <div class="bar"></div>
    </div>


    <h2>{{ $question->question }}</h2>
    <form id="questionForm" action="{{ route('home.answer') }}" method="POST">
        @csrf
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <input type="hidden" name="answer" id="answer">
        @foreach ($question->answers as $answer)
            <div class="answer-option" id="{{ $answer->id }}" onclick="selectAnswer('{{ $answer->id }}')">
                {{ $answer->answer }}
            </div>
        @endforeach
    </form>
</body>

</html>
