

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');




if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['fmsid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    echo "<script>alert('Incorrect username or password!!');</script>";       

    }
  }
  ?>




<!DOCTYPE html> 


<html lang=en> 
<head> 
<link rel="apple-touch-icon" href="images/fevicon.png">
    <link rel="shortcut icon" href="images/fevicon.png">
    <meta charset=utf-8> <meta content='IE=edge' http-equiv=X-UA-Compatible> <meta content='width=device-width, initial-scale=1' name=viewport> <meta content='text/html; charset=utf-8' http-equiv=Content-Type> <meta content=PAXlrW61Y2pnJJtAHTqZAtZYbNgy_5TMQLYosd4yoMQ name=google-site-verification> <meta content=qFij7uUxctZJ7DMAosGqucP1LVBplmD-tEJaiwmr9B4 name=google-site-verification> <title>Welcome to FMS</title> 
    <link href='https://googleads.g.doubleclick.net' rel=preconnect> <link href='https://d33wubrfki0l68.cloudfront.net' rel=preconnect> <link href='https://cdn.segment.com' rel=preconnect> 
    <link href='https://fullstory.com' rel=preconnect> <link href='https://cdn.heapanalytics.com' rel=preconnect> <link href='https://log.olark.com' rel=preconnect> 
    <link href='https://api.olark.com' rel=preconnect> <link href='https://edge.fullstory.com' rel=preconnect> <link href='https://www.googletagmanager.com' rel=preconnect>
     <link href='https://www.googleadservices.com' rel=preconnect> <link href='https://www.google-analytics.com' rel=preconnect> 
     <script src='https://d33wubrfki0l68.cloudfront.net/js/760842f414f4f80236473a8a9e44c6afafe8c8ea/assets/javascripts/vendor/jquery.min.js'>
     </script> <link rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/css/914cec21db7b6cda74b04582edde1f3491ff6cef/assets/stylesheets/all.css'/> 
     <link href='/assets/images/favicon.png' rel='shortcut icon'> <link href='/assets/images/favicon.ico' rel=icon type='image/ico'> 
     <link rel=alternate type="application/atom+xml" title="Atom Feed" href="/blog/feed.xml"/> <meta content=website property='og:type'>
      
       </head> <body class='register register_index' data-environment=production> <main role=main> <div class=container> <div class=page> <div class=proof-section> <div class=media> 
       <div class=media-left> <img src="https://d33wubrfki0l68.cloudfront.net/4f49fbd49b48c0359c5b489e0c798cf234f1395f/52ad1/assets/images/fleeticons/fl-check-circle.svg" alt="Fl check circle"/> </div> 
       <div class=media-body> <p class=lead> <strong>We are providing hassle free 360-degree vehicle solutions</strong> </p> </div> </div>
        <div class=media> <div class=media-left> <img src="https://d33wubrfki0l68.cloudfront.net/4f49fbd49b48c0359c5b489e0c798cf234f1395f/52ad1/assets/images/fleeticons/fl-check-circle.svg" alt="Fl check circle"/> </div>
         <div class=media-body> <p class=lead> <strong>We handle all makes and models in more than 15 car brands</strong> </p> </div> </div> 


         <div class=media> <div class=media-left> <img src="https://d33wubrfki0l68.cloudfront.net/4f49fbd49b48c0359c5b489e0c798cf234f1395f/52ad1/assets/images/fleeticons/fl-check-circle.svg" alt="Fl check circle"/> </div>
         <div class=media-body> <p class=lead> <strong>All our work has a minimum 3-month warranty all services</strong> </p> </div> </div> 


         <div class=media> <div class=media-left> <img src="https://d33wubrfki0l68.cloudfront.net/4f49fbd49b48c0359c5b489e0c798cf234f1395f/52ad1/assets/images/fleeticons/fl-check-circle.svg" alt="Fl check circle"/> </div>
         <div class=media-body> <p class=lead> <strong>We are available 24/7</strong> </p> </div> </div> 




         <div class=media> <div class=media-left> <img src="https://d33wubrfki0l68.cloudfront.net/4f49fbd49b48c0359c5b489e0c798cf234f1395f/52ad1/assets/images/fleeticons/fl-check-circle.svg" alt="Fl check circle"/> </div>
          <div class=media-body> <p class=lead> <strong>All our technicians are equipped with the latest portable technology</strong> </p> </div> </div> <hr> 


<hr> <div class=questions> <p class=lead> <strong>Any Question?</strong> </p> 
    <p>Call us at <a href="tel:8801317331514">+8801317331514</a> or email 
        <a href="mailto:info@mechanickoi.com">info@mechanickoi.com</a>.</p> </div> </div> 

<div class=form-section> 
<img src="images/mk1.png" alt="Avatar" style="width:100px" class= "center">
    <h4>Mechanic Koi</h4> 


     <div id=error style='visibility: hidden; color:red; padding-bottom:5px;'>error</div> <form accept-charset='UTF-8' class='sign-up-form' data-netlify-recaptcha='true' method='POST' name='sign-up-email-password'><input type='hidden' name='form-name' value='sign-up-email-password' /> <input name=bot-field type=hidden> <input name=utf8 type=hidden value='✓'> <input id=GCLID__c name=GCLID__c type=hidden value=''> <input name=CurrentVisitCampaign type=hidden value=''> <input name=CurrentVisitContent type=hidden value=''> <input name=CurrentVisitDate type=hidden value=''> <input name=CurrentVisitEntrancePoint type=hidden value=''> <input name=CurrentVisitMedium type=hidden value=''> <input name=CurrentVisitReferer type=hidden value=''> <input name=CurrentVisitSource type=hidden value=''> <input name=CurrentVisitType type=hidden value=''> <input name=CurrentVisitTerm type=hidden value=''> <input name=FirstVisitCampaign type=hidden value=''> <input name=FirstVisitContent type=hidden value=''> <input name=FirstVisitDate type=hidden value=''> <input name=FirstVisitEntrancePoint type=hidden value=''> <input name=FirstVisitMedium type=hidden value=''> <input name=FirstVisitReferer type=hidden value=''> <input name=FirstVisitSource type=hidden value=''> <input name=FirstVisitTerm type=hidden value=''> <input name=FirstVisitType type=hidden value=''> <input id=RegistrationPlan name=RegistrationPlan type=hidden value=''> <input name=IpAddress__c type=hidden value=''> <input name=City type=hidden value=''> <input name=Country type=hidden value=''> <input name=State type=hidden value=''> <input name=TimeZone__c type=hidden value=''> <input name=PostalCode type=hidden value=''> <input name=Latitude type=hidden value=''> <input name=Longitude type=hidden value=''> 

<div class=form-group> 


     

        <form>
            <div class="form-group">
                <label>Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" button type="submit" name="login" class="btn btn-primary" value="Login">
            </div>
 <p>Don't have an account? <a href="reg.php">Sign up now</a>.</p>
        </form>
</div> 
<noscript>
  <div>
  <div style="width: 302px; height: 422px; position: relative;">
  <div style="width: 302px; height: 422px; position: absolute;">
  
  </div>
  </div>
  
  </div>
  </div>
</noscript>
</div> 
</form> 

</body> </html>