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

<form class="box" action="../controler/login_treatment.php" method="post">
  <h1>Login</h1>
  <input type="email" name="email" placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
  
  <input type="password" name="password" placeholder="Password" required >

  <input type="submit" name="submit" value="Login">
  <a href="register.php">you don't have an acount ?</a>
</form>