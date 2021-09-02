<?php
session_start();
    
  if(!isset($_SESSION['username']))
  {
    
    header('location:index.php');
    exit;
  }
?> 
<?php
   include "db.php";
try 
{
   if(isset($_POST["submit"]))
    {
    $city=$_POST['city'];

    
    $sql="INSERT INTO city_list(cityname)VALUES('$city')";

    $conn->exec($sql);
    // if(!mysqli_query($con,$sql))
    //   echo 'error'.$sql;
    // else
    // {
      header("location:show_city.php");
      echo "successfully inserted";
    }
  }
  catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?>

<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Movie Booking</title>
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
                        <li><a href="add_theater_form.php">Add City</a></li>
                            
                        </ol>
                    </div>
                </div>
            </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Add City Form</strong></div>
                            <div class="card-body card-block">
                                <form name="myform"  method="POST" id="emp" onsubmit="return validateform()">
                                    <div class="form-group">
                                        <label for="studentname" class=" form-control-label">City</label>
                                        <input type="text" name="city" id="city"  placeholder="Enter your City" class="form-control"/>
                                         <span id='blankcity'></span>
                                    </div>
                                    <div style="flex-direction: row;margin-left: 20px">
                                        <button type="submit" name="submit" class="btn btn-outline-secondary">
                                            Save
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary">
                                            <a href="dashboard.php">Cancel</a>
                                        </button>
                                    </div>

                                </form>

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
      
      let city=document.forms["myform"]["city"].value;
      if(city=="")
      {
        let span = document.getElementById('blankcity')
        span.innerHTML = "<span style='color: red;'>"+
                        "Please enter city</span>"
        return false;
      }
      
     }
           
  </script>


</html>
