<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $isi = $_POST['isi'];
        $author = $_POST['author'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $date = $thn."-".$bln."-".$tgl;
        $photo = $_POST['photo'];
        

            $sql = "insert into blog values(null,:title,:description,:author,:date,:isi,:photo)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":description"=>$description,":date"=>$date,":photo"=>$photo,":isi"=>$isi,":author"=>$author];
        
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