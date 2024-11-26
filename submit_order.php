<?php
$servername = "localhost"; 
$username = "root";       
$password = "";           
$dbname = "customerlist";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$hamburger_type = $_POST['hamburger_type'];
$drink = $_POST['drink'];
$payment_method = $_POST['payment_method'];

$sql = "INSERT INTO transactions (first_name, middle_name, last_name, hamburger_type, drink, payment_method)
        VALUES ('$first_name', '$middle_name', '$last_name', '$hamburger_type', '$drink', '$payment_method')";

if ($conn->query($sql) === TRUE) {
    echo "<center><h1>Order submitted successfully!</h1>";
    echo "<h2><a href=index.html>Order More!</h2></center>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
