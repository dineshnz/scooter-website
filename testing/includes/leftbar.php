<?php session_start();
error_reporting(0);
$userLevel = $_SESSION['userLevel'];

?>

<style>
  .ts-sidebar ul li:hover{
   -webkit-transition: all .3s ease-in-out;
   -webkit-transform: scale(1.05);
  }
</style>
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">

				<li class="ts-label">Main</li>

        <li>

          <a href="myProfile.php"><i class="fa fa-user"></i> update profile</a>

        </li>
        <?php 
        if($userLevel >= 1){ ?>

        <li><a href="searchScooter.php"><i class="fa fa-motorcycle"></i> Search Scooters</a></li>
        <li><a href="viewProfileRequests.php"><i class="fa fa-user"></i> View Profie Requests</a></li>
        <li><a href="myActiveAssets.php"><i class="fa fa-motorcycle"></i> My Bookings</a></li>
        <?php }?>

        <?php 
        if($userLevel ==2){ ?>

        <li><a href="addScooter.php"><i class="fa fa-motorcycle"></i> List a Scooter</a></li>
        <li><a href="pendingRequest.php"><i class="fa fa-user"></i> View vehicle requests</a></li>
        <li><a href="myListing.php"><i class="fa fa-list"></i> My Assets</a></li>
        <li><a href="myRentedAssets.php"><i class="fa fa-list"></i> My Rented Vehicles</a></li>
        <?php }?>
				

			</ul>
		</nav>

	