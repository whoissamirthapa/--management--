<?php
session_start();
if(!isset($_SESSION["user"])){
		header("location: ../index.php ");
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
    <link rel="stylesheet" href="./teacher-registrationstyle.css">
    
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>Teachers' Form</strong>
            </div>
            <div class="card-body p-4">
                <form class="row g-1" action="./teacher-registrationprocess.php" method="POST"  enctype="multipart/form-data">
                    
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" id="name" required />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required />
                        </div>
                        <div class="col-md-6">
                            <label for="number" class="form-label">Phone Number</label>
                            <input type="number" name="number" max="99999999999999" class="form-control" id="number" required />
                        </div>
                        <div class="col-md-6">
                            <label for="faculty" class="form-label">Faculty</label>
                            <select id="faculty" name="faculty" class="form-select" required >
                                <option selected disabled>Faculty</option>
                                <option value="Bsc CSIT">Bsc CSIT</option>
                                <option value="Bsc">Bsc</option>
                                <option value="BBA">BBA</option>
                                <option value="BBS">BBS</option>
                                <option value="B.ed">B.ed</option>
                            </select>
                        </div>
                        <div class="col-12">
                            Gender
                        </div>
                        <div class="col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required />
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required />
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="other" required />
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required />
                        </div>
                   
                        <div class="col-md-12 mb-2">
                            <label for="image" name="image" class="form-label">Select Profile image</label><br />
                            <input type="file" id="image" name="image" />
                        </div>
                     
                        <div class="col-md-6">
                            <input style="width: 100%;" type="submit" class="btn btn-primary" name="add-teacher" value="Add Teacher" />
                        </div>
                        <div class="col-md-6">
                            <input style="width: 100%;" type="reset" class="btn btn-danger" name="reset-student" value="Reset Form" />
                        </div>
                        <div class="col-md-6 mt-3">
                            <a href="../home.php" class='btn btn-primary' role='button'>&LeftArrow; Previous</a>
                        </div>
                   
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>