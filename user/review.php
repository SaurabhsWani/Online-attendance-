<?php
include('header.php');
include('navbar.php');
?>
<div class="page-inner">   
        <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Review</h4>
        </div>
      </div>
    </div>
	<?php
	if (isset($_SESSION['Success'])&&$_SESSION['Success']!='') {
		echo '<h2 class="bg-primary text-white">'.$_SESSION['Success'].'</h2>';
		unset($_SESSION['Success']);
	}
	if (isset($_SESSION['Status'])&&$_SESSION['Status']!='') {
		echo '<h2 class="bg-danger text-white">'.$_SESSION['Status'].'</h2>';
		unset($_SESSION['Status']);
	}
	?>
	<form class="p-3 " style="background-color:rgba(219, 241, 214, 0.986) ; border-bottom-right-radius:50px;border-top-left-radius:50px;" method="post" action="revcon.php">
		<input type="hidden" name="id" value="<?php echo $_SESSION['bid'];?>">
		<div class="form-group" >
			<span for="comment" style="color: black">Write about The Online Attendance</span>
			<br><br><input class="form-control" name="rev" id="comment"  rows="5" require="">
			</input>
		</div>
		<div class="form-group">
			<span class="form-label d-block" style="color: black">Rate Us</span>
			<div class="selectgroup selectgroup-success selectgroup-pills">
				<label class="selectgroup-item" >
					<input type="checkbox" name="icon-input" value="1" id="1" class="selectgroup-input" onclick="p();" >
					<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-star"></i></span>
				</label>
				<label class="selectgroup-item">
					<input type="checkbox" name="icon-input" value="2" id="2" class="selectgroup-input" onclick="p2();">
					<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-star"></i></span>
				</label>
				<label class="selectgroup-item">
					<input type="checkbox" name="icon-input" value="3" id="3" class="selectgroup-input" onclick="p3();">
					<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-star"></i></span>
				</label>
				<label class="selectgroup-item">
					<input type="checkbox" name="icon-input" value="4" id="4" class="selectgroup-input" onclick="p4();">
					<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-star"></i></span>
				</label>
				<label class="selectgroup-item">
					<input type="checkbox" name="icon-input" value="5" id="5" class="selectgroup-input" onclick="p5();">
					<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-star"></i></span>
				</label>
			</div>
		</div>
		<input type="hidden"  name="rate" value="" id="r">
		<script type="text/javascript">
			function p3()
			{
				var e=document.getElementById("3");
				if (e.checked) 
				{
                                    // alert("All Students Are Present");
                                    for (let i = 1; i <=3; i++) 
                                    {
                                    	document.getElementById(i).checked=true;
                                    }
                                    for (let i = 4; i <=5; i++) 
                                    {
                                    	document.getElementById(i).checked=false;
                                    }
                                    document.getElementById("r").value=3;
                                }                                
                            }
                            function p4()
                            {
                            	var f=document.getElementById("4");
                            	if (f.checked) 
                            	{
                                    // alert("All Students Are Present");
                                    for (let i = 1; i <=4; i++) 
                                    {
                                    	document.getElementById(i).checked=true;
                                    }
                                    document.getElementById(5).checked=false;
                                    document.getElementById("r").value=4;
                                } 
                                
                            }

                            function p5()

                            {
                            	var g=document.getElementById("5");                           
                            	if (g.checked) 
                            	{
                                    // alert("All Students Are Present");
                                    for (let i = 1; i <=5; i++) 
                                    {
                                    	document.getElementById(i).checked=true;
                                    }
                                    document.getElementById("r").value=5;
                                } 
                                }
                                function p2()
                                {
                                	var d=document.getElementById("2");
                                	if (d.checked) 
                                	{
                                    // alert("All Students Are Present");
                                    for (let i = 1; i <=2; i++) 
                                    {
                                    	document.getElementById(i).checked=true;
                                    }
                                    for (let i = 3; i <=5; i++) 
                                    {
                                    	document.getElementById(i).checked=false;
                                    }
                                    document.getElementById("r").value=2;
                                } 
                                
                            }
                            function p()
                            {

                            	var c=document.getElementById("1");
                            	if (c.checked)
                            	{
                                    // alert("All Students Are Absent");
                                    for (let i = 1; i <=1; i++) 
                                    {
                                    	document.getElementById(i).checked=true;
                                    }
                                    for (let i = 2; i <=5; i++) 
                                    {
                                    	document.getElementById(i).checked=false;
                                    }
                                    document.getElementById("r").value=1;
                                }
                                else
                                {
                                    // alert("All Students Are Absent");
                                    for (let i = 1; i <=5; i++) 
                                    {
                                    	document.getElementById(i).checked=false;
                                    }
                                    document.getElementById("r").value=5;
                                }
                                
                            }
                        </script>
		<!-- <div class="form-group">
			<label for="comment">Rate Us Out-Of-100</label>
			<div class="sparkline8-list shadow-reset">
				<div class="input-knob-dial-wrap">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="knob-single">
								<input type="text" name="rate" class="dial" data-fgcolor="black" data-width="85" data-height="85" require=""><br>Rotate Knob
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="form-group">
			<button  type="submit" name="btn" class="btn btn-info btn-lg" style="
  border-bottom-left-radius:40px;border-top-right-radius:40px;"> Submit Review</button>
		</div>
	</form>
</div>
</div>
</div>
</div> 
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/modal-active.js"></script>
<script src="js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="js/touchspin/touchspin-active.js"></script>
<script src="js/colorpicker/jquery.spectrum.min.js"></script>
<script src="js/colorpicker/color-picker-active.js"></script>
<script src="js/datapicker/bootstrap-datepicker.js"></script>
<script src="js/datapicker/datepicker-active.js"></script>
<script src="js/input-mask/jasny-bootstrap.min.js"></script>
<script src="js/chosen/chosen.jquery.js"></script>
<script src="js/chosen/chosen-active.js"></script>
<script src="js/select2/select2.full.min.js"></script>
<script src="js/select2/select2-active.js"></script>
<script src="js/ionRangeSlider/ion.rangeSlider.min.js"></script>
<script src="js/ionRangeSlider/ion.rangeSlider.active.js"></script>
<script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
<script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
<script src="js/rangle-slider/rangle-active.js"></script>
<script src="js/knob/jquery.knob.js"></script>
<script src="js/knob/knob-active.js"></script>
<script src="js/main.js"></script>
<?php
include('script.php');
?>
