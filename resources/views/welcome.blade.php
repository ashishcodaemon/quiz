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
        .btn-color{
  background-color: #0e1c36;
  color: #fff;

}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}

body{
    overflow: hidden;
}
        </style>
</head>

<body>
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">PHP QUIZ</h2>

            <div class="card my-2">

              <form class="card-body cardbody-color p-lg-5" action="/register" method="POST">
@csrf
                <div class="text-center mb-3">
                  <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>

                <div class="mb-3">

                  <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter Your Email Here....." required>
                </div>

                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Start Quiz</button></div>

              </form>
            </div>

          </div>
        </div>
      </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@php
            Session::forget('user_id');
            Session::forget('time');

@endphp
</html>
