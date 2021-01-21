<?php
include('header.php');
include('navbar.php');
title('Home');
?>
<div class="page-inner">
	<!-- TimeLine -->
	<div class="row">   
		<div class="col-md-12">
			<div class="card bg-primary-gradient">
				<div class="card-header bubble-shadow">					
					<h4 class="card-title"style="color: white">Home<marquee>
						<?php 
						$sql=select("*","nupd","");
						if (mysqli_num_rows($sql)>0) 
						{
							while ($row=mysqli_fetch_assoc($sql)) 
							{
								echo "<span style='color: white'>".$row['l1'].'</span>&emsp;&emsp; ';         
							}
						}
						else
						{
							echo "<span style='color: white'>No Further Update</span>";
						}
						?>

					</marquee>
				</h4>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">How To Do Attendance</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-5 col-md-5">
						<div class="nav flex-column nav-pills nav-secondary " id="v-pills-tab-with-icon" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-home-tab-icons" data-toggle="pill" href="#s1" role="tab" aria-controls="v-pills-home-icons" aria-selected="true">
								<i class="fas fa-user"></i>Step 1
							</a>
							<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#s2" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
								<i class="fas fa-plus"></i>Step 2
							</a>
							<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#s3" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
								<i class="far fa-edit"></i>Step 3
							</a>
							<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#s4" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
								<i class="fas fa-thumbs-up"></i>Step 4
							</a>
							<a class="nav-link" id="v-pills-profile-tab-icons" data-toggle="pill" href="#s6" role="tab" aria-controls="v-pills-profile-icons" aria-selected="false">
								<i class="fas fa-sticky-note"></i>Review
							</a>
						</div>
					</div>
					<div class="col-7 col-md-7">
						<div class="tab-content" id="v-pills-with-icon-tabContent">
							<div class="tab-pane fade show active" id="s1" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
								<p>Hope You have completed this step for your own account if not then follow this for new account on online attendance.First register your self on the online attendance,for this click on register, after filling all your information correctly, submit form and login with your email id which is registered just now.<br><button onclick="window.location='Subjects.php'" class="btn ">Go There</button></p>
							</div>
							<div class="tab-pane fade" id="s2" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
								<p>After login you will be see the Home, Subjects,Detainsion List, My Profile, Write Review, Logout Tabs, click on the subject tab then Click To create new Subject.<br><button onclick="window.location='Subjects.php'" class="btn ">Go There</button>
								</p>
							</div>
							<div class="tab-pane fade" id="s3" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
								<p>Fill the Subject name And The PRN(Roll no) of students.<br>NOTE: At the end of the subject name there will be a your profile id ( you wil be seen this id in your profile detail)
								</p>
							</div>
							<div class="tab-pane fade" id="s4" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
								<p>After Succesfull creation of subject.<br>Now click on the subject name.After clicking the view you will see table with id and prn of the students then click on new attendance.<br>Take attendance and submit and see the overall attendance according to date
								</p>
							</div>
							<div class="tab-pane fade" id="s6" role="tabpanel" aria-labelledby="v-pills-profile-tab-icons">
								<p>Write a Review Online Attendance.<br>
									Or Just gives the answer of questions like<br>1. How Was Your experiance of online attendance<br>2. Tell About Our idea of online attendance..<br>3. Is this website helping to reduce tree cutting?<br><button class="btn " onclick="window.location='review.php'">Write Review</button>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
</div>
</div>
</div>
</div> 
<?php
include('script.php');
?>