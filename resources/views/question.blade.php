<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quiz</title>
    <style>
        body {
            height: 100vh;
            width: 100%;
            overflow: hidden;
            background-color: #eee;
        }

        label.radio {
            cursor: pointer;
        }

        label.radio {
            cursor: pointer;
        }


        label.radio input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none;
        }

        label.radio span {
            padding: 4px 0px;
            border: 1px solid red;
            display: inline-block;
            color: red;
            width: 100px;
            text-align: center;
            border-radius: 3px;
            margin-top: 7px;
            width: 300px;
            margin-left: 30px;

        }

        label.radio input:checked+span {
            border-color: #5cb85c;
            background-color: #5cb85c;
            color: #fff;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                @if (Session('user_id'))
                    <form class="form-horizontal" action="/{{ $question[0]->id }}" method="POST">
                        @csrf
                        <fieldset>
                            <!-- Form Name -->
                            <div class="d-flex justify-content-center align-items-center row mt-5">
                                <div class="col-md-10 col-lg-12">
                                    <div class="border">

                                        <div class="question bg-white p-3 border-bottom">
                                            <div class="d-flex flex-row justify-content-between align-items-center mcq">
                                                <span>Time Left<div id="time"></div></span>
                                                <h4>PHP Quiz</h4><span>({{ $question[0]->id }} of 10)</span>
                                            </div>
                                        </div>


                                        <div class="question bg-white p-3 border-bottom">

                                            {{-- Question Row --}}

                                            <div class="d-flex flex-row align-items-center question-title">
                                                <h3 class="text-danger">{{ $question[0]->id }}. </h3>
                                                <h5 class="mt-1 ml-2"> {{ $question[0]->question }}</h5>
                                            </div>

                                            <br>

                                            {{-- Option div --}}
                                            <div class="col-md-4">

                                                <input type="radio" name="option" value="0" checked hidden>
                                                @foreach ($options as $options)
                                                    <div class="ans ml-2">
                                                        <label class="radio"> <input type="radio" name="option"
                                                                id="{{ $options->id }}" value="{{ $options->id }}">
                                                            <span>{{ $options->options }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>

                                            {{-- NEXT BACK SAVE buttons --}}

                                            <div
                                                class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                                                <button type="" class="btn btn-outline-primary mx-5" value="back"
                                                    name="submit">Back</button>
                                                @if ($question[0]->id == 10)
                                                    <button type="submit" class="btn btn-outline-success mx-5"
                                                        value="save" name="submit">Save</button>
                                                @else
                                                    <button type="submit" class="btn btn-outline-primary mx-5"
                                                        value="next" name="submit">Next</button>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <input type="hidden" name="user_id" value="{{ Session('user_id') }}">
                        <input type="hidden" name="question_id" value="{{ $question[0]->id }}">
                    </form>

                @endif
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
    document.getElementById('{{ $opt }}').checked = true;
</script>

<script>

    var x = setInterval(function() {
        var countDownDate = new Date("{{ Session('time') }}").getTime();
        // Get today's date and time
        var now = new Date().getTime();
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Output the result in an element with id="demo"
        document.getElementById("time").innerHTML = hours + " : " +
            minutes + " : " + seconds;
        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            window.location.href = "/result";
        }
    }, 1000);
</script>

</html>
