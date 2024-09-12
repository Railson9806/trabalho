<?php

session_start();

if(!isset($_SESSION['nome']) || $_SESSIN['nome'] == ''){
    session_destroy();
    header("Location: index.php");
}

?>