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
        $photo = $_FILES['photo']['name'];
        $tempPho = $_FILES['photo']['tmp_name'];
        $imageSize = $_FILES['photo']['size'];
        $dir = "../../images/";

        $imgExt = strtolower(pathinfo($photo,PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg','jpg','png','gif');
        $pic = rand(1000,1000000).".".$imgExt;
        $terupload = move_uploaded_file($tempPho,$dir.$pic);
        

            $sql = "insert into materi values(null,:title,:date,:photo,:isi,:curriculum)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":curriculum"=>$curriculum,":date"=>$date,":photo"=>$pic,":isi"=>$isi];
        
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