<?php
SESSION_START();

include "../dbconnection.php";

if( isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' ";
    
    $result = mysqli_query( $conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    if($email === $row['email'] && $password == $row['password']){

        $_SESSION['user'] = $username;
        echo "<script>
        window.alert('Log in successfully');
        window.location = '../home.php?id=$id';
        </script>";
    }else{
        echo "<script>
        window.alert('credential not matched');
        window.location = './userlogin.php';
        </script>";
        
    }
}






?>