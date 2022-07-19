<?php

class User
{

    private $id;
    public $email;
    public $name;
    public $firstname;
    public $phone;
    public $birthday;

    private $bdd;

      //Constructeur sans paramètre
    public function __construct()
    {
    }

    // Créée l’utilisateur en BDD 
    public function register($email, $email_verify,$name,$firstname,$phone,$birthday,$password, $password_verify)
    {
        if($email === $email_verify){
            require('../model/config.php');
            $check = $bdd->prepare('SELECT * FROM users WHERE email = ?');
            $check->execute(array($email));
            $data = $check->fetch();
            $row = $check->rowCount();
            if($row === 0){
                if(strlen($name) <= 100){
                    if($password === $password_verify){
                        $cost = ['cost' => 12];
                        $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                        $stmt = $bdd->prepare("INSERT INTO `users` (`email`, `name`,`firstname`,`phone`,`birthday`,`password`) VALUES (?,?,?,?,?,?)");
                        $stmt->execute(array($email,$name,$firstname,$phone,$birthday,$password));
                        header("location:../view/login.php");
                    }else{header("location:../index.php?reg_err=password");}
                }else{header("location:../index.php?reg_err=log_length");}
            }else{header("location:../index.php?reg_err=already");}
        }else{header("location:../index.php?reg_err=mail_diff");}
    }

    // Connecte l’utilisateur, donne aux attributs de la classe les valeurs correspondantes à celles de l’utilisateur connecté
    public function connect($email, $password)
    {

        require('../model/config.php');

        $stmt = $bdd->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute(array($email));

        if($stmt->rowCount() == 1 ){

            $req = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($req as $value){
                $id = $value['id'];
                $email = $value['email'];
                $name = $value['name'];
                $firstname = $value['firstname'];
                $phone = $value['phone'];
                $birhtday = $value['birthday'];
                $password_verify = $value['password'];
            }
            if(password_verify($password, $password_verify)){
                $this->id = $id;
                $this->email = $email;
                $this->name = $name;
                $this->firstname = $firstname;
                $this->phone = $phone;
                $this->birthday = $birthday;

                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $id;  
                header("location: ../index.php");
            }else {header("location: ../view/login.php?name_err=bad_password");}
        }
        else{header("location: ../view/login.php?name_err=noexist");}      
    }
    
    // Déconnecte l’utilisateur
    public function disconnect()
    {
        session_start();
        session_destroy();
        header('location: ../index.php');
    }

    // Supprime ET déconnecte un user
    public function delete($email)
    {
        require('../model/config.php');
        $stmt = $bdd->prepare("DELETE FROM `users` WHERE `email`=?");
        $stmt->execute(array($email));
        
        echo 'Supprimer';
    } 
    // MAJ attributs de l’objet, modifie informations en BDD
    public function update($email,$name,$firstname,$phone,$birthday,$password)
    {
        $loged_id = $_SESSION['id'];
        require('../model/config.php');
        $stmt = $bdd->prepare("UPDATE users SET email=?, name =?, firstname =?, phone =?, birthday = ?, password=?  WHERE id = ?");
        $stmt->execute(array($email,$name,$firstname,$phone,$birthday,$password,$loged_id,));
        echo 'Modifier';
    }
    // Savoir si un utilisateur est connecté ou non
    public function isConnected()
    {
        $result = null;
        if(isset($_SESSION['email']))
        {
            $result = true;
        }
        else
        {
            $result = false;
        }

        return $result;
    }
    // Tableau contenant l’ensemble des informations de l’utilisateur
    public function getAllInfos()
    {
        $loged_id = $_SESSION['id'];
        require('../model/config.php');
        $stmt = $bdd->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute(array($loged_id));
        $req = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($req as $value){
            $email = $value['email'];
            $name = $value['name'];
            $firstname = $value['firstname'];
            $phone = $value['phone'];
            $birthday = $value['birthday'];
            $password = $value['password'];
        }
    
        return array($email, $name,$firstname,$phone,$birhtday,$password);
    }
// Autre façon

    // Retourne le nom de l’utilisateur
    public function getName()
    {
        $loged_id = $_SESSION['id'];
        require('../model/config.php');
        $stmt = $bdd->prepare("SELECT name FROM users WHERE id = ?");
        $stmt->execute(array($loged_id));
        $req = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($req as $value){
            $name = $value['name'];
        }
        return $name;
    }

    // Retourne Email de l'utilisateur
    public function getEmail()
    {
        $loged_id = $_SESSION['id'];
        require('../model/config.php');
        $stmt = $bdd->prepare("SELECT email FROM users WHERE id = ?");
        $stmt->execute(array($loged_id));
        $req = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($req as $value){
            $email = $value['email'];
        }
        return $email;
    }

   
    public function IsUser($email)
    {
        require('../model/config.php');
        $check = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        if($row > 0){
            return true;
        }
        return false;
    }
}

?>