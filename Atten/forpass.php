<?php
session_start();
include('header.php');
if($_SESSION['id']== NULL)
{
	echo '<script>window.location="asdfg"</script>';
}
?>
<div class="page-inner mt--5">

	<div class="container">
		<br><br>
		<div class="row justify-content-center">

			<div class="col-xl-6 col-lg-6 col-md-6">

				<div class="card o-hidden border-0 shadow-lg my-5 card-gray" style="border-top-right-radius:80px;border-bottom-right-radius:80px;
				border-bottom-left-radius:80px;">
				<div class="card-body p-2 ">

					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-12">
							<div class="p-2">
								<div class="text-center">
									<h2 class="h2 text-gray-1000 mb-2">HERE YOUR INFORMATION</h2>
								</div>
								<?php
								// $id3=$_SESSION['id'];
								$sql="SELECT * FROM b_person WHERE bid=10";
								$record=mysqli_query($connection,$sql);
		// if ($record) 
		// {
								$result=mysqli_query($connection,$sql);
								$row=mysqli_fetch_array($result);

								echo "<div class='input-group mb-3'>
								<div class='input-group-prepend'>
								<span class='input-group-text' id='basic-addon1'>Name</span>
								</div>
								<span type='text' class='form-control' placeholder='Email' aria-label='Username' aria-describedby='basic-addon1'name='pd' required='Enter Email'>".$row['First_Name']." ".$row['Last_Name']."</span>
								</div>";
								echo "<div class='input-group mb-3'>
								<div class='input-group-prepend'>
								<span class='input-group-text' id='basic-addon1'>User Id</span>
								</div><span type='text' class='form-control' placeholder='Email' aria-label='Username' aria-describedby='basic-addon1'name='pd' required='Enter Email'>".$row['Email']."</span></div>";
								echo "<div class='input-group mb-3'>
								<div class='input-group-prepend'>
								<span class='input-group-text' id='basic-addon1'>Mobile No.</span>
								</div><span type='text' class='form-control' placeholder='Email' aria-label='Username' aria-describedby='basic-addon1'name='pdc' required='Enter Email'>".$row['Mobile']."</span></div>";
								echo "<form class='user' action=barwas method=post>";
								echo "<div class='input-group mb-3'>
    <div class='input-group mb-3'>
    <div class='input-group-prepend'>
								<span class='input-group-text' id='basic-addon1'>Password</span>
								</div>
      <input type='password' placeholder='Enter New Password' class='form-control' name='password' id='myInput1' required=''>
      <div class='input-group-append'>
       <span  class='btn btn-dark text-white px-4 py-2' onclick='myFunction1()'>
        <i class='icon-eye'></i>
      </span>
    </div>
  </div>
  <div class='input-group mb-3'>
  <div class='input-group-prepend'>
								<span class='input-group-text' id='basic-addon1'>Password</span>
								</div>
    <input placeholder='Re-Enter New Password' type='password' class='form-control' name='pd' id='myInput' required='' data-toggle='password'>
    <div class='input-group-append'>
     <span  class='btn btn-dark text-white px-4 py-2' onclick='myFunction()'>
      <i class='icon-eye'></i>
    </span>
  </div>
</div>
								</div>";
								// echo "<div class='input-group mb-3'>
								// <div class='input-group-prepend'>
								// <span class='input-group-text' id='basic-addon1'>re enter</span>
								// </div>
								// <input type='password' class='form-control' placeholder='Password' aria-label='Username' aria-describedby='basic-addon1'name='pd' required='Enter Email'>
								// </div>";
								echo "<input type=hidden name=id value='".$row['bid']."'>";
								echo "<button class='btn btn-round btn-block btn-secondary' type='submit' value='submit' name='submit' >submit</button>";
								echo "</form><br>";

		// }
		// else
		// {
		// echo "<script>alert('Oops....Something went wrong!');</script>";
		// session_destroy();
		// session_unset();
		// echo '<script>window.location="asdfg"</script>';
		// }
								?>
									<!-- <form action="tyuio" method="post" class="user">
										<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">@</span>
													</div>
													<input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1"name="eml" required="Enter Email">
												</div>
					<button  type="submit" value="submit" class="btn btn-secondary btn-block btn-round" name="submit" >Send Otp</button>	
				</form> -->									
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div> 
<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function myFunction1() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
<?php
include('footer.php');
include('script.php');
?>
