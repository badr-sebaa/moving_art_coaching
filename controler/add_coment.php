<?php
session_start();

require 'Coment.php';

// Si les variables existent et qu'elles ne sont pas vides
if(!empty($_POST['message']) && !empty($_POST['stars'])){

$message = stripslashes(trim(htmlspecialchars($_POST['message'])));
$stars = stripslashes(trim(htmlspecialchars($_POST['stars'])));
$id_user = $_SESSION['id'];
//$int_id_user = intval($id_user);
//$float_value_of_stars = floatval($stars);
$coment = new Coment();

$coment->addcoment($id_user,$stars,$message);

}

