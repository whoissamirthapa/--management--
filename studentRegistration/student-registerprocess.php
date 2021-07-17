<?php 

include "../dbconnection.php";

if( isset($_POST['add-student']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $faculty = $_POST['faculty'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $g_name = $_POST['guardian-name'];
    $g_email = $_POST['guardian-email'];
    $g_number = $_POST['guardian-number'];

    $image_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $name_h = rand(000,999);
    $image_folder = "../image/".$name_h.$image_name;


    // echo $name."<br/>";
    // echo $faculty."<br/>";
    // echo $gender."<br/>";
    // echo $g_email."<br>";
    // echo $g_name."<br>";
    // echo $g_number."<br>";
    // echo $image_name."<br/>";
    // echo $image_folder."<br>";

    $sql = " INSERT INTO student( name, email, number, faculty, gender, address, g_name, g_email, g_number, image) VALUES('$name','$email','$number','$faculty','$gender','$address','$g_name','$g_email','$g_number','$image_folder') ";

    $result = mysqli_query( $conn, $sql);
    
    if($result){

        if (move_uploaded_file($temp_name, $image_folder))  {
            echo "
            <script>window.alert('inserted successfully');
            window.location = 'student-registration.php';
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