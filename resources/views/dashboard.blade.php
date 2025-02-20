<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <title>Ynauguration</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('b23e25ac7982ce47a163', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            let isCorrect = data.correctAnswer;

            if (isCorrect) {
                let questionId = data.questionId;
                document.getElementById('question-' + questionId).classList.remove('unanswered');
                document.getElementById('question-' + questionId).classList.add('answered');
                Toastify({

                    text: "Bonne réponse !",

                    duration: 3000

                }).showToast();
            } else {
                Toastify({

                    text: "Mauvaise réponse !",

                    duration: 3000

                }).showToast();
            }
        });
    </script>
    <style>
        .game {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            height: 90vh;
        }

        .questions-container {
            grid-column: 4 / 11;

            display: grid;
            grid-template-columns: repeat(20, 1fr);
            /* 20 columns */
            grid-template-rows: repeat(15, 1fr);
            /* 15 rows */
            width: 95%;
            height: 100%;
            position: relative;
            margin-top: 3rem;
            /* Added for positioning the image */
        }

        .question {
            position: relative;
            z-index: 1;
        }

        .question img {
            width: 100%;
            height: 100%;
        }

        .question.unanswered {
            background: linear-gradient(45deg, #1D83CD, #6EE8E8);
            border: solid 1px white;
        }

        .question.answered {
            background-color: #ffffff00;
            color: #ffffff00;
        }

        .image-behind {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .game-details {
            grid-column: 1 / 4;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .game-details p {
            font-size: 2rem;
        }

        .qr-code {
            width: max-content;
            margin-left: auto;
            margin-right: auto;
        }

        .frise {
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            max-height: 100vh;
            width: 100%;
            overflow: hidden;
            opacity: 0.2;
            z-index: -1;
            /* background-image: url('/images/frise.svg'); */
            background-size: 2500px 375px;
        }
    </style>
</head>

<body>
    <div class="game">
        <div class="game-details">
            <img class="qr-code" src="{{ url('/images/vote.svg') }}" alt="QR Code">
        </div>
        <div class="questions-container">
            <img class="image-behind"
                src="{{ url('/images/background.png') }}"
                alt="Image Behind Questions"
                style="object-fit: cover">

            <!-- Questions -->
            @foreach ($questions as $question)
                <div class="question {{ $question->is_answered ? 'answered' : 'unanswered' }}"
                    id="question-{{ $question->id }}">
                </div>
            @endforeach
        </div>
    </div>
    <div class="frise" style="background-image: url({{ url('/images/frise.svg') }});"></div>
</body>
