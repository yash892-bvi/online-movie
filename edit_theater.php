<?php
session_start();
    
  if(!isset($_SESSION['username']))
  {
    header('location:index.php');
    exit;
  }
?>
<?php

include("db.php");
$id=$_REQUEST['id'];
try{
$query = "SELECT * from theatre where theatre_id='".$id."'";
$result = $conn->prepare($query);
        $result->execute();
        $row = $result->fetch();
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
    <title>Online Exam</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

     <?php
    include('leftpenal.php');
 ?>
    <!-- /#left-panel -->

    

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
                <?php
                 include('header.php');
             ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a>Edit Theater</a></li>
                        </ol>
                    </div>
                </div>
            </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Edit Theater Deatil's</strong></div>
                            <div class="card-body card-block">
                                 <?php
  include("db.php");

try{
  if(isset($_POST['submit']))
  {
    $id = $_GET['id'];
    $nm=$_POST['name'];
    $city=$_POST['city'];
   
      $sql="UPDATE theatre SET theatre_name = '$nm',city_id = '$city' WHERE theatre_id = '$id'" ;
        $result = $conn->prepare($sql);

  // execute the query
        $result->execute();
        $row = $result->fetch();
        $status = "Record Updated Successfully. <a href='show_theater.php'>View Updated Record</a>";
      echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
 ?>
    <form name="myform"  method="POST" id="emp" onsubmit="return validateform()">
                                <div class="form-group">
                                        <label for="name" class=" form-control-label">Name</label>
                                        <input type="text" name="name" id="name"  placeholder="Enter your theater name" class="form-control" value="<?php echo $row['theatre_name'];?>"/>
                                         <span id='blankname'></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="studentname" class=" form-control-label">City</label>
                                       <!--  <input type="text" name="city" id="city"  placeholder="Enter your City" class="form-control" value="<?php echo $row['city'];?>"/> -->
                                       <select class="form-control" name="city"value="<?php echo $row['city'];?>">
    <option disabled selected>-- Select City --</option>
    <?php
        include "db.php";  // Using database connection file here
          
                 $sql = "select * from city_list";
                 // $result = $conn->query($sql);
                 $result = $conn->prepare($sql);
                 $result->execute();
                                      
                 while($row = $result->fetch())
                  {
?>
                   <option value='<?php echo  $row['city_id'] ?>'>
                  <!--   <?php if($row['cityname']==""){echo "selected";}?> -->
                    <?php echo $row['cityname'] ?> </option>

                   
                  <?php } ?>
                                    
       
    ?>  
  </select>
                                         <span id='blankcity'></span>
                                    </div>
                                    <div style="flex-direction: row;margin-left: 20px">
                                        <button type="submit" name="submit" class="btn btn-outline-secondary">
                                            Save
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary">
                                            <a href="show_theater.php">Cancel</a>
                                        </button>
                                    </div>

                                </form>
                               
                                <?php }
                                } catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
} ?>
                            </div>
                        </div>
                    </div>

        </div>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>
<script>
    function validateform() 
    {
      let name=document.forms["myform"]["name"].value;
      if (name=="") 
      {
        let span = document.getElementById('blankname')
        span.innerHTML = "<span style='color: red;'>"+
                        "Please enter a name</span>"
        return false;
      }
      let city=document.forms["myform"]["city"].value;
      if(city=="")
      {
       let span = document.getElementById('blankcity')
        span.innerHTML = "<span style='color: red;'>"+
                        "Please enter city</span>"
        return false;
      }
      // let email=document.forms["myform"]["email"].value;
      // if(email=="")
      // {
      //   let span = document.getElementById('blankemail')
      //   span.innerHTML = "<span style='color: red;'>"+
      //                   "Please enter a email</span>"
      //   return false;
      // }
     }
           
  </script>

</html>
