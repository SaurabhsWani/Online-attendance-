<?php
include('header.php');
include('navbar2.php');
?>

<div class="page-inner mt--5"><br><br>
	<div class="row">
		<div class="col-md-8 ml-auto mr-auto">
	<h4 class="page-title">How To Take Attendance Online</h4>
			<ul class="timeline">
				<li>
					<div class="timeline-badge primary"><i class="fas fa-user"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Step 1</h4>
						</div>
						<div class="timeline-body">
							<p>After you Login Click to Subjects<br><button onclick="window.location='ulogin.php'" class="btn  btn-sm">Go There</button></p>
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-badge secondary"><i class="
						fas fa-plus"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title">Step 2</h4>
							</div>
							<div class="timeline-body">
								<p>Click To Add new Subject.<br><button onclick="window.location='ulogin.php'" class="btn  btn-sm">Go There</button></p>
						</div>
					</div>
				</li>
				<li>
					<div class="timeline-badge info"><i class="far fa-edit"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Step 3</h4>
						</div>
						<div class="timeline-body">
							<p>Fill the Subject name And The PRN(Roll no) of students.<br>
							NOTE: At the end of the subject name there will be a no of your profile id</p>
						</div>
					</div>
				</li>
				<li class="timeline-inverted">
					<div class="timeline-badge success"><i class="fas fa-thumbs-up"></i></div>
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Step 4</h4>
						</div>
						<div class="timeline-body">
							<p>After Succesfull creation of subject.<br>Now click on the view button near subject name</p>
						</div>
					</div>
				</li>
				<li>
					<div class="timeline-badge warning"><i class="
						fas fa-eye"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title">Step 5</h4>
							</div>
							<div class="timeline-body">
								<p>After clicking the view you will see table with id and prn of the students then click on new attendance.<br>Take attendance and submit and see the overall attendance according to date</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-badge default"><i class="fas fa-sticky-note"></i></div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4 class="timeline-title">Review</h4>
							</div>
							<div class="timeline-body">
								<p>Write a Review About Product.<br><button class="btn  btn-sm" onclick="window.location='ulogin.php'">Write Review</button></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div> 
	</div> 
	<?php
	include('footer.php');
	include('script.php');
	?>