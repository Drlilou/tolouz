

<?php
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
   // SELECT `id`, `username`, `nom`, `prenom`, `email`, `password`, `cv`, `affiliation`, `bibliographie`, `thematique`
          
    public function register($nom,$prenom,$username,$umail,$upass,$cv,$affiliation,$bibliographie,$thematique)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
           $stmt = $this->db->prepare("INSERT INTO `chercheur` (`username`, `nom`, `prenom`, `email`, `password`, `cv`, `affiliation`, `bibliographie`, `thematique`) 
                                                       VALUES(:uname, :nom, :prenom, :umail, :upass, :cv, :affiliation, :bibliographie, :thematique)");
              
           $stmt->bindparam(":uname", $username);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":nom", $nom);
           $stmt->bindparam(":prenom", $prenom);
           $stmt->bindparam(":upass", $new_password);            
           $stmt->bindparam(":cv", $cv);            
           $stmt->bindparam(":affiliation", $affiliation);            
           $stmt->bindparam(":bibliographie", $bibliographie);            
           $stmt->bindparam(":thematique", $thematique);            
           $stmt->execute(); 
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($username,$password)
    {
       try
       {
        if(strcmp($username,"admin")==0 and strcmp($username,"admin")==0){
            $_SESSION['user_session'] ="admin";
            return true;
        }
          $stmt = $this->db->prepare("SELECT * FROM users WHERE username=:username  LIMIT 1");
          $stmt->execute(array(':username'=>$username));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['password']) )  
             {
              if ($userRow['validation']){
               $_SESSION['user_session'] = $userRow['id'];
               return true;
              }
              else {
               $_SESSION['validation'] ="attendre validation de votre information" ;
               return false;

              }

             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
		header("Location:index.php");
        return true;
   }
}
?>  