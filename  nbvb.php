<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> Bad password
                            </div>
                        <?php
                        break;

                        case 'log_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> Login too lenght !
                            </div>
                        <?php 
                        
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Error</strong> Account already exist !
                            </div>
                        <?php 

                        case 'mail_diff':
                        ?>
                        <div class="alert alert-danger">
                          <strong>Error</strong> Mail verify is different !
                        </div>
                        <?php 

                    }
                }
                ?>
<main>

<form class="box" action="../controler/register_treatment.php" method="post">

  <h1>Register</h1>
  
  <input type="text" name="name" placeholder="name" required>
  
  <input type="text" name="firstname" placeholder="Firstname" required>

  <input type="tel"  name="phone" pattern="[+]{1}[0-9]{11,14}" placeholder="Phone" required>

  <input type="date"  name="birthday"  placeholder="Birthday" required>

  <input type="email" name="email" placeholder="Email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
  <input type="email" name="email_verify" placeholder="Retype your Email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">

  <input type="password" name="password" placeholder="Password" required >

  <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->

  <input type="password" name="password_verify" placeholder="Retype your Password" required>

  <input type="submit" name="submit" value="Register">
  <a href="login.php">already have an acount ?</a>

</form>
  
</main>
        
</body>

</html>

