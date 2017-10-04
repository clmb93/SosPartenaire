<?php
/* protection script */

if(!isset($_POST['log'])&&(!isset($_POST['mdp']))){
    echo "ok";
    header('location:../../pages_erreurs/page/erreur_403.html');
}else if((!isset($_POST['log'])||(!isset($_POST['mdp'])))){
     header('location:../../pages_erreurs/page/err_log.html');
}

/* Fin script protection */

require __DIR__.'/../../App/App.php';
require __DIR__.'/../../Cryptage/Cryptage.php';





if(isset($_POST['log'])&&(isset($_POST['mdp']))){
    
    $log  = $_POST['log'];
    $mdp  = $_POST['mdp'];
    $query = "Select * from user where log_user = ?";
    $res = App::getDb()->query($query,array($log)); //requete de corresponance ou non
    if($res){  
        $validPassword = password_verify($mdp, $res[0]['mdp_user']);
        if($validPassword){
            $id = $res[0][id_user];
            session_start();
            $_SESSION['id_user'] = $id;
            header('location:../../espace_membre/page/membre.php');
        }else header('location:../page/err_log.html');
    }else header('location:../../pages_erreurs/page/err_log.html');
}


    
