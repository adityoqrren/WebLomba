<?php
    require_once("config.php");
    if(isset($_POST['register'])){
        $firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
        $name = $firstName." ".$lastName;
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $confirmPassword = password_hash($_POST['confirmPassword'],PASSWORD_DEFAULT);
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $date = $thn."-".$bln."-".$tgl;

        $bool = true;
        $result = $db->query("select username,email from users");
        
        while($user = $result->fetch(PDO::FETCH_ASSOC)){
            if(($user['username'] == $username) or ($user['email'] == $email)){
                $bool = false;
            }
        }
        
        if($bool and $_POST['password']==$_POST['confirmPassword']){
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
        }else if($_POST['password']!=$_POST['confirmPassword']){
            header("location: register.php?status=password tidak sama?");
        }
        else{
            header("location: register.php?status=Username or Email Already Used");
        }

        
    }else{
        die("Forbidden");
    }
?>