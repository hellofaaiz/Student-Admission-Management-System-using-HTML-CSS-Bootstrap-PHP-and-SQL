<?php
$First_Name = $_POST['First_Name'];
$Surename = $_POST['Surename'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Gender = $_POST['Gender'];
$Date_of_Birth = $_POST['Date_of_Birth'];
$Address = $_POST['Address'];
$Nationality = $_POST['Nationality'];
$City = $_POST['City'];
$Postal = $_POST['Postal'];
$Country = $_POST['Country'];
$Department = $_POST['Department'];
$Shift = $_POST['Shift'];
$Season = $_POST['Season'];
$accept = 'false';

// Database connection
$conn = new mysqli('localhost', 'root', '', 'admission_system');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO student_details (First_Name, Surename, Email, Mobile, Gender, Date_of_Birth, Address, Nationality, City, Postal, Country, Department, Shift, Season, accept) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssssss", $First_Name, $Surename, $Email, $Mobile, $Gender, $Date_of_Birth, $Address, $Nationality, $City, $Postal, $Country, $Department, $Shift, $Season, $accept);
    $execval = $stmt->execute();

    if ($execval) {
        echo "Registration successful...";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>