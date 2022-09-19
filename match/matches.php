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
  

    
    <div class="container">
      


    </div>
  

    <div class="site-section bg-dark">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-lg-12">
		  
      <?php 
  $stmt = $DB_con->prepare("SELECT * FROM `matchs` ORDER by (id) DESC LIMIT 0,1");
  $stmt->execute();
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 //echo $result->fetchColumn();  echo "<br>";                 

  ?>
    
    <section id="slider-part" class="slider-active col-md-12">
    <?php 

$stmt = $DB_con->prepare("SELECT * FROM `matchs` WHERE `time` >now() ORDER by (`time`) LIMIT 1");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//echo $result->fetchColumn();  echo "<br>";                 
while($record = $stmt->fetch()) {?>

      <?php 

if(strcmp('outside',$record['game_place'])==0) {?>

            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="<?php echo $record['logo_rival_team']; ?>" 
					  style="width: 90px; height: 90px;"
					  alt="Image">
                      <h3><?php echo $record['rival_team']; ?></h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="images/matchs/bordeaux.jpg" 
					  style="width: 90px; height: 90px;"
					  alt="Image">
                      <h3>Bordeaux</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4><?php echo $record['cup']; ?></h4>
                <p class="mb-5">
                  <span class="d-block"><?php echo $record['time']; ?></span>
                  <strong class="text-primary"><?php echo $record['stadium']; ?></strong>
                </p>

            
            </div>
          </div>


      <?php 
}
else {?>


            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                       <img src="images/matchs/bordeaux.jpg"
style="width: 90px; height: 90px;"
					   alt="Image">
                      <h3>Bordeaux</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                   
					  
					     <img src="<?php echo $record['logo_rival_team']; ?>" 
						 style="width: 90px; height: 90px;"
						 alt="Image">
                      <h3><?php echo $record['rival_team']; ?></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4><?php echo $record['cup']; ?></h4>
                <p class="mb-5">
                  <span class="d-block"><?php echo $record['time']; ?></span>
                  <strong class="text-primary"><?php echo $record['stadium']; ?></strong>
                </p>

           
            </div>
          </div>



      <?php 
}
?>


    <?php 
}
?>
         </div>
        </div>

        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Upcoming Match</h2>
          </div>
		  
		  
		  
		  
		  
		  
		   <?php 

$stmt = $DB_con->prepare("SELECT * FROM `matchs` WHERE `time` >now() ");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//echo $result->fetchColumn();  echo "<br>";                 
while($record = $stmt->fetch()) {?>

      <?php 

if(strcmp('outside',$record['game_place'])==0) {?>

                  <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                          <img src="<?php echo $record['logo_rival_team']; ?>" 
					  style="width: 90px; height: 90px;"
					  alt="Image">
                      <h3><?php echo $record['rival_team']; ?></h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
					                        <div class="team-1 text-center">


                       <img src="images/matchs/bordeaux.jpg" 
					  style="width: 90px; height: 90px;"
					  alt="Image">
                      <h3>Bordeaux</h3>
                      </div>
                    </div>
                  </div>
                </div>

           
              <div class="text-center widget-vs-contents mb-4">
                <h4><?php echo $record['cup']; ?></h4>
                <p class="mb-5">
                  <span class="d-block"><?php echo $record['time']; ?></span>
                  <strong class="text-primary"><?php echo $record['stadium']; ?></strong>
                </p>

                <?php

if($user->is_loggedin())
{
  ?>
                  <p style="
    display: flex;
">
<a  href="delet_match.php?id=<?php echo $record['id'];?>"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                                    </a>
                                    <a  href="edit_match.php?id=<?php echo $record['id'];?>"class="nav-link" >
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
else {?>


                  <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
					  
					   <img src="images/matchs/bordeaux.jpg" 
					  style="width: 90px; height: 90px;"
					  alt="Image">
                      <h3>Bordeaux</h3>
					  
                    
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
					                        <div class="team-1 text-center">

                          <img src="<?php echo $record['logo_rival_team']; ?>" 
					  style="width: 90px; height: 90px;"
					  alt="Image">
                      <h3><?php echo $record['rival_team']; ?></h3>
                      </div>
                    </div>
                  </div>
                </div>

           
              <div class="text-center widget-vs-contents mb-4">
                <h4><?php echo $record['cup']; ?></h4>
                <p class="mb-5">
                  <span class="d-block"><?php echo $record['time']; ?></span>
                  <strong class="text-primary"><?php echo $record['stadium']; ?></strong>
                </p>
                <?php

if($user->is_loggedin())
{
  ?>
                  <p style="
    display: flex;
">
<a  href="delet_match.php?id=<?php echo $record['id'];?>"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                                    </a>
                                    <a  href="edit_match.php?id=<?php echo $record['id'];?>"class="nav-link" >
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


    <?php 
}
?>
		  
		  
		  
		  


      </div>
      </div>
    </div> <!-- .site-section -->

  
   


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