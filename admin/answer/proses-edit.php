<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $isi = $_POST['isi'];
        $pilihan = $_POST['pilihan'];
        $soal = $_POST['soal'];  
        
        $sql = "update jawaban set pil=:pilihan,id_soal = :soal,isiPil = :isi where id_pil= :id";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":soal"=>$soal,":pilihan"=>$pilihan,":id"=>$id,":isi"=>$isi];
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