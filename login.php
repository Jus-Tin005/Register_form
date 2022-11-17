








<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login & Sign Up Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container">
        <div class="login-box">
                <div class="row">
                        <div class="col-md-6 login-left">
                                <h2>Login Here</h2>
                                <form action="./validation.php" method="post">
                                        <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="user" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-success">Login</button>
                                </form>
                        </div>

                        <div class="col-md-6 login-right">
                                <h2>Register Here</h2>
                                <form action="./registration.php" method="post">
                                        <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" name="user" class="form-control" required>
                                        </div>
                                        <div class="form-group mb-3">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-success">Register</button>
                                </form>
                        </div>
                </div>
        </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>