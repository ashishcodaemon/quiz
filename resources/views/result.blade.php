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
            background-color: #eee;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                               <form class="form-horizontal" action="/">

                    <fieldset>
                        <!-- Form Name -->
                        <div class="d-flex justify-content-center row mt-5">
                            <div class="col-md-10 col-lg-10">
                                <div class="border align-items-center">
                                    <div class="question bg-white p-3 border-bottom">
                                        <div class="d-flex justify-content-center">
                                            <h4>PHP Quiz</h4>
                                        </div>
                                    </div>
                                    <!-- Title Section -->
                                    <div class="question bg-white p-3 border-bottom align-items-center" >
                                        <div class="d-flex justify-content-center question-title">
                                            <h5 class="mt-1 ml-2 ">Your Score</h5>
                                        </div>
                                        <h1 class="mt-1 d-flex justify-content-center">
                                            <span class="display-1">
                                                 {{-- Result Displayed --}}
                                            {{ $result }}/10
                                        </span> </h1>
                                        <br>
                                        <div class="col-md-4">
                                        </div>
                                        <div
                                            class="d-flex flex-row justify-content-center align-items-center p-3 bg-white">
                                            <button type="submit" class="btn btn-outline-success mx-5" value="save"
                                        name="submit">Home</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            @php
            Session::forget('time');
            @endphp
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
