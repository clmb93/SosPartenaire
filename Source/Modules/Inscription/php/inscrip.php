<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require __DIR__.'/../../Cryptage/Cryptage.php';
require __DIR__.'/../../App/App.php';

if(!isset($_POST["nom"])||!isset($_POST["prenom"])||
   !isset($_POST["datenaissance"])||!isset($_POST["tel"])||
   !isset($_POST["email"])||!isset($_POST["adresse"])||
   !isset($_POST["ville"])||!isset($_POST["pays"])||
   !isset($_POST["log"])||!isset($_POST["mdp"])||!isset($_POST["conditions"])){
    
    header("location:../../Pages_Erreurs/page/erreur_403.html");
}


$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$datenaissance = $_POST["datenaissance"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$pays = $_POST["pays"];
$log = $_POST["log"];
$mdp = $_POST["mdp"];

$mdp = Cryptage::Crypter($mdp); // cryptage du mot de passe 
$query = "Insert into USER"
        . "(nom_user,prenom_user,dateNaissance_user,tel_user,email_user,adresse_user,ville_user,pays_user,log_user,mdp_user) "
        . "VALUES ('".$nom."','".$prenom."','".$datenaissance."','".$tel."','".$email."','".$adresse."','".$ville."','".$pays."','".$log."','".$mdp."')";

App::getDb()->executeQuery($query);
header("location:../page/inscrip_succes.html");

