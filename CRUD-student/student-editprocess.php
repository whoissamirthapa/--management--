<?php 

include "../dbconnection.php";

if( isset($_POST['edit-student']) ){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $faculty = $_POST['faculty'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $g_name = $_POST['guardian-name'];
    $g_email = $_POST['guardian-email'];
    $g_number = $_POST['guardian-number'];


    // echo $name."<br/>";
    // echo $faculty."<br/>";
    // echo $gender."<br/>";
    // echo $g_email."<br>";
    // echo $g_name."<br>";
    // echo $g_number."<br>";
    // echo $image_name."<br/>";
    // echo $image_folder."<br>";

    $sql = " UPDATE student SET name = '$name', email = '$email', number = '$number', faculty = '$faculty', gender = '$gender', address = '$address', g_name = '$g_name', g_email = '$g_email', g_number = '$g_number' WHERE id= $id ";

    $result = mysqli_query( $conn, $sql);
    
    if($result){
        echo "
            <script>window.alert('updated successfully');
            window.location = './student-display.php';
            </script>
            
           ";
        
    }else{
        echo "error ".mysqli_error($conn);
    }

}


?>