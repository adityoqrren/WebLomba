<?php
    require_once("config.php");
    if(isset($_POST['register'])){
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $date = $thn."-".$bln."-".$tgl;

        $sql = "insert into users(name,username,email,tgllahir,password) values(:name,:username,:email,:date,:password)";
        $stmt = $db->prepare($sql);

        //bind paramater ke query
        $params = [":name"=>$name,":username"=>$username,":password"=>$password,":email"=>$email,":date"=>$date];
        
        //eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);

        if($saved){
            header("location: login.php");
        }else{
            header("location: register.php?status=gagal");
        }
    }else{
        die("Forbidden");
    }
?>