<?php
    $db_host = "localhost";
    $db_user = "alfath";
    $db_pass = "cyber";
    $db_name = "websiteapp";

    try{
        $db = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Terjadi masalah: ".$e->getMessage());
    }
?>