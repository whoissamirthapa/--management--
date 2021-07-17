<?php
session_start();
if(!isset($_SESSION["user"])){
		header("location: ../index.php ");
} 
?>
<?php  

include '../dbconnection.php';

$sql = " SELECT * FROM student";
$result = mysqli_query($conn, $sql);

 
$i = 1;

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
    <link rel="stylesheet" href="./student-displaystyle.css">
    
    <title>Student</title>
    <style>
       
    </style>
</head>
<body>
    <div class="main_container">
        <header class="main-header">
            <h1>Student Information</h1>
            
        </header>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Faculty</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Guardian Name</th>
                    <th scope="col">Guardian email</th>
                    <th scope="col">Guardian number</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['faculty']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['g_name']; ?></td>
                    <td><?php echo $row['g_email']; ?></td>
                    <td><?php echo $row['g_number']; ?></td>
                    <td>
                        <a href="./profile-student.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button" >
                        <i class="bi bi-eye"></i> View
                        </a>
                        <a href="./edit-student.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" role="button" >
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="./delete-student.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" role="button" >
                        <i class="bi bi-trash-fill"></i> Delete
                        </a>
                    </td>

                </tr>
                <?php  $i++; 
                   }?>
             
            </tbody>
        </table>

    </div>
    <div class="col-md-6 mt-3">
        <a href="../home.php" class='btn btn-primary' role='button'>&LeftArrow; Previous</a>
    </div>

</body>
</html>