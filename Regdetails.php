<?php
session_start();
$servername = "localhost";  
$username = "root";
$password = " ";
$dbname = "SEProject";
$user=$_POST['username'];
$phno=$_POST['phno'];
$mail=$_POST['mail'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$_SESSION['username']=$user;
if($pass!=$cpass){
    //  die("Passwords doesn't match");
    echo '<script>alert("Password doesnt match")</script>';
    echo ("<script LANGUAGE='JavaScript'>window.location.href='SE_Register.php';
    </script>");
    
}
else{

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn=new mysqli("localhost","root","",$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = "INSERT INTO Registered (Userid,phno,email,pas,confirmpass)
    VALUES ('$user','$phno','$mail','$pass','$cpass')";
    $sql1 = "INSERT INTO Logindetails (Username,Password)
    VALUES ('$user','$cpass')";
    
}

if (($conn->query($sql) === TRUE)&&($conn->query($sql1) === TRUE)) {
        echo ("<script LANGUAGE='JavaScript'>window.location.href='Login.php';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?> 