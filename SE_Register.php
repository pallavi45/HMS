
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    input{
    width: 50%;
    height: 10%;
  }
    #p
    {
        font-family: sans-serif;
        font-size:13px;
        margin-top:-9pc;
    }
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 25%;
  margin-left: 510px;
  margin-top:40px;
  background-color: white;
  

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px 10px 20px;
}
#dev
{
  margin-left:1100px;
  margin-top:-30px;

}
.scrol
{
  margin-top:18pc;
}
.topnav {
  background-color:#1ff7ec  ;
  border-radius: 0px 0px 10px 10px;
  /* -webkit-animation: 10pc; */
  
}

#pointer {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      margin-left: 50px;
      margin-top:150px;
      width: 160px;
      height: 30px;
      padding-top: 5px;
      position: relative;
      background:#1ff7ec;
      padding-left: 80px;
      border-radius: 0px 0px 0px 10px;
  float: left;
    }
    #pointer:hover
    {
      box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      /* margin-left: 50px; */
      margin-top:160px;
      width: 200px;
      height: 40px;
      padding-top: 5px;
      position: relative;
      background:#1ff7ec;
      padding-left: 80px;
      border-radius: 0px 0px 0px 10px; 
    }
    #pointer1:hover
    {
      box-shadow: 0 5px 10px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      /* margin-left: 50px;*/
      margin-top:210px;
      width: 150px; 
      height: 40px;
      padding-top: 5px;
      position: relative;
      background:#1ff7ec;
      padding-left: 80px;
      border-radius: 0px 0px 0px 10px; 
    }
    #pointer:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 0px solid white;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
    #pointer:before {
      content: "";
      position: absolute;
      right: -20px;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 20px solid rgb(31, 247, 236);
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }

    #pointer1 {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      margin-left: -240px;
      margin-top:200px;
      width: 160px;
      height: 30px;
      padding-top: 5px;
      position: relative;
      background:#1ff7ec;
      padding-left: 80px;
      border-radius: 0px 0px 0px 10px;
    float: left;
    }
    #pointer1:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 0px solid white;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
    #pointer1:before {
      content: "";
      position: absolute;
      right: -20px;
      bottom: 0;
      width: 0;
      height: 0;
      border-left: 20px solid rgb(31, 247, 236);
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
    }
    .button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 0px 0px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
}
.open-button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  height: 40%;
  margin-left:50px;
  background-color: white;
  padding-left: 0%;
}
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  height: 40%;
  float: left;
  margin-left:350px;
  margin-top: -13pc;
  background-color: white;
}
#img1 {
  border-radius: 5px 5px 0 0;
}
.hom
{
  margin-left: 1210px;
}

/*pop Up*/
body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Button used to open the contact form - fixed at the bottom of the page */
        
        .open-button {
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: absolute;
            margin-left:67pc;
            margin-top:-73pc;
            width: 90px;
            height: 20px;
            padding-bottom: 1.7pc;
            padding-top: 0.8pc;
            background-color: #4CAF50; 
            border-radius: 1pc;
        
        }
        /* The popup form - hidden by default */
        
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            width: 400px;
            height: 550px;
            margin-right: 490px;
            z-index: 9;
            overflow-y: scroll;

        }
        /* Add styles to the form container */
        
        .form-container {
            max-width: 400px;
            padding-left: 10px;
            padding-right: -10px;
            background-color: white;
        }
        /* Full-width input fields */
        
        .form-container input[type=text],
        input[type=email],
        input[type=tel],
        .form-container input[type=password] {
            width: 75%;
            padding-right: 15px;
            font-size: 17px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        /* When the inputs get focus, do something */
        
        .form-container input[type=text]:focus,
        input[type=email]:focus,
        input[type=tel]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        
        .year {
            width: 30%;
            height: -30%;
            padding-right: 15px;
            font-size: 15px;
            margin: 5px 0 20px 0;
            border: none;
            background: #f1f1f1;
        }
        
        .gen {
            /* padding-right: 15px; */
            font-size: 15px;
            /* margin: 5px 0 20px 0; */
            margin-left: 130%;
            margin-top: -3pc;
            background: #f1f1f1;
        }
        
        .gend {
            width: 30%;
            height: -30%;
            padding-right: 15px;
            font-size: 15px;
            /* margin: 5px 0 20px 0; */
            margin-left: 35%;
            margin-top: -4.3pc;
            background: #f1f1f1;
        }
        /* Set a style for the submit/login button */
        
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 16px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }
        /* Add a red background color to the cancel button */
        
        .form-container .cancel {
            background-color: red;
        }
        /* Add some hover effects to buttons */
        
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }
</style>
</head>
<body>
    <div id="body">
        <div class="topnav">
        <br>
        <br>
        </div>
        
       
        <div class="card"> 
            <form action="Regdetails.php" method="POST" id="form1">
                    <center><br>
                        <h1>Register </h1><br>
                    UserId:<br>
                    <input type="text" name="username" required><br><br>
                    PhNo:<br>
                    <input type="text" name="phno"><br><br>
                    Email Id:<br>
                    <input type="text" name="mail" required><br><br>
                    Password:<br>
                    <input type="password" name="password" required><br><br>
                    Confirm Password:<br>
                    <input type="password" name="cpassword" required><br><br><br>
                    <!-- User-Type:<br>
                    <input type="text" name="user-type" value="Student" readonly><br><br><br> -->
                    <button class="button" class="open-button">Submit</button>    
                </form><br><br>
                
              
                </center>
                </form><br>
            </div>
            
    
    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="hom">
    Home <a href="Login_student.php"><img src="/PHP/NewPage/Images/icons8-logout-rounded-up-64.png" height="20px" width="20px"></a>
    </div> -->

<!-- <button >Open Form</button> -->
<!-- <button class="open-button" onclick="openForm(),ope()" >Submit</button> -->
</div>
    
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        function ope()
        {
            document.getElementById("body").style.opacity="0.3";
        }
        
        function closeope()
        {
            document.getElementById("body").style.opacity="1";
        }
    </script>
</body>

</html> 
