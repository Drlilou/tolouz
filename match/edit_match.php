<?php 
require_once 'db.php';    ?>
<?php
if($user->is_loggedin()=="")
{
    $user->redirect('index.php');
}

if(isset($_GET['succes']))
{
 $succes=$_GET['succes'];
  // $user->redirect('players.php');
}

if(isset($_GET['id']))
{
 $id=$_GET['id'];
  $stmt = $DB_con->prepare(" select * FROM `matchs` WHERE id=$id");
$stmt->execute();
  // $user->redirect('players.php');
}
?>

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



if(isset($_POST['apdate']))
{
  $cup = trim($_POST['cup']);
  $stadium = trim($_POST['stadium']);
  $rival_team = trim($_POST['rival_team']);
  $game_place = trim($_POST['game_place']);
  $category = trim($_POST['category']);
  $time = trim($_POST['time']);

  
if (strcmp ($_FILES['logo_rival_team']['name'],"")==0)
{
  if (strcmp ($_POST['time'],"")==0)
{
  $sql = "  UPDATE `matchs` SET `cup`='$cup',`stadium`='$stadium',
  `rival_team`='$rival_team',
  `game_place`='$game_place',`category`='$category' WHERE id='$id'";
  


					
                    // use exec() because no results are returned
                    $DB_con->exec($sql);
                    $user->redirect("edit_match.php?id=$id&succes=change completed successfully");              
}

else{
  $sql = "  UPDATE `matchs` SET `cup`='$cup',`stadium`='$stadium',
  `rival_team`='$rival_team',
  `game_place`='$game_place',`time`='$time',`category`='$category' WHERE id='$id'";
  
                    // use exec() because no results are returned
                    $DB_con->exec($sql);
                    $user->redirect("edit_match.php?id=$id&succes=change completed successfully");   



}
           
}



      try
      {
        $filename = $_FILES['logo_rival_team']['name'];
        $target_file = 'images/matchs/'.$filename;
		$file_extension = pathinfo(
			$target_file, PATHINFO_EXTENSION);
		$file_extension = strtolower($file_extension);
		$valid_extension = array("png","jpeg","jpg");
		if(in_array($file_extension, $valid_extension)) {
			if(move_uploaded_file(
				$_FILES['logo_rival_team']['tmp_name'],
				$target_file)
			) { try {
                    $sql = "  UPDATE `matchs` SET `cup`='$cup',`stadium`='$stadium',
                    `rival_team`='$rival_team',`logo_rival_team`='$target_file',
                    `game_place`='$game_place',`time`='$time' WHERE id='$id'";	
                    
                    $user->redirect("edit_match.php?id=$id&succes=change completed successfully");              


                    $DB_con->exec($sql);
                    $succes= "change completed successfully";
                  } catch(PDOException $e) {
                    echo  $e->getMessage();
                  }
			}
		}

         
     }
     catch(PDOException $e)
     {
        echo $e->getMessage();
     }
    }  


?>

  


    
    <div class="site-section">
      <div class="container">
	        <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-7"
		  		  style="
    background: rgba(255, 255, 255, 0.05) !important;
    padding: 20px;
    margin-bottom: 19px;
  border-left: 5px solid #001B50;
"
		  >
                     
      
      <?php

if(isset($succes))
{ ?>

  
<div class="alert alert-success">
  <strong>Success!</strong><?php echo $succes; ?>
</div>

  
  
  <?php

}?>
      
      <?php   while($record = $stmt->fetch()) {?>



    <form  method="post"  enctype='multipart/form-data'>
			
			
			
      
  
      <div class="form-group">
        <input type="text"   class="form-control" name="rival_team" value="<?php echo $record['rival_team']; ?>">
      </div>	
      <div class="form-group">
        <input type="text"   class="form-control" name="stadium" value="<?php echo $record['stadium']; ?>">
      </div>	
      		


<div class="form-group">
Cup <select name="cup" autocomplete="cup" class="form-control">
      <?php 
      if (strcmp($record['cup'],"ligue 1")==0)
  {?>

<option value="ligue 1" selected>ligue 1</option>
<?php }else{ ?>
  <option value="garligue 1dian">ligue 1</option>
    <?php }?>  
        <?php 
      if (strcmp($record['cup'],"champions league")==0)
  {?>

<option value="champions league" selected>champions league</option>
<?php }else{ ?>
  <option value="champions league">champions league</option>
    <?php }?>  
        <?php 
      if (strcmp($record['cup'],"amical")==0)
  {?>
<option value="amical" selected>amical</option>
<?php }else{ ?>
  <option value="amical">amical</option>
    <?php }?>   
     <?php 
      if (strcmp($record['cup'],"amical")==0)
  {?>
<option value="cup de france " selected>cup de france </option>
<?php }else{ ?>
  <option value="cup de france ">cup de france </option>
    <?php }?>

</select>



game_place:<select name="game_place" value="" autocomplete="game_place" class="form-control">
<?php 
      if (strcmp($record['game_place'],"woman")==0)
  {?>

<option value="interior" selected>interior</option>
<?php }else{ ?>
  <option value="interior">interior</option>
    <?php }?>  
<?php 
      if (strcmp($record['game_place'],"outside")==0)
  {?>

<option value="outside" selected>outside</option>
<?php }else{ ?>
  <option value="outside">outside</option>
    <?php }?>  
</select>



category:<select name="category" value="" autocomplete="sexe" class="form-control">

<?php if (strcmp($record['category'],"category1")==0)
{?>

<option value="category1" selected>category1</option>
<?php }else{ ?>
<option value="category1">category1</option>
<?php }?>  

<?php if (strcmp($record['category'],"category2")==0)
{?>

<option value="category2" selected>category2</option>
<?php }else{ ?>
<option value="category2">category2</option>
<?php }?>  
</select>

              </div>
      
  
			  
            
              <div class="form-group">
                <input type="datetime-local" class="form-control" name="time" value="<?php echo $record['time']; ?>>
              </div>   
			  <div class="form-group">
         <input type="file" id="file" class="form-control" name="logo_rival_team">
              </div>
         











      <div class="form-group">
        <input type="submit"  name="apdate"
class="btn btn-primary py-3 px-5" value="apdate">
      </div>
    </form>  


<?php
}
?>
      
      
      
      
      
    
          </div>
          <div class="col-lg-4 ml-auto">
           
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