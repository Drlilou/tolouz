<?php include('header.php');
?>

<?php

if($user->is_loggedin()=="")
{
    $user->redirect('index.php');
}

if(isset($_POST['apdate']))
{
   $id = trim($_POST['id']);
   $goal_deference = trim($_POST['goal_deference']);
   $points = trim($_POST['points']);
   // SELECT `id`, `cup`, `stadium`, `rival_team`, `logo_rival_team`, `game_place`, `time`, 
   // `remember_token`, `created_at`, `updated_at` FROM `matchs` WHERE 1
 echo  "  UPDATE `club` SET `goal_deference`='$goal_deference',`points`='$points' WHERE id='$id'";
   $sql = "  UPDATE `club` SET `goal_deference`='$goal_deference',`points`='$points' WHERE id='$id'";
   
					
                    // use exec() because no results are returned
                    $DB_con->exec($sql);
                    $user->redirect("index.php"); 
   
 
}

?>
