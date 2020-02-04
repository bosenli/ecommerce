<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4" style="background-color:green">
                <form action="signup.php" method="post">
                    <h3 class="text-cen">Register</h3>
                    <div class="form-group">
                        <label for="username" class="for">Username</label>
                        <input type="text" name="username" class="form-control-form form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="email" class="for">Email</label>
                        <input type="email" name="email" class="form-control-form form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="password" class="for">Password</label>
                        <input type="password" name="password" class="form-control-form form-control-lg">
                    </div>

                    <div class="form-group">
                        <label for="passwordConf" class="for">Confirm Password</label>
                        <input type="password" name="password" class="form-control-form form-control-lg">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>

                    <p class="text-center">Already a member?<a href="login">Sign In</a></p>

                </form>
            </div>
        </div>
    </div>

</body>

</html>