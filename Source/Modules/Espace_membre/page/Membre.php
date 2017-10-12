<?php
    session_start();
    if(!isset($_SESSION['id_user'])){
    header("location:../../../index.php");
    }
    
    require __DIR__.'/../../App/App.php';
     $id = $_SESSION['id_user'];
     
    $data = App::getCurrentUserById($id);
    var_dump($data);
   
        

  ?>
