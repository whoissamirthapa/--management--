
<?php 

include "../dbconnection.php";

if(isset($_POST["register"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);
    $cpassword =md5($_POST['cpassword']);
    $otp = rand(0000,9999);
    
    if( $password===$cpassword){

        $sql = "INSERT INTO users(name,email,address,password,otp,status) VALUES('$name','$email','$address','$password','$otp','pending')";
        
        if(mysqli_query($conn,$sql)){
            echo "<script>
            window.alert('data inserted successfully');
            window.location = '../userLogin/userlogin.php';
            </script>";
            // header("location: ../userLogin/userlogin.html");
        }else{
            echo "sql ".$sql." error ".mysqli_error($conn);
        }
        
    }else{
        echo 
        "<script>
        window.alert('password not matched');
        window.location = 'register.php';
        </script>";
    }


}












?>