<?php
session_start();
$servername = "localhost";  
$username = "root";
$password = " ";
$dbname = "SEProject";
$donorname=$_POST['name'];
$deadline=$_POST['deadline'];
$category=$_POST['category'];
$mail=$_POST['email'];
$prio=$_POST['demopriority'];
$address=$_POST['demomessage'];
// $_SESSION['username']=$user;

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn=new mysqli("localhost","root","",$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = "INSERT INTO Receiverdetails (Name,Email,Deadline,BloodGroup,Age,Address)
    VALUES ('$donorname','$mail','$deadline','$category','$prio','$address')";    
}

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Thank You! we will inform you soon..")</script>';
    echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/MainPage/SE_MainPage.php';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 