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
$EnergyID = $_POST['EnergyID'];
$CostOfGeneration = $_POST['CostOfGeneration'];
$CapitalCost = $_POST['CapitalCost'];
$Alloted = $_POST['Alloted'];
$Cancelled = $_POST['Cancelled'];
$Source = $_POST['Source'];
$Commissioned = $_POST['Commissioned'];
$Year = $_POST['Year'];
$Potential = $_POST['Potential'];
$sql = "INSERT INTO energy (EnergyID ,CostOfGeneration ,CapitalCost ,Alloted ,Cancelled ,Source, Commissioned,Year,Potential)
VALUES ('$EnergyID', '$CostOfGeneration', '$CapitalCost','$Alloted','$Cancelled','$Source','$Commissioned','$Year','$Potential')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>