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
    <link rel="stylesheet" href="loginstyle.css">
    
    <title>Log In</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <strong>User Log In</strong>
            </div>
            <div class="card-body">
                <form action="./loginprocess.php" method="POST">
                    
                    <div class="mb-1">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                    
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <div class="mb-2 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                      </div>
                    
                    <input type="submit" class="btn btn-primary" name="login" value="Log In" />
                </form>
                <p>Not Registered? <a href="../userRegistration/register.php">Register Now</a></p>
            </div>
        </div>
    </div>
    
</body>
</html>