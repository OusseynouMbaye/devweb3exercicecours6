<?php
session_start();
if (isset($_SESSION['estConnecte'])&& $_SESSION['estConnecte']){
    echo 'connected';
}
else
{
    header('Location: http://devweb3exercicecours6.com/error.php');
}
?>
