<?php
    include("../config.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "delete from soal where id_soal = :id";
        $stmt = $db->prepare($sql);
        $params = [":id" => $id];
        $stmt->execute($params);
        if($stmt){
            header('location: index.php');
        }else{
           die('gagal menghapus'); 
        }
    }else{
        die('akses dilarang');
    }
?>