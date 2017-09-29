<?php

require __DIR__.'/../../App/App.php';
require __DIR__.'/../../Cryptage/Cryptage.php';

$query = "Select id from user where login_user = :log and mdp_user = :password";

if(!isset($_POST['log'])){  $log = null;}else $log  = $_POST['log']; // on récupère le login if exist else null
if(!isset($_POST['mdp'])){  $log = mdp; }else $mdp  = $_POST['mdp']; // on récupère le mdp if exist else null
Cryptage::Crypter($mdp);    //On cript le mot de passe 
$res = App::getDb()->query($query,array(':log' =>$log,':mdp' =>$mdp)); //requete de corresponance ou non

    
