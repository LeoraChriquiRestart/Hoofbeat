<?php

try {
    $database = new PDO(
        "mysql:host=localhost;dbname=hoofbeat",
        "root",
        ""
    );
} catch(PDOException $error) {
    die("BOOM");
}

?>