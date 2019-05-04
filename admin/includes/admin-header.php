<?php include('../includes/connection.php') ?>

<?php
	//Unauthorized Access Check
    session_start();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'admin'){
       $message = base64_encode(urlencode("Please Login as Admin"));
       header('Location:../index.php?msg=' . $message);
       exit();
       }
    
?>



<div class="row dashboard-top-nav">
			<div class="col-sm-3 logo">
                <img src="../assets/img/ias-logo.png">
			</div>
			<div class="col-sm-4 top-search">
				<div class="search">
					<i class="fa fa-search"></i>
					<input type="text" placeholder="Search">
				</div>
			</div>
			<div class="col-sm-5 notification-area">
				<ul class="top-nav-list" style="padding-top: 15px;">
					<li class="user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span style="font-size:16px;"><?php echo $_SESSION['name']; ?><span class="caret"></span></span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
									<a href="../logout.php">LOGOUT</a>

							</li>
						</ul>
					</li>
				</ul>
			</div>
</div>