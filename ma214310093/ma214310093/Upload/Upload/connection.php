<?php

	$hostname = "localhost:3306";
	$usrename = "root";
	$password = "";
	$dbname   =  "ite220_userinfo";
	$conn     = new mysqli($hostname,$usrename,$password,$dbname);
	if ($conn->connect_error) {
		# code...
		die($conn->connect_error);
	}


function checklogin($uusername, $upassword){
		global $conn;
		$query= "SELECT* FROM users";
		$result= $conn->query($query);
		if (! $result ) {
			 die($conn->error);

		}

			while ($row=mysqli_fetch_array($result)) {
				echo "username". $row["$username"];


			}
}













?>