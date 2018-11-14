<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $date = $thn."-".$bln."-".$tgl;
        $desc = $_POST['description'];

        $photo = $_FILES['photo']['name'];
        $tempPho = $_FILES['photo']['tmp_name'];
        $imageSize = $_FILES['photo']['size'];
        $dir = "../../images/";
        

        $imgExt = strtolower(pathinfo($photo,PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg','jpg','png','gif');
        $pic = rand(1000,1000000).".".$imgExt;
        $terupload = move_uploaded_file($tempPho,$dir.$pic);
        if($terupload){
            echo "upload";
        }else{
            echo "not";
        }
        
        
            $sql = "insert into course(title,author,create_date,description,photo) values(:title,:author,:date,:desc,:photo)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":author"=>$author,":date"=>$date,":desc"=>$desc,":photo"=>$pic];
        
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