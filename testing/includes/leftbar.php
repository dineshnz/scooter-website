<?php session_start();

$userLevel = $_SESSION['userLevel'];

?>

<style>
  li:hover{
   -webkit-transition: all .3s ease-in-out;
   -webkit-transform: scale(1.05);
  }
</style>
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>

        <li>
          <a href="updateProfile.php"><i class="fa fa-motorcycle"></i> update profile</a>
        </li>

        <?php 
        if($userLevel >= 1){ ?>

        <li><a href="searchScooter.php"><i class="fa fa-users"></i> Search Scooters</a></li>
        <?php }?>

        <?php 
        if($userLevel ==2){ ?>

        <li><a href="addScooter.php"><i class="fa fa-motorcycle"></i> List a Scooter</a></li>
        <li><a href="pendingRequest.php"><i class="fa fa-user"></i> View pending requests</a></li>
        <?php }?>
				

			</ul>
		</nav>

	