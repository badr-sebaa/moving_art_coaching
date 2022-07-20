<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Moving ART COACHING</title>
</head>
<body>

        <?php
            if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'bad_password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> Wrong password !
                            </div>
                        <?php
                        break;

                        case 'noexist':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> This account dosn't exist !
                            </div>
                        <?php
                        break;
                    }
                }
        ?> 

<main>
    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form action="../controler/login_treatment.php" method="post">
         

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control" placeholder="email@something.com" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"/>
                <label class="form-label" for="email">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" placeholder="*********" required  class="form-control" />
                <label class="form-label" for="password">Password</label>
              </div>


              <!-- Submit button -->
              <button type="submit" class="btn btn-dark btn-block mb-4">
                Sign up
              </button>

        
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="img/login.JPG" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</main>  
</body>
</html>




