<?php
$mysqli = new mysqli("mysql.eecs.ku.edu","s663m589", "eigheiN3", "s663m589" );

if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$user= $_POST["user"];
if($user== "")
{
	echo "Can't store an empty text field.";
	exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('".$user."')";
if($mysqli->query($query))
	{
		echo "New user ".$user." stored successfully. <br>";
	}
	else{
		echo "The user ".$user." already exists.<br>";
	}


$mysqli->close();
?>