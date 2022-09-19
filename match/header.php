<?php 


require_once 'db.php';


            ?>



    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
    
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                <li class=""><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li><a href="players.php" class="nav-link"></a></li>

                <li class="">              <a class=" dropdown-toggle nav-link"  type="button" data-toggle="dropdown">Players 
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="players.php?sex=man&category=category1" class="nav-link">MAN</a></li>
    <li><a href="players.php?sex=woman&category=category1" class="nav-link">WOMAN</a></li>
  </ul>

</li>

<?php

if($user->is_loggedin())
{
  ?>

<li class="">              <a class=" dropdown-toggle nav-link"  type="button" data-toggle="dropdown">ADD 
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="addteam.php" class="nav-link">add team</a></li>
                  <li><a href="addmatch.php" class="nav-link">add match</a></li>
                  <li><a href="addplayers.php" class="nav-link">add player</a></li>
                  <li><a href="addcaoch.php" class="nav-link">add caoch</a></li>

  </ul>

</li>

                
  <?php
}
?>
                <li><a href="blog.html" class="nav-link">Blog</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <?php
                                  if(!$user->is_loggedin())
                                  {?>
                            <?php if (strstr(basename($_SERVER['PHP_SELF']) ,'teachars.php'))
                                            { ?>
                                 <li class="active"> <a  href="login.php">login</a> </li>

                                            <?php }else{?>
                                                <li > <a class="nav-link" href="login.php">login</a> </li>
                                            <?php }?>  

                              
                                <?php }else{ ?>
                                    <li >
                                    <a class="nav-link" href="logout.php?logout=true">logout</a>
                                    </li>


                                <?php } ?>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>


          
    </header>
