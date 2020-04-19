<?php

    session_start();

    if($_SESSION['Prihlaseno'] == true){
        session_destroy();
        header("location: Register.php");
	exit("Registrace");
    }else{
        header("location: Register.php");
	exit("Registrace");
    }
?>