<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $title = $_POST['title'];
        $curriculum = $_POST['curriculum'];
        $isi = $_POST['isi'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $date = $thn."-".$bln."-".$tgl;
        $photo = $_POST['photo'];
        

            $sql = "insert into materi values(null,:title,:date,:photo,:isi,:curriculum)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":curriculum"=>$curriculum,":date"=>$date,":photo"=>$photo,":isi"=>$isi];
        
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