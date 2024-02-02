<?php

    include_once "./utility.php";
    session_start();
    var_dump($_POST);

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM USERS where username = '$username' and password = '$password'";
        $result = $db->query($query);

        if($result->num_rows == 1){
            $row = $result->fetch_object();
            $_SESSION["isLogin"] = true;
            $_SESSION["username"] = $row->username;
            $_SESSION["email"] = $row->email;
            header("location: ./home.php");
        }else{
            $_SESSION["error-message"] = "username or password is inncorect!";
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("location: ./index.php");
        }
    }else{
        echo "else";
    }