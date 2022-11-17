<?php
session_start();
if(!isset($_SESSION['username'])){
        header('location:login.php');
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet" type="text/css"/>
        <style>

        </style>
</head>
<body>
        <div class="container">
                <a href="./logout.php" class="float-right">LOGOUT</a>
                <h1>Welcome To My World !!! <?php  echo $_SESSION['username'];  ?></h1>
        </div>
</body>
</html>