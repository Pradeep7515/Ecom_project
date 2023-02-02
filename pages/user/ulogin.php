<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

  <script src="/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="../../css/ulogin.css">
  <style>
    .xc{
      display: inline-block;
    }
  </style>
  <title>User Login</title>
</head>

<body>
  <!-- Just an image -->
  <nav class="navbar navbar-light bg-light p-3 pl-1">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../../img/magicpin-logo.png" height="35" alt="" loading="lazy" />
      </a>
    </div>
  </nav>

  <div class="container">
    <section class="vh-75 ">
      <div class="container py-5 h-100 mt-2 mt-md-4 card card-registration">
        <div class="row d-flex align-items-center justify-content-center h-100 ">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="../../img/draw2.svg" class="img-fluid" alt="Phone image">
          </div>
          <div class="col-md-7 col-lg-5 col-xl-6 ">


            <!--------------------------------------------+ login form +------------------------------------>
            <form class="mt-4 mt-md-2 p-0 p-lg-4" method="post" action="../../php/user_login.php">
              <h3 class="mb-4 text-uppercase"> Login</h3>
              <?php
              if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>

              <?php } ?>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example13">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="form1Example23">Password</label>
              </div>

              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <a href="#!">Forgot password?</a>
              </div>

              <!-- Submit button -->
              <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
              <span class="mt-3 xc">Don't have account?<a href="uregi.php">Click Here..</a> </span>
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
              </div>

              <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
              </a>
              <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

            </form>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>