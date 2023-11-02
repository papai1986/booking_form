<?php
include('../../private/process_data/session.php');
if (isset($_SESSION['user'])) {
	// code...
	?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FLPL Admin</title>
    <link rel="stylesheet" href="../../landing_asset/style.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
	<!-- Bootstrap 5 css link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- ajax cdn link -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<div class="sidebar close">
    	<div class="logo-details">
      		<i class="bx bx-cube"></i>
      		<span class="logo_name">Admin Panel</span>
    	</div>
    	<ul class="nav-links">
      		<li>
        		<a href="index.php">
          			<i class="bx bx-grid-alt" ></i>
          			<span class="link_name">Dashboard</span>
        		</a>
        		<ul class="sub-menu blank">
          			<li><a class="link_name" href="index.php">Dashboard</a></li>
        		</ul>
      		</li>
      		<li>
        		<div class="iocn-link">
          			<a href="#">
            			<i class="bx bxs-user-pin"></i>
            			<span class="link_name">User</span>
          			</a>
          			<i class="bx bxs-chevron-down arrow" ></i>
        		</div>
        		<ul class="sub-menu">
					<li><a class="link_name" href="#">User Profile</a></li>
					<li><a href="../all-user/index.php">All User</a></li>
					<li><a href="../all-user/active_user.php">Active User</a></li>
					<li><a href="../all-user/in-active.php">In-Active User</a></li>
					<li><a href="#">Suspend User</a></li>
        		</ul>
      		</li>
      		<li>
        		<div class="iocn-link">
          			<a href="#">
            			<i class="bx bxs-report"></i>
            			<span class="link_name">Report</span>
          			</a>
          			<i class="bx bxs-chevron-down arrow" ></i>
        		</div>
				<ul class="sub-menu">
				  	<li><a class="link_name" href="#">Report</a></li>
				  	<li><a href="../booking-information/index.php">Booking Report</a></li>
				  	<li><a href="../cancel-Information/index.php">Cancel Report</a></li>
				  	<li><a href="../recharge_table/user_recharge_history.php">Recharge Report</a></li>
				  	<li><a href="../report/">Courier Wise Report</a></li>
				</ul>
      		</li>
      		<li>
      			<div class="icon-link">
      				<a href="#">
      					<i class='bx bx-sync'></i>
      					<span class="link_name">Update</span>
      				</a>
      				<i class="bx bxs-chevron-down arrow" ></i>
      			</div>
      			<ul class="sub-menu">
      				<li><a class="link_name" href="#">Update</a></li>
      				<li><a href="#">Pincode Update</a></li>
      			</ul>
      		</li>
      		<li>
        		<a href="../cod-remitence/index.php">
          			<i class="bx bx-wallet"></i>
          			<span class="link_name">Cod Remitence</span>
        		</a>
        		<ul class="sub-menu blank">
          			<li><a class="link_name" href="../cod-remitence/index.php">Cod</a></li>
        		</ul>
      		</li>
      		<li>
        		<a href="../help-desk/index.php">
          			<i class="bx bx-help-circle"></i>
          			<span class="link_name">Help Desk</span>
        		</a>
        		<ul class="sub-menu blank">
          			<li><a class="link_name" href="../help-desk/index.php">Help Desk</a></li>
        		</ul>
      		</li>
      		<li>
        		<div class="iocn-link">
          			<a href="../weight/index.php">
            			<i class="bx bx-calendar-exclamation"></i>
            			<span class="link_name">Weight Missmatch</span>
          			</a>
          		<i class='bx bxs-chevron-down arrow' ></i>
        		</div>
        		<ul class="sub-menu">
          			<li><a class="link_name" href="../weight/index.php">! Weight</a></li>
					<li><a href="../weight/add_data.php">Add Data</a></li>
          			<li><a href="../weight/create_case.php">Create Case</a></li>
          			<li><a href="../weight/forword_courier.php">Forword To Courier</a></li>
          			<li><a href="../weight/user_reject.php">User Reject</a></li>
          			<li><a href="../weight/case_close.php">Case Close</a></li>					
        		</ul>
      		</li>
      		<li>
        		<a href="../ladger-page/index.php">
          			<i class="bx bxs-calculator"></i>
          			<span class="link_name">Accounts</span>
        		</a>
        		<ul class="sub-menu blank">
          			<li><a class="link_name" href="../ladger-page/index.php">Accounts</a></li>
        		</ul>
      		</li>
      		<!--<li>
        		<a href="../weight/index.php">
          			<i class="bx bx-calendar-exclamation"></i>
          			<span class="link_name">Weight Missmatch</span>
        		</a>
        		<ul class="sub-menu blank">
          			<li><a class="link_name" href="../weight/index.php">! Weight</a></li>
        		</ul>
      		</li>-->
      		<!--<li>
        		<a href="#">
          			<i class='bx bx-cog' ></i>
          			<span class="link_name">Setting</span>
        		</a>
        		<ul class="sub-menu blank">
          			<li><a class="link_name" href="#">Setting</a></li>
        		</ul>
      		</li>-->
      		<li>
    			<div class="profile-details">
      				<div class="profile-content">
        				<img src="../../image/User_Avatar.png" alt="profileImg">
      				</div>
      				<div class="name-job">
        				<div class="profile_name"><?php echo $session_contact;?></div>
        				<div class="job">Admin</div>
      				</div>
      				<a href="../php_file/logout.php"><i class="bx bx-log-out" ></i></a>
    			</div>
  			</li>
		</ul>
  	</div>
  	<section class="home-section">
    	<div class="home-content">
			<i class="bx bx-menu" ></i>
			<span class="text"><?php echo $session_name;?></span>
    	</div>
  	</section>
  	<div class="container-fluid">
  		<section class="task-content">
  			<form>
  				<div class="row justify-content-start m-auto">
	  				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
	  					<label for="courierName" class="form-label form-label-sm">Courier Name</label>
	  					<select class="form-select form-select-sm" name="courier_name" id="courier_name">
	  						<option value="">Select Courier</option>
	  						<option value="del">Delhivery</option>
	  						<option value="ecom">Ecom</option>
	  						<option value="sfx">Shadowfax</option>
	  						<option value="xb">XpressBess</option>
	  					</select>
	  				</div>
	  			</div>
	  			<div class="row justify-content-start m-auto d-none" id="delhivery">
	  				<div class="col-lg-4 col-md-4 col-sm-12">
	  					<h1>Delhivery</h1>
	  				</div>
	  			</div>
	  			<div class="row justify-content-start m-auto d-none" id="ecom">
	  				<div class="col-lg-4 col-md-4 col-sm-12">
	  					<h1>Ecom</h1>
	  				</div>
	  			</div>
	  			<div class="row justify-content-start m-auto d-none" id="shadowfax">
	  				<div class="col-lg-4 col-md-4 col-sm-12">
	  					<h1>Shadowfax</h1>
	  				</div>
	  			</div>
	  			<div class="row justify-content-start m-auto d-none" id="xpressbees">
	  				<div class="col-lg-4 col-md-4 col-sm-12">
	  					<h1>XpressBees</h1>
	  				</div>
	  			</div>
  			</form>
  		</section>
  	</div>
  	<script src="../../landing_asset/script.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$('#courier_name').change(function(){
  				var courier= $(this).val();
  				if (courier== "del") {
  					$('#delhivery').removeClass('d-none');
  					$('#ecom').addClass('d-none');
  					$('#shadowfax').addClass('d-none');
  					$('#xpressbees').addClass('d-none');
  				}else if (courier== "ecom") {
  					$('#ecom').removeClass('d-none');
  					$('#delhivery').addClass('d-none');
  					$('#shadowfax').addClass('d-none');
  					$('#xpressbees').addClass('d-none');
  				}else if (courier== "sfx") {
  					$('#shadowfax').removeClass('d-none');
  					$('#delhivery').addClass('d-none');
  					$('#ecom').addClass('d-none');
  					$('#xpressbees').addClass('d-none');
  				}else if (courier== "xb") {
  					$('#xpressbees').removeClass('d-none');
  					$('#delhivery').addClass('d-none');
  					$('#ecom').addClass('d-none');
  					$('#shadowfax').addClass('d-none');
  				}else{
  					$('#delhivery').addClass('d-none');
  					$('#ecom').addClass('d-none');
  					$('#shadowfax').addClass('d-none');
  					$('#xpressbees').addClass('d-none');
  				}
  			});
  		});
  	</script>
</body>
</html>
	<?php
}else{
	require_once("../php_file/logout.php");
}
?>