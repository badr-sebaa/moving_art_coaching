<?php

class Coment
{

    private $id;
    public $id_user;
    public $date;
    public $stars;
    public $message;


    private $bdd;

      //Constructeur sans paramètre

    public function __construct()
    {
    }

    public function addcoment($id_user,$stars,$message){                         
        require('../model/config.php');
        $stmt = $bdd->prepare("INSERT INTO coment(id_user,stars,message,date) VALUES (?,?,?,NOW())");
        $stmt->execute(array($id_user,$stars,$message));
        header("location:../view/product.php");
    }

    public function display_coment(){
        require('../model/config.php');
        $stmt = $bdd->prepare("SELECT users.name,coment.date,coment.stars,coment.message FROM coment JOIN users ON coment.id_user = users.id");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}   