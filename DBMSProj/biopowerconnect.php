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
$PowerplantID = $_POST['PowerplantID'];
$EnergyID = $_POST['EnergyID'];
$Area = $_POST['Area'];
$EnergyGenerated = $_POST['EnergyGenerated'];
$Cost = $_POST['Cost'];
$NoOfPlants = $_POST['NoOfPlants'];
$State = $_POST['State'];
$Year = $_POST['Year'];

$sql = "INSERT INTO biopower (EnergyID ,PowerplantID,Area ,EnergyGenerated ,NoOfPlants ,Cost ,Year ,State)
VALUES ('$EnergyID', '$PowerplantID', '$Area', '$EnergyGenerated','$NoOfPlants','$Cost','$Year','$State')";

if ($conn->query($sql) === TRUE) {
  echo "   ";
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>