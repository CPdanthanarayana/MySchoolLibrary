<?php
$servername = "localhost";
$database = "echanneling";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // Collect form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $gender =$_POST['gender'];
    $contNum =$_POST['contNum'];
    
    // Prepare the SQL statement
    $sql = "INSERT INTO registration_form(name,address,NIC,gender,contact_No) 
    VALUES ('$name','$address','$nic','$gender','$contNum');";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!" ;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

    // Close the statement and connection
    mysqli_close($conn);

?>

<button><a href="barcode.php">next</a></button>
