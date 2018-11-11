<?php
    require_once("config.php");
    if(isset($_POST['login'])){
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

        $sql = "select * from users where username=:username or email=:email";
        $stmt = $db->prepare($sql);
        $params = [":username" => $username,":email"=>$username];
        $stmt->execute($params);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            //verifikasi password
            if(password_verify($password,$user["password"])){
                //session
                session_start();
                $_SESSION["user"]= $user;
                //login sukses
                header("Location: timeline.php");
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