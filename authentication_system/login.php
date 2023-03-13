<?php
    require("dbconnect.php");
    session_start();

    $error = false;
    $err_msg = "";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];

        if(empty($email) || empty($pwd))
        {
            $error = true;
            $err_msg = "All the fields are required";
        }
        else
        {
            $sql_query = "SELECT * FROM `user_accounts` WHERE `email`='$email' and `password`='$pwd'";
            $execute_query = mysqli_query($conn, $sql_query);
            $row = mysqli_fetch_assoc($execute_query);

            if($row)
            {
                $_SESSION['user'] = $email;
                header("location: /authentication_system/welcome.php/");
            }
        }
    }

?>

<?php
    if(!isset($_SESSION['user']))
    {

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-warning text-danger">
    <div class="container w-50 my-4 py-4 px-4 bg-dark  rounded-4">
    <h2>Login</h2>
    <hr>
    <?php
        if($error)
        {
            echo '<div class="alert alert-danger" role="alert">
                   <strong>Error!</strong> '.$err_msg.'
                   </div>';
        }
    
    ?>
    <form action="/authentication_system/login.php/" method="post">
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="submit" class="btn btn-danger" value="Login">
        </div>
        <hr>
        <a href="/authentication_system/signup.php/">Don't have an account?</a>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
    }
    else
    {
        header("location: /authentication_system/welcome.php/");
    }
?>