<?php
//include("dbconnect.php");
include("db.php");
session_start();
try{
if(isset($_POST['submit']))
       {
        $Uname=$_POST['username'];
        $Password=$_POST['password'];
        
        $sql = "SELECT password FROM admin WHERE name = '$Uname'";
        $result = $conn->prepare($sql);
        $result->execute();
        $rows = $result->fetch();
       
        $pass=$rows[0];
        if($Password==$pass)
        {   
          $_SESSION['username'] = $Uname;
            header("location:dashboard.php");
        }
        else

           echo '<script type="text/javascript">alert("Invalid Username or Password");</script>';
       }
     }
      catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>

<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Movie Tikit</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <style >
        body{
             background-image: url("images/bg1.jpg");
              background-color: #cccccc;
              background-repeat: no-repeat;
            background-size: 1550px 750px;
            }
    </style>


</head>

<body>
    <!-- <div class="sufee-login d-flex align-content-center flex-wrap">
    	<div class="container">
       
            <div class="login-content">
                <div class="login-logo">
                    <div>
                        <h2 style="color:#FFD700";>Online Movie Tikit</h2>
                    </div>


                </div>
                <div style="background-color: #6d767f40;padding: 30px 30px 20px;border-radius: 2px; " >
                    <form name="myform" method="POST" onsubmit="return validateform()" action="">
                        <div class="form-group">
                            <label style="color: #ffffff">User Name </label>
                            <input type="text" class="form-control" placeholder="User Name" name="username">
                            <span id='blankname'></span>
                        </div>
                            <div class="form-group">
                                <label style="color: #ffffff">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                 <span id='blankpass'></span>
                        </div>
                                <div class="checkbox">
                                    <label style="color: #ffffff">
                                <input type="checkbox"> Remember Me
                            </label>


                                </div>

                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Log In</button>

                    </form>
                </div>
            </div>
        </div>
    </div> -->

     <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
       
            <div class="login-content">
                <div class="login-logo">
                   


                </div>
                <div style="background-color: #6d767f40;padding: 30px 30px 20px;border-radius: 2px; " >
                     <div>
                        <h2 class="text-white text-center" ;>ADMIN LOGIN</h2>
                    </div>

                    <form name="myform" method="POST" onsubmit="return validateform()" action="">
                        <div class="form-group">
                            <label style="color: #ffffff">User Name </label>
                            <input type="text" class="form-control" placeholder="User Name" name="username">
                            <span id='blankname'></span>
                        </div>
                            <div class="form-group">
                                <label style="color: #ffffff">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                 <span id='blankpass'></span>
                        </div>
                                <div class="checkbox">
                                    <label style="color: #ffffff">
                                <input type="checkbox"> Remember Me
                            </label>


                                </div>
                            <center>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit">Log In</button>
                            </center>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
<script>
    function validateform() 
    {
      let username=document.forms["myform"]["username"].value;
      if (username=="") 
      {
        //alert("Username is requride");
        let span = document.getElementById('blankname')
        span.innerHTML = "<span style='color: white;'>"+
                        "Please enter a username</span>"
        return false;
      }
      let password=document.forms["myform"]["password"].value;
      if(password=="")
      {
         let span = document.getElementById('blankpass')
        span.innerHTML = "<span style='color: white;'>"+
                        "Please enter a username</span>"
        return false;
      }
     }
           
  </script>


</html>
