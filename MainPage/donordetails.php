<?php
session_start();
$servername = "localhost";  
$username = "root";
$password = " ";
$dbname = "SEProject";
$donorname=$_POST['name'];
$category=$_POST['category'];
$mail=$_POST['email'];
$prio=$_POST['demopriority'];
$msg=$_POST['demomessage'];
// $_SESSION['username']=$user;

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn=new mysqli("localhost","root","",$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = "INSERT INTO Donordetails (Name,Email,BloodGroup,Age,Message)
    VALUES ('$donorname','$mail','$category','$prio','$msg')";    
}

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Thank You")</script>';
    echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/MainPage/SE_MainPage.php';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 