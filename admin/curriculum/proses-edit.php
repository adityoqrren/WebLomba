<?php
    require_once("../config.php");
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $course = $_POST['course'];
        
        $sql = "update curriculum set title=:title,course_id = :course where id_cur= :id";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":title"=>$title,":course"=>$course,":id"=>$id];
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