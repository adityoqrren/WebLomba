<?php
    require_once("config.php");
    if(isset($_POST['register'])){
        $firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
        $name = $firstName." ".$lastName;
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $confirmPassword = password_hash($_POST['confirmPassword'],PASSWORD_DEFAULT);
        
        

        $bool = true;
        $result = $db->query("select username from admin");
        
        while($user = $result->fetch(PDO::FETCH_ASSOC)){
            if(($user['username'] == $username)){
                $bool = false;
            }
        }
        
        if($bool and $_POST['password']==$_POST['confirmPassword']){
            $sql = "insert into admin(nama,username,password) values(:name,:username,:password)";
            $stmt = $db->prepare($sql);

            //bind paramater ke query
            $params = [":name"=>$name,":username"=>$username,":password"=>$password];
        
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