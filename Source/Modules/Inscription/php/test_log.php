<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require __DIR__.'/../../App/App.php';

if(!isset($_GET['login'])){
    header('location:../../Pages_erreurs/page/erreur_403.html');
}else{
    
    $log = $_GET['login'];
    $data = App::getDb()->query("Select log_user from user where log_user = ?",array($log));
    if(count($data)<=0){
        echo "0";   //pas de correspondance , login libre
    }else echo "1"; //correspondance login non libre
}