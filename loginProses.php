<?php
    $user = $_POST["username"];
    $pass = $_POST["pasword"];

    if($user=="admin" && $pass=="1234"){
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "administrator";
        header("Location:homeSession.php");
    }
    else{
        echo "usernmae atau pasword tidak sesuai <br>";
        echo '<a href ="loginForm.html">kembali ke halaman login </a> ';
    }
?>