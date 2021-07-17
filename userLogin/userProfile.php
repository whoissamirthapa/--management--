<?php
session_start();
if(!isset($_SESSION["user"])){
		header("location: ../index.php ");
} 
?>
<?php 
include "../dbconnection.php";
$id = $_GET['id'];

$sql = " SELECT * FROM student WHERE id = $id";
$result = mysqli_query( $conn, $sql);
$row = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./userProfilestyle.css">
    <title>Profile</title>
</head>
<body>
    <div class="user_card">
        <img src="<?php echo $row['image']; ?>" alt="image" style="width:100%">
        <div class="info_container">
            <h4>
            <b><?php echo $row['name']; ?></b>
            </h4>
          <p>
            <address><?php echo $row['address'] ?></address>
          </p>
          <p>
            <address><?php echo $row['email'] ?></address>
          </p>
        </div>
      </div>
</body>
</html>