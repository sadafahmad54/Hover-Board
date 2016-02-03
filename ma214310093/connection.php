<?php
$hostname = "localhost: 3306";
$username = "root";
$password = "";
$dbname ="hoverboard";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error){
	# code
	die($connn->connect_error);
}

function listProducts(){
	global $conn;
	$counter = 1;
	$query = "SELECT * FROM hoverboards";
	$result = $conn->query($query);
	if(!$result){
		die($conn->error);
	}
	while($row=mysqli_fetch_array($result)){
		
		$productShown = "
						<td><img src=\"" . $row["pictrure"] . "\"  alt='SegWay' height='275' width='350'/>" . 
						"<br><center>" . $row["name"] . "</center>" . 
						"<center><strong>  &#3647;" . $row["price"] . "</strong></center>" . 
						"<form action='buy-product.php?q=buy' method='POST'>" . 
						"<input type='hidden' name='hoverboardName' value='" . $row["name"] . "'></input>" . 
						"<input type='hidden' name='price' value='" . $row["price"] . "'></input>" .
						"<input type='hidden' name='picture' value='" . $row["pictrure"] . "'></input>" .
						"<input type='hidden' name='numberInStock' value='" . $row["numberInStock"] . "'></input>" .
						"<button type='submit' name='button-buy'>BUY</button></form>" . 
						"</td>";
		
		if ($counter != 3) {
			echo $productShown;
			$counter = $counter + 1;
		}
		else {
			$counter = 1;
			echo $productShown . "</tr><tr>";
		}
	}
}


function checklogin($uusername, $upassword){
		global $conn;
		$query= "SELECT* FROM users";
		$result= $conn->query($query);
		if (! $result ) {
			 die($conn->error);

		}

			while ($row=mysqli_fetch_array($result)) {
				//echo "username". $row["$username"]. "<br>";
				//pass from database is encrypted so we need to encrypt here too so that it can compare the same type of encypted data. md5 is use for encryption
					if ($uusername==$row["username"] && md5($upassword)==$row["password"]) {
						return true;
					}


			}
			return false;

}             


	function addNewUser($u,$p){
		 global $conn;
		$query= "INSERT INTO users(`username`, `password`) VALUES('".$u."','".md5($p)."')";

		$conn->query($query);
	}




?> 