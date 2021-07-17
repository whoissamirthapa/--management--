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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link rel="stylesheet" href="profile-studentstyle.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="pre_pro_cont">
           
        </div>
        <div class="profile__container">
            <div class="img__container">
                <img  src="<?php echo $row['image']; ?>" alt="image">
            </div>
            <div class="name_container">
                <strong> <?php echo $row['name']; ?></strong><br />
                <i>Student of <?php echo $row['faculty']; ?></i>
            </div>
            <main class="student__info">
                
                <div class="student_conainer">
                    <strong>Student Info</strong>
                    <table>
                        <tr>
                            <th>Email:</th>
                            <td> <?php echo $row['email']; ?></td>
                            <th>Number:</th>
                            <td> <?php echo $row['number']; ?></td>
                        </tr>
                        
                        <tr>
                            <th>Gender:</th>
                            <td> <?php echo $row['gender']; ?></td>
                        
                            <th>Address:</th>
                            <td><?php echo $row['address']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="g_container">
                <strong>Guardian's Info</strong>
                    <p class="falsdfk">
                        <table>
                            <tr>
                                <th>Name:</th>
                                <td> <?php echo $row['g_name']; ?></td>
                            
                                <th>Email:</th>
                                <td> <?php echo $row['g_email']; ?></td>
                            </tr>
                            <tr>
                                <th>Number:</th>
                                <td> <?php echo $row['g_number']; ?></td>
                           
                            </tr>
                            
                        </table>
                    </p>
                </div>
            </main>
        </div>
    </div>





















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>