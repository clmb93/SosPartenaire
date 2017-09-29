<?php

require __DIR__.'/../../App/App.php';
require __DIR__.'/../../Cryptage/Cryptage.php';

$query = "Select * from user where log_user = ?";

if(!isset($_POST['log'])){  $log = null;}else $log  = $_POST['log']; // on récupère le login if exist else null
if(!isset($_POST['mdp'])){  $log = mdp; }else $mdp  = $_POST['mdp']; // on récupère le mdp if exist else null  //On cript le mot de passe 
$res = App::getDb()->query($query,array($log)); //requete de corresponance ou non
if($res){  
    $validPassword = password_verify($mdp, $res[0]['mdp_user']);
    if($validPassword){
        $id = $res[0][id_user];
        session_start();
        $_SESSION['id_user'] = $id;
        header('location:../../espace_membre/membre.php');
    }else header('location:../page/err_log.html');
}else echo header('location:../../espace_membre/membre.php');

    
