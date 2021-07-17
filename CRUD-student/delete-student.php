<?php 

include "../dbconnection.php";

$id = $_GET['id'];

$sql = " DELETE FROM student where id = $id";

$result = mysqli_query($conn, $sql);

if($result){
    echo " <script> window.alert('Student deleted successfully');
           window.location = 'student-display.php';
    
    </script>";
}else{
    echo "Error while deleting ".mysqli_error($conn);
}




?>