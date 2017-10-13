<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
    header("location:../../../index.php");
    }
    
    require __DIR__.'/../twig/include_twig.php';
    require __DIR__.'/../../App/App.php';
    
    /* RECUPERATION DES INFO DE L'UTILISATEUR */
    
    $id = $_SESSION['id_user'];  
    $data = App::getCurrentUserById($id);
    
    /* LOADING DU TEMPLATE */
    
    $template = $twig->loadTemplate('accueil.twig');
    echo $template->render(array(
	'user_info' => $data
    ));  
    
    
    
        

  ?>
