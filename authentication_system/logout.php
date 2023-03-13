<?php
    require("dbconnect.php");

    session_start();

    if(isset($_SESSION['user']))
    {
        session_unset();
        session_destroy();
    }
    header('location: /authentication_system/login.php/');

?>