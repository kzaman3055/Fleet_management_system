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
   
    <title>FMS - Manage Work Worder</title>
   
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
                                   
                                    <li class="active">View Services</li>
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
                            <strong class="card-title">View Services</strong>
                        </div>
                        <div class="card-body">
                             <table class="table">
                <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>

                    <th>Car Brand</th>
                    <th>Car Model</th>
                    <th>Car Reg No</th>
                    <th>Mechanic Name</th>
                    <th>Mechanic Contact No</th>
                    <th>Mechanic Speciality</th>
                    <th>Problem</th>
                    <th>Cost</th>
                    <th>Order Received Date</th>
                    <th>Delivery Date</th>
                    <th>Status</th>



                  

                   
                          <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
               <?php

$aid=$_SESSION['fmsid'];
$cid=$_GET['editid'];

$ret=mysqli_query($con,"SELECT slog.ID, slog.mnid, slog.regno, slog.cost, slog.ordate, slog.problem, slog.deldate, slog.status, addvehicle.brand, addvehicle.model, addmechanic.mnid,addmechanic.mname, addmechanic.mcno, addmechanic.speciality FROM slog INNER JOIN addvehicle  ON slog.regno=addvehicle.regno INNER JOIN addmechanic ON slog.mnid = addmechanic.mnid where slog.status='On Prgress'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                 
                    <td><?php  echo $row['brand'];?></td>
                    <td><?php  echo $row['model'];?></td>
                    <td><?php  echo $row['regno'];?></td>
                    <td><?php  echo $row['mname'];?></td>
                    <td><?php  echo $row['mcno'];?></td>
                    <td><?php  echo $row['speciality'];?></td>
                    <td><?php  echo $row['problem'];?></td>
                    <td><?php  echo $row['cost'];?></td>
                    <td><?php  echo $row['ordate'];?></td>
                    <td><?php  echo $row['deldate'];?></td>
                    <td><?php  echo $row['status'];?></td>


                   

                  <td>
                <a href="edit-wo.php?editid=<?php echo $row['ID'];?>">Edit</a>|     
                <a href="delete-wo.php?editid=<?php echo $row['ID'];?>">Delete</a>
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