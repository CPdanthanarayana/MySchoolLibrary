<?php
$servername = "localhost";
$database = "echanneling";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$address = $_POST["address"];
$nic = $_POST["nic"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$hospital = $_POST["hospital"];
$specialization = $_POST["specialization"];


// Insert data
$sql = "INSERT INTO appointment_form (Name_with_initials,Address,NIC_Number,Gender,Age,Hospital_Name,Specialization)
VALUES ('$name','$address','$nic','$gender','$age','$hospital','$specialization');";

if (mysqli_query($conn, $sql)) {
    header('Location:form.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
