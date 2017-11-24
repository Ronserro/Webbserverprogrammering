<?php

$dbc = mysqli_connect("localhost","root","","form");

$username = $_POST['username'];

$full_name = $_POST['full_name'];

$mail = $_POST['mail'];

$birthday = $_POST['birthday'];

$password = $_POST['password'];

$query = "insert into register (username, full_name, Mail, birthday, password) values ('$username','$full_name','$mail','$birthday','$password');";

mysqli_query($dbc,$query);

echo "Din information har nu lagts till i databasen";
?>