<?php
include('security.php');
include('fun.php');
?>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" style="background-color:rgb(181, 230, 29)">
				
				
				<a href="main.php"  class="logo">					
					<img class='navbar-brand' src='../admin/image/Online-Attendance-logo3.png'>
				</a>
				
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<!-- <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button> -->
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" style="background-color:rgb(181, 230, 29)">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<a class="nav-link" href="delsub.php" title="Delete Subjects">
								<i class="fas fa-trash"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<div>
			<a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">
				<div class="custom-template">
					<div class="custom-toggle" style="background-color: white">
						<i class="fas fa-power-off text-danger"></i>
					</div>
				</div>
			</a>
		</div>
		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabmain="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<form action="logout.php" method="POST">
							<button class="btn btn-danger" type="button" data-dismiss="modal">
								<span class="btn-label"><i class="fa fa-exclamation-circle"></i>Cancel</span>
							</button>
							<button type="submit" name="logout_btn" class="btn btn-success">
								<span class="btn-label"><i class="fa fa-check"></i>Logout</span>
							</button>					
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2 ">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">						
					<ul class="nav nav-primary ">
						<li class="nav-item fw-bold">
							<a href="profile.php" >

								<?php
								$id=$_SESSION['bid'];
								$sql=select("*","b_person","WHERE bid='$id'");
								foreach($sql as $row ) {
									if (empty($row['image'])) 
									{
										$words = explode(" ", strtoupper($row['Name']));
										$acronym = "";
										foreach ($words as $w) {
											$acronym .= $w[0];
										}
										echo "<div class='avatar avatar-lg'>
										<span class='avatar-title rounded-circle border border-white avatar-online'>".$acronym."</span>               
										</div>";
									}
									else
									{
										echo "<div class='avatar avatar-online mr-1'><img class='avatar-img rounded-circle' src='../admin/image/".$row['image']."'></div>";
									}
								}
								?>
								<p><?php echo $_SESSION['fn'];?></p>
							</a>
						</li>	
						<li class="nav-item ">
							<a  href="main.php" >
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="Subjects.php">
								<i class="fas fa-book"></i>
								<p>Subjects</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="fordetli.php">
								<i class="fas fa-exclamation-circle"></i>
								<p>Detainsion List</p>
							</a>
						</li>
						<li class="nav-item" onmouseover="notification();">
							<a  href="jflty.php">
								<i class="far fa-handshake"></i>
								<p>Joined Faculty</p>
								<?php
								$aid=$_SESSION['bid'];
								$resultt=select("*","recieve","WHERE bid='$aid'");
								foreach($resultt as $roww ) 
								{
									$arr=$roww['rec'];
									$ucp= unserialize($arr);
									$bb = array();
									$y=count($ucp);
								}
								$_SESSION['ntf']=$y;
								if ($y>0) 
								{
									echo" <span class='badge'>".$y."</span>";
								}
								?>									
							</a>
						</li>
						<li class="nav-item">
							<a href="search.php?q=">
								<i class="fas fa-search"></i>
								<p>Search Faculty</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="Teachers.php">
								<i class="fas fa-swatchbook"></i>
								<p> sub form Teachers</p>
							</a>
						</li>
						<li class="nav-item">							
							<a class="dropdown-item" href="profile.php">
								<i class="fas fa-user-cog"></i>	
								<p>My Profile</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="review.php">
								<i class="fas fa-edit"></i>
								<p>Write Review</p>
							</a>

						</li>
						<li class="nav-item">
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-mx fa-fw mr-1 text-gray-800"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">