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
        $photo = $_POST['photo'];
        $id = $_POST['id'];
        
        $sql = "update course set title=:title,author=:author,create_date = :date,description =:desc,photo = :photo where id_course= :id";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":author"=>$author,":date"=>$date,":desc"=>$desc,":photo"=>$photo,":id"=>$id];
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