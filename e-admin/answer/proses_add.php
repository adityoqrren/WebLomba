<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $isi = $_POST['isi'];
        $pilihan = $_POST['pilihan'];
        $soal = $_POST['soal'];        

            $sql = "insert into jawaban values(null,:pilihan,:isi,:soal)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":pilihan"=>$pilihan,":isi"=>$isi,":soal"=>$soal];
            var_dump($params);
            //eksekusi query untuk menyimpan ke database
            $saved = $stmt->execute($params);

            if($saved){
                header("location: new_form.php?status=sukses");
            }else{
                // header("location: new_form.php?status=gagal");
            }

        
    }else{
        die("Forbidden");
    }
?>