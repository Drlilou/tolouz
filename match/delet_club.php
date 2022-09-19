<?php 


require_once 'db.php';


            ?>
<?php

if($user->is_loggedin()=="")
{
    $user->redirect('index.php');
}

if(isset($_GET['id']))
{
 $id=$_GET['id'];
  $stmt = $DB_con->prepare(" DELETE FROM `club` WHERE id=$id");
$stmt->execute();
 $user->redirect('index.php');

}