<?php
    ini_set( "display_errors", 0);
   include "dbconnect.php";
   if(isset($_POST["submit"])){
   $allow = array("pdf");
   $temp = explode(".", $_FILES['pdf_file']['name']);
   $extension = end($temp);
   $upload_file = $_FILES['pdf_file']['name'];
   $path = 'uploads/';
                

            move_uploaded_file($_FILES['pdf_file']['tmp_name'],($path . $upload_file));
  
   $qry = mysqli_query($con,"INSERT INTO `upload_pdf_file`(`pdf_file`) VALUES('".$upload_file."')");
   if($qry){
      $success = "PDF File Uploaded Successfully";
   }
   else{
      $success =  "Error";
   }
}
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla Shashtra Ek Yatra</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

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
                    src="logo/tabla.jpg" alt="Logo"
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
                        <a href="courses.php"> <i class="menu-icon fa fa-book"></i>Courses</a>

                    </li>
                    <li class="active">
                        <a href="material.php" > <i class="menu-icon fa fa-th"></i>Material</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

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
                            <img class="user-avatar rounded-circle" src="images/profilepic.png" alt="User Avatar"
                                    style=" width:  50px;height: 50px"
                            >
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="myprofile.html"><i class="fa fa-user"></i> My Profile</a>



                            <a class="nav-link" href="index.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header>
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
                            <li>Material</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <?php
            if(isset($success)){
                echo "<div>" . $success . "</div>";
            }
        ?>
      <form method="post" enctype="multipart/form-data" >
        <div style="margin-left: 40px;margin-top: 20px">
            <input accept="application/pdf" type="file" id="main-input" name="pdf_file"/>
        </div>
         <div style="margin-left: 80px;margin-top: 20px">
            <button name="submit" type="submit" class="btn btn-outline-secondary">
                Submit
            </button><br><br>
             <label for="only pdf_file upload"> You have to do upload the pdf file whose size will be maximum 1MB. </label>
         </div>

      </form>
      <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Material Deatils</strong>
                                

                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Material No</th>
                                            <th>File Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <?php
                                include("dbconnect.php");
                                $sql = "SELECT * FROM upload_pdf_file";
                                $result = $con->query($sql);
                                 while($row = $result->fetch_assoc()) {
                                ?>
                              <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['pdf_file']; ?></td>
                                
                              <td>

                                         <button type="button" class="btn btn-outline-secondary">
                                                    <a href="uploads/<?php echo $row['pdf_file']; ?>" target="_blank">View</a>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary">
                                                    <a href="delete_material.php?id=<?php echo $row['id']; ?>">
                                                    Delete</a>
                                                </button>
                                    </td>

                              </tr>
                            <?php
                            }
                            ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>