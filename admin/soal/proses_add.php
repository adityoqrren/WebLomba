<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $soal = $_POST['soal'];
        $materi = $_POST['materi'];
        $jawaban = $_POST['jawaban'];        

            $sql = "insert into soal values(null,:soal,:jawaban,:materi)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":soal"=>$soal,":materi"=>$materi,":jawaban"=>$jawaban];
        
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