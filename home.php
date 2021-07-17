
<?php
session_start();
if(!isset($_SESSION["user"])){
		header("location: index.php");
}


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
    <link rel="stylesheet" href="./style.css">
    <title>Home</title>
</head>
<body>

    <div class="container">
        <header class="main-header">
            <h1>Butwal Multiple Campus</h1>
            <i>Technical Staff</i>
        </header>
    </div>
    
    <div class="container">
        <header class="logout">    
            <a href="./logOut.php" class="btn btn-primary" role="button">Log Out</a>
        </header>
        <main>
            <header class="section-header">
                <h3>Add Individuals Section</h3>
            </header>
            <section>
               <a href="./studentRegistration/student-registration.php" class="btn btn-primary" role="button" > Add Student </a>

               <a href="./teacherRegistration/teacher-registration.php" class="btn btn-primary" style="margin-left: 1rem;" role="button" > Add Teacher </a>
            </section>
        </main>
    </div>
    <div class="container">
        
        <main>
            <header class="section-header">
                <h3>CRUD Individuals Section</h3>
            </header>
            <section>
               <a href="./CRUD-student/student-display.php" class="btn btn-primary" role="button" >CRUD Student </a>

               <a href="./CRUD-teacher/teacher-display.php" class="btn btn-primary"style="margin-left: 1rem;" role="button" >CRUD Teacher </a>
            </section>
        </main>
    </div>
</body>
</html>