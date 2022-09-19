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
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
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

        </div>
      </div>
    </div> <!-- .site-section -->
      <?php 
}
else {?>

    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
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

        </div>
</div>
    </div> <!-- .site-section -->


      <?php 
}
?>


    <?php 
}
?>


<div class="site-section bg-dark">
      <div class="container">
        <div class="row">


        <div class="col-12 title-section">
            <h2 class="heading">League 1 standings</h2>
          </div>    
<div class="col-lg-12">
            
            <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>P</th>
                    <th>Team</th>
                    <th>D</th>
                    <th>PTS</th>
                    <?php 
if($user->is_loggedin())
{
  ?>
                    <th>Action</th>
                    <?php }
  ?>

                  </tr>
                </thead>
                <tbody>
                <?php 
                
                // `Team`, `goal_deference`, `points`
$stmt = $DB_con->prepare("SELECT * FROM `club` order by points,goal_deference");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//echo $result->fetchColumn();  echo "<br>";   
$i=1;              
while($record = $stmt->fetch()) {
if($user->is_loggedin())
{
  ?>
   <tr>
   <td><?php echo $i; $i++; ?></td>

    <form action="apdate.php" method="post">

                    <td><strong class="text-white"><?php echo $record['Team']; ?></strong></td>
                    <td> <input type="number"  name="goal_deference"  value="<?php echo $record['goal_deference']; ?>"></td>
                    <td> <input type="number" name="points"  value="<?php echo $record['points']; ?>">
<input type="hidden"  value="<?php echo $record['id']; ?>"  name="id">       
  <input type="submit" name="apdate" value="apdate">
  <?php

if($user->is_loggedin())
{
  ?>
         

                                    

  <?php
}
?>

                  </td>
                  <td>
                  <a  href="delet_club.php?id=<?php echo $record['id'];?>"class="nav-link"  onclick="return confirm('Etes-vous sûr?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                      </svg>
                                    </a>

                  </td>

    </form>
                 
   </tr>


  <?php
}else{

  ?>

   <tr>
                    <td><?php echo $i; $i++; ?></td>
                    <td><strong class="text-white"><?php echo $record['Team']; ?></strong></td>
                    <td><?php echo $record['goal_deference']; ?></td>
                    <td><?php echo $record['points']; ?></td>
                  </tr>


  <?php
}
?>



                

                  <?php }?>
           
                </tbody>
              </table>
            </div>

          </div>
          </div>
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