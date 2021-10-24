<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['fmsid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $aid=$_SESSION['fmsid'];

    $mnid=$_POST['mnid'];
    $regno=$_POST['regno'];
   $problem=$_POST['problem'];
   $status=$_POST['status'];
   $cost=$_POST['cost'];
   $ordate=$_POST['ordate'];
   $deldate=$_POST['deldate'];



  $eid=$_GET['editid'];
   
    $query=mysqli_query($con, "update slog set mnid='$mnid', regno='$regno', problem='$problem', status='$status', cost='$cost', ordate='$ordate', deldate='$deldate' where ID='$eid'");
    if ($query) {
        echo "<script>alert('Service has been updated');</script>";
        echo "<script>window.location.href ='view-wo.php'</script>";
    
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  }
  ?>
<!doctype html>
<html class="no-js" lang="">
<head>
    
    <title>FMS - Edit Work Order</title>
   

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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
   <?php include_once('includes/sidebar.php');?>
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
                                    <li><a href="view-wo.php">View Services</a></li>
                                    <li class="active">Update Services</li>
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
                    <div class="col-lg-6">
                        <div class="card">
                            
                           
                        </div> <!-- .card -->

                    </div><!--/.col-->

              

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update Services</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                     
                     <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  slog where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>              





                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mechanic NID NO</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="mnid" name="mnid" class="form-control" placeholder=">Mechanic NID NO<" required="true" value="<?php  echo $row['mnid'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Vehicle Registration NO</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="regno" name="regno" class="form-control" placeholder="Appointed Vehicle Registration NO" required="true" value="<?php  echo $row['regno'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Problem</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="problem" name="problem" class="form-control" placeholder="Problem" required="true" value="<?php  echo $row['problem'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Cost</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="cost" name="cost" class="form-control" placeholder="Problem" required="true" value="<?php  echo $row['cost'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Order recived Date</label></div>
                                        <div class="col-12 col-md-9"><input type="text" d="ordate" name="ordate" class="form-control" placeholder="Start Duty" required="true" value="<?php  echo $row['ordate'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Delivery Date</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="deldate" name="deldate" class="form-control" placeholder="End Duty"   value="<?php  echo $row['ordate'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label"> Status</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  class="form-control"  readonly='true'  value="<?php  echo $row['status'];?>"></div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">   </label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="status" required="true" class="form-control">
                                                <option value="">Select</option>
                                                <?php $query=mysqli_query($con,"select * from status");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
                                                 <option value="<?php echo $row['slist'];?>"><?php echo $row['slist'];?></option>
                  <?php } ?> 
                                            </select>
                                        </div>
                                    </div>












                                 
                                    <?php } ?>
                                    
                                   <p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" name="submit" >Update</button></p>
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="col-lg-6">
                        
                  
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