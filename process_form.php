<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "mydatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$state = $_POST['state'];
$city = $_POST['city'];
$country = $_POST['country'];
$pincode = $_POST['pincode'];

$sql = "INSERT INTO userdata (name, phone, email, state, city, country, pincode)
        VALUES ('$name', '$phone', '$email', '$state', '$city', '$country', '$pincode')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
