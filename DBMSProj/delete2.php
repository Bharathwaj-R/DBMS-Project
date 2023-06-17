<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "vb";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

		$Year = $_POST['Year'];

		
				$sql = "DELETE FROM biopower WHERE Year = $Year";
				if ($conn->query($sql) === TRUE) {
					echo "the record deleted successfully";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
				  
				  $conn->close();

?>
			

		

