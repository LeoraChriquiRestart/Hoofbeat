<?php

// Vérification si l'utilisateur est connecté ou non
session_start();

if (isset($_SESSION['id'])) {
    session_destroy();
    
    header("Location: index.php"); 
    exit();
}

header("Location: index.php");