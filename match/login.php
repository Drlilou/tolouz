
<?php
require_once 'db.php';
if($user->is_loggedin()!="")
{
 $user->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
 $username = $_POST['username'];
 $password = $_POST['password'];
  
 if($user->login($username,$password))
 {
  $user->redirect('index.php');
 }
 else
 {

  $error = "Mauvais détails !";
  if (isset($_SESSION['validation']))
  {
    $error = $_SESSION['validation'];
    session_unset();

  }
 } 
}
?>
     

<!doctype html>
<html lang="en">
<head>
<title>Soccer &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
   
<?php 
 include 'header.php';
?>
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== SEARCH BOX PART START ======-->

    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== SLIDER PART START ======-->
    

    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
 
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
  <!-- container -->
        <div class="container">
            <br>
            <br>
            </div>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"		  		  style="
    padding: 20px;
    margin-bottom: 19px;
  border-left: 5px solid #001B50;
"
		  >
            <div class="card match" style="border: aliceblue;
                background: rgba(255, 255, 255, 0.05) !important;

            ">
                <div class="card-header ">Login</div>

                <div class="card-body ">
                    <form method="POST" >

                        <div class="form-group row ">
                            <label for="email" class="col-md-4 col-form-label text-md-right">username</label>

                            <div class="col-md-6">
                                <input id="username" type="text"  class="form-control" name="username" type="text" placeholder="username" autofocus>

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password"  class="form-control" name="password" required autocomplete="current-password">

                              
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit"  name="btn-login" class="btn btn-primary">
                        Login
                                </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    
  

  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>
</html>





