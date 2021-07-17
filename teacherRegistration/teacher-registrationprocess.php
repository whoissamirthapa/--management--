<?php 

include "../dbconnection.php";

if( isset($_POST['add-teacher']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $faculty = $_POST['faculty'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
   
    $image_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $name_h = rand(000,999);
    $image_folder = "../image/".$name_h.$image_name;


    $sql = " INSERT INTO teacher( name, email, number, faculty, gender, address, image) VALUES('$name','$email','$number','$faculty','$gender','$address', '$image_folder') ";

    $result = mysqli_query( $conn, $sql);
    
    if($result){

        if (move_uploaded_file($temp_name, $image_folder))  {
            echo "
            <script>window.alert('inserted successfully');
            window.location = 'teacher-registration.php';
            </script>
           ";
        }else{
            echo "Failed to upload image";
        }
        
    }else{
        echo "error ".mysqli_error($conn);
    }




}








?>