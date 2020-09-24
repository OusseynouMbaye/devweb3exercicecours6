<?php
session_start();
    if($_POST['user']==strrev(($_POST['password']))){
        $_SESSION['estConnecte']=true;
        header('Location: http://devweb3exercicecours6.com/connected.php');
    }
    else
    {
        $_SESSION['estConnecte']=false;
        header('Location: http://devweb3exercicecours6.com/error.php');
    }
