<?php

require 'User.php';

// Si les variables existent et qu'elles ne sont pas vides
if(!empty($_POST['email']) && !empty($_POST['email_verify']) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['phone']) && !empty($_POST['birthday']) && !empty($_POST['password']) && !empty($_POST['password_verify']))
{
    
    // je crée des variable pour chaque donné 
    
    $email = stripslashes(trim(htmlspecialchars($_POST['email'])));
    $email_verify = stripslashes(trim(htmlspecialchars($_POST['email_verify'])));
    $name = stripslashes(trim(htmlspecialchars($_POST['name'])));
    $firstname = stripslashes(trim(htmlspecialchars($_POST['firstname'])));
    $phone = stripslashes(trim(htmlspecialchars($_POST['phone'])));
    $birthday = stripslashes(trim(htmlspecialchars($_POST['birthday'])));
    $password = stripslashes(trim(htmlspecialchars($_POST['password'])));
    $password_verify = stripslashes(trim(htmlspecialchars($_POST['password_verify'])));
    $user = new User();

    $register = $user->register($email,$email_verify,$name,$firstname,$phone,$birthday,$password,$password_verify);
}