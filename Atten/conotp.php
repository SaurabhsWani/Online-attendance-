<?php
session_start();
include('header.php');
if($_SESSION['id']==NULL)
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
									<h2 class="h2 text-gray-1000 mb-2">Enter the Otp send on your email		</h2>
								</div>
								 <center>
								<form action=cvbnm method=post>	
								<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">OTP</span>
													</div>
													<input type="text" class="form-control" placeholder="OTP" aria-label="Username" aria-describedby="basic-addon1"name="tp" required="">
												</div>	
								 <button  type='submit' class='btn btn-secondary btn-block btn-round' value='submit' name='submit' >submit</button>
								 </form><br>
								</center>							
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
include('footer.php');
include('script.php');
?>