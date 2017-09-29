<?php

require __DIR__.'/../../App/App.php';
require __DIR__.'/../../Cryptage/Cryptage.php';

$query = "Select * from user where log_user = ?";

if(!isset($_POST['log'])){  $log = null;}else $log  = $_POST['log']; // on récupère le login if exist else null
if(!isset($_POST['mdp'])){  $log = mdp; }else $mdp  = $_POST['mdp']; // on récupère le mdp if exist else null
$mdp = Cryptage::Crypter($mdp);    //On cript le mot de passe 
$res = App::getDb()->query($query,array($log)); //requete de corresponance ou non
if($res){  
   
}else echo "log inconnu";

    
