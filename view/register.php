<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>َRegister SCHLASS</title>
    <link rel="stylesheet" href="CSS/registertest.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>

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
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="firstname" class="form-control" />
                    <label class="form-label" for="firstname">First name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="name" class="form-control" />
                    <label class="form-label" for="name">Last name</label>
                  </div>
                
                </div>
              </div>

              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <input type="email" id="email" placeholder="email@something.com" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-control" />
                <label class="form-label" for="email">Email address</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <input type="email" id="email_verify" placeholder="email@something.com" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-control" />
                <label class="form-label" for="email_verify">Retype your Email</label>
                  </div>
                
                </div>
              </div>

              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <input type="password" id="password" placeholder="Password" required class="form-control" />
                <label class="form-label" for="password">Password</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                  <input type="password" id="password_verify" placeholder="Password" required class="form-control" />
                <label class="form-label" for="password_verify">Retype your Password</label>
                  </div>
                
                </div>
              </div>

                <!-- phone input -->
              <div class="form-outline mb-4">
                <input type="email" id="phone" class="form-control" pattern="[+]{1}[0-9]{11,14}" placeholder="Phone" required/>
                <label class="form-label" for="phone">Phone</label>
              </div>

              <!-- birthday input -->
              <div class="form-outline mb-4">
                <input type="date" id="birthday" class="form-control" required />
                <label class="form-label" for="birthday">Birthday</label>
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
        <img src="img/register.jpg" class="w-100 rounded-4 shadow-4"
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