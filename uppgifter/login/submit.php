<?php

$dbc = mysqli_connect("localhost","root","","form");

$username = $_POST['username'];

$password = $_POST['password'];

$query = "Select * from register where password='$password' and username='$username';";

$result = mysqli_query($dbc,$query);


?>