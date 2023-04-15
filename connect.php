<?php
    $dsn = "mysql:host=localhost;dbname=lbsql";
    $user = 'root';
    $pass = '';

    try {
        $dbh = new PDO($dsn, $user, $pass);
    } catch (PDOException $ex) {
        echo $ex->GetMessage();
    }
?>