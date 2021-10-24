<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['fmsid'] == 0)) {
    header('location:logout.php');
} else {

    if (isset($_POST['submit'])) {
        $aid = $_SESSION['fmsid'];
        $catename = $_POST['catename'];

        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $buildyr = $_POST['buildyr'];
        $regno = $_POST['regno'];
        $color = $_POST['color'];
        $prdate = $_POST['prdate'];

        $eid = $_GET['editid'];

        $query = mysqli_query($con, "update addvehicle set catename='$catename', brand='$brand', model='$model', buildyr='$buildyr', regno='$regno', color='$color', prdate='$prdate' where ID='$eid'");
        if ($query) {
            echo "<script>alert('Vehicle Entry Details has been updated');</script>";
            echo "<script>window.location.href ='manage-vehicle.php'</script>";
        } else {
            $msg = "Something Went Wrong. Please try again";
        }
    }
?>
    <!doctype html>
    <html class="no-js" lang="">

    <head>

        <title>FMS - Edit Vehicle</title>


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
        <?php include_once('includes/sidebar.php'); ?>
        <!-- Right Panel -->

        <?php include_once('includes/header.php'); ?>

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
                                    <li class="active">Update Vehicle</li>
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

                    </div>
                    <!--/.col-->



                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Update Vehicle</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <p style="font-size:16px; color:red" align="center"> <?php if ($msg) {
                                                                                                echo $msg;
                                                                                            }  ?> </p>

                                    <?php
                                    $cid = $_GET['editid'];
                                    $ret = mysqli_query($con, "select * from  addvehicle where ID='$cid'");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {

                                    ?>




                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="catename" name="catename" class="form-control" placeholder="Category" required="true" value="<?php echo $row['catename']; ?>"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Brand</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="brand" name="brand" class="form-control" placeholder="Brand" required="true" value="<?php echo $row['brand']; ?>"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Model</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="model" name="model" class="form-control" placeholder="Model" required="true" value="<?php echo $row['model']; ?>"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Build Year</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="buildyr" name="buildyr" class="form-control" placeholder="Build Year" required="true" value="<?php echo $row['buildyr']; ?>"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Registration No</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="regno" name="regno" class="form-control" placeholder="Registration No" required="true" value="<?php echo $row['regno']; ?>"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Color</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="color" name="color" class="form-control" placeholder="Color" required="true" value="<?php echo $row['color']; ?>"></div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Paper Renewal Date</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="prdate" name="prdate" class="form-control" placeholder="Paper Renewal Date" required="true" value="<?php echo $row['prdate']; ?>"></div>
                                        </div>
















                                    <?php } ?>

                                    <p style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" name="submit">Update</button></p>
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

        <?php include_once('includes/footer.php'); ?>

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