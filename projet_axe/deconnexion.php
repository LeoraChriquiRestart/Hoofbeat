<?php

// Vérification si l'utilisateur est connecté ou non
session_start();

if (isset($_SESSION['id'])) {
    error_log("Session found for pseudo : " . $_SESSION['id'] . " deleting this session");
    session_destroy();
    
    header("Location: index.php"); 
    exit();
}

header("Location: index.php");