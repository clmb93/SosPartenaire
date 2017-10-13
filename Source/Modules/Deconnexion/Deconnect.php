<?php
session_start();
session_destroy();

header('Refresh:2;url=../../index.php');
echo "<meta charset='utf-8'><h1 align='center'>Déconnexion réussie , vous allez être redirigé(e)</h1>";
