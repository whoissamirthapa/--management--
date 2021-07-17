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
    <link rel="stylesheet" href="registerstyle.css">
    
    <title>Register</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>User Registration</strong>
            </div>
            <div class="card-body">
                <form action="./registerprocess.php" method="POST">
                    <div class="mb-1">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-1">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-1">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-1">
                        <label for="cpassword" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword">
                    </div>
                    <div class="mb-2 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                      <label class="form-check-label" for="exampleCheck1">Agree policy</label>
                    </div>
                    <input type="submit" class="btn btn-primary" name="register" value="Register" />
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>