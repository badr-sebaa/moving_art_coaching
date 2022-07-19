<?php

class Workshop
{

    private $id;
    public $name;
    public $img;
    public $text;
    public $max_size;


    private $bdd;

      //Constructeur sans paramètre

    public function __construct()
    {
    }

    public function addworkshop($name,$img,$text,$maxsize){                         
        require('../model/config.php');
        $stmt = $bdd->prepare("INSERT INTO `workshop`(`name`, `img`, `text`,`max_size`) VALUES ('?','?','?','?')");
        $stmt->execute(array($name,$img,$text,$maxsize));
        header("location:../view/login.php");
    }

    public function subscribe($id_workshop,$id_user){

        require('../model/config.php');
        $stmt = $bdd->prepare("INSERT INTO `workshop_users`(`id_workshop`, `id_user`) VALUES ('?','?')");
        $stmt->execute(array($id_workshop,$id_user));
        header("location:../view/login.php");

    }


    public function nbticket($id_workshop){
        
        require('../model/config.php');
        $check = $bdd->prepare('SELECT COUNT(id_user) as nbticket , max_size FROM workshop_users JOIN workshop ON workshop_users.id_workshop = workshop.id WHERE workshop_users.id_workshop = ?');
        $check->execute(array($id_workshop));
        $data = $check->fetch();
        
        return $data['max_size'] - $data['nbticket'];
    }

    public function isfull($id_workshop){

        require('../model/config.php');
        $check = $bdd->prepare('SELECT max_size FROM workshop WHERE id = ?');
        $check->execute(array($id_workshop));
        $data = $check->fetch();

        $nbticket = $this->nbticket($id_workshop);
        
        if($nbticket != $data){
            return false;
        }

        return true;
    }    

    public function display_all(){

        require('../model/config.php');
        $check = $bdd->prepare('SELECT * FROM workshop');
        $check->execute();
        $data = $check->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
    }

}

?>