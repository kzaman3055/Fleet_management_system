<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['fmsid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<!doctype html>

<html class="no-js" lang="">
<head>
   
    <title>FMS - Daily Log</title>
   

    <link rel="apple-touch-icon" href="images/fevicon.png">
    <link rel="shortcut icon" href="images/fevicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <!-- Left Panel -->

  <?php include_once('includes/sidebar.php');?>

    <!-- Left Panel -->

    <!-- Right Panel -->

     <?php include_once('includes/header.php');?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
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
                                    <li><a href="manage-vehicle.php">Manage Vehicle</a></li>
                                    <li class="active">Daily Log</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                   
         

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Vehicle's Daily Log</strong>
                        </div>
                        <div class="card-body">
                             <table class="table">
                <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                    <th>Car Brand</th>
                    <th>Car Model</th>
                    <th>Vehicle Reg No</th>
                    <th>Driver Name</th>
                    <th>Driver Contact No</th>
                    <th>Driver NID No</th>
                    <th>Route</th>
                   
                    <th>Starting Duty</th>
                    <th>Ending Duty</th>

                  

                   
                          <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
               <?php

$aid=$_SESSION['fmsid'];
$cid=$_GET['editid'];

$ret=mysqli_query($con,"SELECT addvehicle.brand, addvehicle.model, adddriver.dname, adddriver.dcno, dlog.dnid, dlog.regno, dlog.ID,dlog.route, dlog.startduty, dlog.endduty FROM addvehicle INNER JOIN adddriver ON addvehicle.regno=adddriver.regno INNER JOIN dlog ON addvehicle.regno = dlog.regno where dlog.regno='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                 

                    <td><?php  echo $row['brand'];?></td>
                    <td><?php  echo $row['model'];?></td>
                    <td><?php  echo $row['regno'];?></td>
                    <td><?php  echo $row['dname'];?></td>
                    <td><?php  echo $row['dcno'];?></td>
                    <td><?php  echo $row['dnid'];?></td>
                    <td><?php  echo $row['route'];?></td>
                   
                    <td><?php  echo $row['startduty'];?></td>
                    <td><?php  echo $row['endduty'];?></td>

                   

                  <td>
                <a href="edit-ddlog.php?editid=<?php echo $row['ID'];?>">Edit</a>|     
                <a href="delete-ddlog.php?editid=<?php echo $row['ID'];?>">Delete</a>
                  </td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
              </table>

                    </div>
                </div>
            </div>

   

        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

<?php include_once('includes/footer.php');?>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
<?php }  ?>