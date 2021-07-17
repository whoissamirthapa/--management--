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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"     integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../studentRegistration/student-registrationstyle.css">
    
    <title>Edit Student</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Student Edit</strong>
            </div>
            <div class="card-body p-4">
                <form class="row g-1" action="./student-editprocess.php" method="POST"  enctype="multipart/form-data">
                        <input type="hidden"  value="<?php echo $row['id'];?>" name="id" />
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" value="<?php echo $row['name'];?>" id="name" required />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" id="email" required />
                        </div>
                        <div class="col-md-6">
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="number" name="number" max="99999999999999" class="form-control" value="<?php echo $row['number'];?>" id="number" required />
                        </div>
                        <div class="col-md-6">
                            <label for="faculty" class="form-label">Faculty</label>
                            <select id="faculty" name="faculty" class="form-select" required >
                                <option selected disabled>Faculty</option>
                                <option value="Bsc CSIT" <?php if($row['faculty'] == "Bsc CSIT"){ echo "selected";}; ?> >Bsc CSIT</option>
                                <option value="Bsc" <?php if($row['faculty'] == "Bsc"){ echo "selected";}; ?> >Bsc</option>
                                <option value="BBA" <?php if($row['faculty'] == "BBA"){ echo "selected";}; ?> >BBA</option>
                                <option value="BBS" <?php if($row['faculty'] == "BBS"){ echo "selected";}; ?> >BBS</option>
                                <option value="B.ed" <?php if($row['faculty'] == "B.ed"){ echo "selected";}; ?> >B.ed</option>
                            </select>
                        </div>
                        <div class="col-12">
                            Gender
                        </div>
                        <div class="col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male"   <?php if($row['gender'] == "male"){echo "checked";}; ?>   required />
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if($row['gender'] == "female"){echo "checked";}; ?> required />
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="other" <?php if($row['gender'] == "other"){echo "checked";}; ?> required />
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address"  value="<?php echo $row['address'];?>" name="address" required />
                        </div>
                   
                        <div class="col-6">
                            <label for="guardian-name" class="form-label">Guardian's Name</label>
                            <input type="text" class="form-control" id="guardian-name" value="<?php echo $row['g_name'];?>" name="guardian-name" required />
                        </div>
                        <div class="col-6">
                            <label for="guardian-email" class="form-label">Guardian's email</label>
                            <input type="email" class="form-control" id="guardian-email" value="<?php echo $row['g_email'];?>" name="guardian-email" required />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="guardian-number" class="form-label">Guardian's Phone Number</label>
                            <input type="number" name="guardian-number" max="99999999999999" class="form-control"  value="<?php echo $row['g_number'];?>" id="guardian-number" required />
                        </div>
                        
                        <div class="col-md-12">
                            <input style="width: 100%;" type="submit" class="btn btn-primary" name="edit-student" value="Edit Student" />
                        </div>
                       
                   
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>