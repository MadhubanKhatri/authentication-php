<?php
    session_start();
    if(isset($_SESSION['user']))
    {

    
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    #container
    {
        margin-top: 200px;
    }
</style>
<body class="bg-warning text-danger">
    
    <div class="container w-50 py-4 px-4 bg-dark rounded-4" id="container">
        <div class="container">
            <hr>
            <center>
                <h2 class="mx-5 my-5">Authentication System in PHP</h2>
            </center>
            <hr>
        </div>
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
        header('location: /authentication_system/login.php/');
    }
?>