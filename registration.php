<?php

session_start();

$con = mysqli_connect('localhost:3330','root','khunTun1997');

mysqli_select_db($con, 'userregistration');


$name = $_POST['user'];
$pass = $_POST['password'];


$s = "SELECT * FROM usertable WHERE name = '$name' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
        echo "Username has been already taken";
}else {
        $reg = "INSERT INTO usertable(name, password) VALUES('$name','$pass') ";
        mysqli_query($con, $reg);
        echo "Registration is successfully !!!";
}

?>