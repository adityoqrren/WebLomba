<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $title = $_POST['title'];
        $course = $_POST['course'];
        

            $sql = "insert into curriculum values(null,:title,:course)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":course"=>$course];
        
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