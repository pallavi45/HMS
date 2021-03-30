
  <?php 
  session_start();
  $username = $_SESSION ['username'];
  
  if ($username)
  {
  }
  else{
      echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/index.php';
      </script>");
  }
  ?>
<?php
session_start();
$servername = "localhost";  
$username = "root";
$password = " ";
$dbname = "SEProject";
$feedbac=$_POST['demomessage'];
$user=$_SESSION['username'];
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
$conn=new mysqli("localhost","root","",$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = "INSERT INTO feedback (User,Userfeedback)
    VALUES ('$user','$feedbac')";
    
}

if ($conn->query($sql) === TRUE) {
        session_destroy();
        echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/index.php';
    </script>");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 