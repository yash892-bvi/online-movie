<?php
   include "db.php";
   if(isset($_POST["submit"]))
    {
  //  echo "hii";
    $quaction=$_POST['qua'];
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $answer=$_POST['ans'];
    
    $sql="INSERT INTO quactionpaper(question,option_a,option_b,option_c,option_d,answer)VALUES('$quaction','$a','$b','$c','$d','$answer')";
    // print_r($sql);
    // die();

    if(!mysqli_query($conn,$sql))
      echo 'error'.$sql;
    else
    {
      header("location:quaction.php");
      echo "successfully inserted";
    }
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

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img
                    class="user-avatar rounded-circle"
                    src="logo/oe.jpg" alt="Logo"
                    style="margin-top: 10px;width:150px"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li><!-- /.menu-title -->
                    <li class="active">
                        <a href="student.php">
                            <i class="menu-icon fa fa-user"></i>Student</a>

                    </li>
                    <li class="active">
                        <a href="quaction.php"> <i class="menu-icon fa fa-book"></i>Question paper</a>

                    </li>
                     <li class="active">
                        <a href="examset.php"> <i class="menu-icon fa fa-book"></i>Exam set</a>

                   </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
   <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/adl.png" alt="User Avatar"
                                    style=" width:  50px;height: 50px"
                            >
                        </a>

                        <div class="user-menu dropdown-menu">
                            
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
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
                            <li><a href="show_quaction.php">Show Question</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Add New Question</strong></div>
                            <div class="card-body card-block">
                                <form name="myform" method="POST" id="emp" onsubmit="return validateform()">
                                    <div class="form-group">
                                        <label for="questions" class=" form-control-label">Question</label>
                                        <input type="text" name="qua" id="quaction" class="form-control"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="option" class=" form-control-label">A</label>
                                        <input type="text-right" name="a" id="a_option" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="option" class=" form-control-label">B</label>
                                        <input type="text-right" name="b" id="b_option" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="option" class=" form-control-label">C</label>
                                        <input type="text-right" name="c" id="c_option" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="option" class=" form-control-label">D</label>
                                        <input type="text-right" name="d" id="d_option" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="option" class=" form-control-label">Answer</label>
                                        <input type="text-right" name="ans" id="answer" class="form-control">
                                    </div>
                                    
                                    <div style="flex-direction: row;margin-left: 20px">
                                        <button type="submit" name="submit" class="btn btn-outline-secondary">
                                            Save
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary">
                                            <a href="student.php">Cancel</a>
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
      let qua=document.forms["myform"]["qua"].value;
      if (qua=="") 
      {
        alert("Question is requride");
        return false;
      }
      let a=document.forms["myform"]["a"].value;
      if(a=="")
      {
        alert("option A is requride");
        return false;
      }
      let b=document.forms["myform"]["b"].value;
      if(b=="")
      {
        alert("option B is requride");
        return false;
      }
      let c=document.forms["myform"]["c"].value;
      if(c=="")
      {
        alert("option C is requride");
        return false;
      }
      let d=document.forms["myform"]["d"].value;
      if(d=="")
      {
        alert("option D is requride");
        return false;
      }
      let ans=document.forms["myform"]["ans"].value;
      if(ans=="")
      {
        alert("Answer is requride");
        return false;
      }
     }
           
  </script>
</html>
