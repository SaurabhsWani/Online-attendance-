<?php
include('header.php');
?>
<!-- ##### Instructors Video Start ##### -->
<div class="instructors-video d-flex align-items-center justify-content-center bg-img" style="background-image: url(../admin/image/new3.jpg);">
	<h2 style="color:white;">Be The <span style="color: black">Smart</span> Teacher</h2>
	<!-- video btn -->
	<a href="../admin/image/intro1.mp4" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
</div >
<div id="trial"></div>
<!-- ##### Instructors Video End ##### -->
<script>
	localStorage.removeItem("t1");
	localStorage.removeItem("t2");
	localStorage.removeItem("t3");
	localStorage.removeItem("t4");
	localStorage.removeItem("t5");
	localStorage.removeItem("t6");
	localStorage.removeItem("m");
	function passvalue()
	{
		var f1=document.getElementById("t1").value;
		var f2=document.getElementById("t2").value;
		var f3=document.getElementById("t3").value;
		var f4=document.getElementById("t4").value;
		var f5=document.getElementById("t5").value;
		var f6=document.getElementById("t6").value;
		localStorage.setItem("t1",f1);
		localStorage.setItem("t2",f2);
		localStorage.setItem("t3",f3);
		localStorage.setItem("t4",f4);
		localStorage.setItem("t5",f5);
		localStorage.setItem("t6",f6);
		return false;
	}
</script><br><br><br><br><br>
<div class="container">
	<style type="text/css">
		.wave{
			position: fixed;
			bottom: 0;
			left: 0;
			height: 100%;
			width: 100%;
			z-index: -1;
		}
	</style>
	<img class="wave" src="../admin/image/indd.png"/>
	<div class="row justify-content-center">

		<div class="col-xl-6 col-lg-6 col-md-6">
			<div class="d-flex flex-column align-items-center justify-content-center   ml-auto mr-auto p-4 contact-form" style="border-bottom-right-radius:70px;border-top-left-radius:70px;">							
				<h4 class="search_title">Start Trial Attendance</h4>
				<center>
					<form class="user" action="Attendance.php">
						<div class="form-group form-inline">
							<label for="inlineinput" class="col-md-5 col-form-label">Teacher Name</label>
							<div class="col-md-7 p-0">
								<input type="text" class="form-control input-full l" id="t1" pattern="[^0-9]+" required placeholder="Ex. Saurabh Wani" style="color: black">
							</div>
						</div>
						<div class="form-group form-inline">
							<label for="inlineinput" class="col-md-5 col-form-label">Class Name</label>
							<div class="col-md-7 p-0">
								<input type="text" class="form-control input-full" id="t2" required placeholder="First year Comp."style="color: black">
							</div>
						</div>
						<div class="form-group form-inline">
							<label for="inlineinput" class="col-md-5 col-form-label">Date Of Lecture</label>
							<div class="col-md-7 p-0">
								<input class="form-control input-full" id="t3" type="date"  required placeholder="00-00-0000"style="color: black">
							</div>
						</div>
						<div class="form-group form-inline">
							<label for="inlineinput" class="col-md-5 col-form-label">Subject Name</label>
							<div class="col-md-7 p-0">
								<input class="form-control input-full" id="t4" type="text"  required placeholder="English"style="color: black">
							</div>
						</div>
						<div class="form-group form-inline">
							<label for="inlineinput" class="col-md-5 col-form-label">Starting PRN</label>
							<div class="col-md-7 p-0">
								<input type="number" class="form-control input-full" id="t5" placeholder="Enter Starting prn"style="color: black">
							</div>
						</div>
						<div class="form-group form-inline">
							<label for="inlineinput" class="col-md-5 col-form-label">End PRN</label>
							<div class="col-md-7 p-0">
								<input type="number" class="form-control input-full" id="t6" placeholder="Enter ending prn"style="color: black">
							</div>
						</div>
						<div class="form-group form-inline">
							<label for="disableinput" class="col-md-5 col-form-label">Enter Extra prn</label>
							<div class="col-md-7 p-0">
								<input type="text" class="form-control input-full" id="disableinput" placeholder="Login To Enter the Extra Prn" disabled >
							</div>
						</div>
						<br><button type="submit" class="btn btn-primary " onclick="passvalue();">Start Attendance</button><br>
					</form><br>
				</center>							
			</div>
			<br> 
		</div>
	</div>
</div>
<?php
include('footer.php');
?>