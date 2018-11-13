<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $soal = $_POST['soal'];
        $materi = $_POST['materi'];
        $jawaban = $_POST['jawaban']; 
        
        $sql = "update soal set soal=:soal,materi_id = :materi,jawaban = :jawaban where id_soal= :id";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":soal"=>$soal,":materi"=>$materi,":id"=>$id,":jawaban"=>$jawaban];
            var_dump($params);
            //eksekusi query untuk menyimpan ke database
            $saved = $stmt->execute($params);

            if($saved){
                header("location: new_form.php?status=sukses");
            }else{
                header("location: new_form.php?status=gagal");
            }

        
    }else{
        die("Forbidden");
    }
?>