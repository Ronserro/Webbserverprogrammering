<?php

$dbc = mysqli_connect("localhost","root","","form");

$username = $_POST['username'];

$password = $_POST['password'];

$query = "Select * from register where password='$password' and username='$username';";

$result = mysqli_query($dbc,$query);

$print = mysqli_fetch_array($result);

if(isset($print)){
	echo "Successfully logged in!";
	echo "<br><br><br>";
	
	echo "Användarnamn";
	echo "<br>";
	echo $print['username'];
	echo "<br><br>";
	
	echo "Fullständigt namn";
	echo "<br>";
	echo $print['full_name'];
	echo "<br><br>";
	
	echo "Mail";
	echo "<br>";
	echo $print['mail'];
	echo "<br><br>";
	
	echo "Födelsedag";
	echo "<br>";
	echo $print['birthday'];
	echo "<br><br>";
	
	echo "Lösenord";
	echo "<br>";
	echo $print['password'];
	echo "<br><br>";
}

else{
	echo "Your Username or password is wrong please try again";
}
?>