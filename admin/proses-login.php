<?php
    require_once("config.php");
    if(isset($_POST['login'])){
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

        $sql = "select * from admin where username=:username";
        $stmt = $db->prepare($sql);
        $params = [":username" => $username];
        $stmt->execute($params);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if($admin){
            //verifikasi password
            if(password_verify($password,$admin["password"])){
                //session
                session_start();
                $_SESSION["admin"]= $admin;
                //login sukses
                header("Location: index.php");
            }else{
                header("Location: login.php?status=password");
            }
        }else{
            header("Location: login.php?status=user");
        }
    }else{
        die("acces forbiden");
    }
?>