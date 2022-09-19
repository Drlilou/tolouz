<!DOCTYPE html>
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

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <?php include('header.php');
?>
  



    
    <div class="container site-section">
      <div class="row">
        <div class="col-12 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
    <div class="col-12 title-section">

    <nav class="navbar navbar-default">
  <div class="container-fluid">

    <ul class="nav navbar-nav"
    style="
    display: contents;
"
    >

      <li><a href="players.php?sex=<?php echo $_GET['sex'];; ?>&category=category1">category1</a></li>
      <li><a href="players.php?sex=<?php echo $_GET['sex'];; ?>&category=category2">category2</a></li>
      <li><a href="players.php?sex=<?php echo $_GET['sex'];; ?>&category=category2"></a></li>
      <li><a href="players.php?sex=<?php echo $_GET['sex'];; ?>&category=category2"></a></li>
    </ul>
  </div>
</nav>        </div>


      </div>
      <div class="row">
	  
		   <?php 
$sex=$_GET['sex'];
$category=$_GET['category'];
$stmt = $DB_con->prepare("SELECT * FROM `players` where sex='$sex' and category='$category' ");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//echo $result->fetchColumn();  echo "<br>";                 
while($record = $stmt->fetch()) {?>

          <div class="col-lg-6"
		  style="
    background: rgba(255, 255, 255, 0.05) !important;
    padding: 20px;
    margin-bottom: 19px;
  border-left: 5px solid #001B50;
">  <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="<?php echo $record['img']; ?>" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta"><?php echo $record['birth_date']; ?></span>
              <h3 class="mb-4"><a href="#"><?php echo $record['first_name']; ?><?php echo $record['last_name']; ?></a></h3>
              <p><?php echo $record['position']; ?></p>

<?php

if($user->is_loggedin())
{
  ?>
                  <p style="
    display: flex;
">
<a  href="delet_player.php?id=<?php echo $record['id'];?>"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                                    </a>
                                    <a  href="edit_player.php?id=<?php echo $record['id'];?>"class="nav-link" >
                                        <svg style="color: #00dcff;"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                          </svg>
                                        </a>
</p>

  <?php
}
?>

            </div>
          </div>
        </div>

               
    <?php 
}
?>
	

 
      </div>
    </div>



    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">coachs</h2>
        </div>
      </div>
      <div class="row">
	  
		   <?php 

$stmt = $DB_con->prepare("SELECT * FROM `coachs` where sex='$sex' and category='$category' ");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//echo $result->fetchColumn();  echo "<br>";                 
while($record = $stmt->fetch()) {?>

          <div class="col-lg-6"
		  style="
    background: rgba(255, 255, 255, 0.05) !important;
    padding: 20px;
    margin-bottom: 19px;
  border-left: 5px solid #001B50;
">  <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="<?php echo $record['img']; ?>" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta"><?php echo $record['birth_date']; ?></span>
              <h3 class="mb-4"><a href="#"><?php echo $record['first_name']; ?><?php echo $record['last_name']; ?></a></h3>
            </div>
          </div>
 <?php         
if($user->is_loggedin())
{
  ?>
                <p style="
    display: flex;
">
    
<a  href="delet_coachs.php?id=<?php echo $record['id'];?>"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                                    </a>
                                    <a  href="edit_coachs.php?id=<?php echo $record['id'];?>"class="nav-link" >
                                        <svg style="color: #00dcff;"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                          </svg>
                                        </a>
</p>

  <?php
}
?>

        </div>

               
    <?php 
}
?>
	

 
      </div>
    </div>









  </div>
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