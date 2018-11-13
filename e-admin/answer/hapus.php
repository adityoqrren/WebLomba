<?php
    include("../config.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "delete from jawaban where id_pil = :id";
        $stmt = $db->prepare($sql);
        $params = [":id" => $id];
        $stmt->execute($params);
        if($stmt){
            header('location: ../index.php');
        }else{
           die('gagal menghapus'); 
        }
    }else{
        die('akses dilarang');
    }
?>