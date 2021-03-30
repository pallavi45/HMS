<?php
	session_start();
	$uname="";
	$pswd="";
	//$user_type = "";
	$db_password="";
    $dbname="SEProject";
    $conn=new mysqli("localhost","root","",$dbname);

	$conn->query("SEProject");
	$uname=$pswd=$dbpswd=$dbuname=$result=$sql="";

	if($_SERVER["REQUEST_METHOD"]=="POST"){

		if(empty($_POST["username"]) || empty($_POST["password"])){
            echo "<script>alert('username/password can not empty') ;</script>";
            echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/Login.php';
    </script>");
		}
		else{
			$un=$_POST["username"];
			$uname=strtolower($un);
			$pswd=$_POST["password"];
			$_SESSION['username']=$uname;
			$_SESSION['logedin']=true;
			//$user_type = $_POST["user-type"];
		}
        $connection = mysqli_connect("localhost","root","","SEProject");
        
		if(!$connection)
		{
			die("Connection Failed");
		}
  }
  
    //getting data from data base

    //  if($user_type =="Faculty"){
			
	// 			$query = "SELECT username,pwd FROM facultylogindetails WHERE username= '$uname' AND pwd = '$pswd'"; 
	// 			$get_details = mysqli_query($connection,$query);
	// 			$count = mysqli_num_rows($get_details);
	// 			if($count == 1)
	// 			{	
	// 				$_SESSION["username"]=$uname;
	// 				$_SESSION["password"]=$pswd;
	// 				echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/NewPage/facCheckuserLogins.php';</script>");
	// 			}
	// 			else
	// 			{
	// 				echo("<script>window.alert('Password or Username incorrect')</script>");
	// 				echo ("<script LANGUAGE='JavaScript'>window.location.href='Login.php';</script>");
	// 			}
	// 		}	
	// 		// else{
	// 			// echo("<script>window.alert('User not Found')</script>");
	// 		// }
        
			$query = "SELECT Username,Password FROM Logindetails WHERE Username= '$uname' AND Password = '$pswd'"; 
			$get_details = mysqli_query($connection,$query);
			$count = mysqli_num_rows($get_details);
			if($count == 1)
			{
				
				$_SESSION["username"]=$uname;
				$_SESSION["password"]=$pswd;
				//echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/NewPage/Admin/Home_Student.php';</script>");
				echo ("<script LANGUAGE='JavaScript'>window.location.href='http://localhost/PHP/SE_Project/SE/MainPage/SE_MainPage.php';</script>");

			}
			else
			{
				echo("<script>window.alert('Password or Username incorrect')</script>");
				echo ("<script LANGUAGE='JavaScript'>window.location.href='Login.php';</script>");
			}
		// }
		// else{
		// 	echo("<script>window.alert('User not Found')</script>");
		// }
    /*$sql="SELECT username,password from logindetails WHERE username='$uname' and password='$pswd'";
    $result=$conn->query($sql);
    //storing db_data in variables
    
    if($result->num_rows > 0){
    	while ($row=$result->fetch_assoc()) {
    		$dbuname=$row["username"];
			$dbpswd=$row["password"];
			
    	}
    	//session 
    	session_start();
    	$_SESSION["username"]=$dbuname;
    	if(isset($_SESSION["username"])){
    		header("Location:http://localhost/PHP/NewPage/Admin/Home.html");
      }
    }
    else{
        //echo "<script>alert('wrong credentials');</script>";
        //echo ("<script LANGUAGE='JavaScript'>window.location.href='Login.php';
    //</script>");
    }*/
?>