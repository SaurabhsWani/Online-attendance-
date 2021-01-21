<?php
include('header.php');
include('navbar.php');
title("Record");
$col=$_SESSION['sub'];
$sid=$_SESSION['subcode'];
if($_SESSION['sub']!=Null)
{
	$_SESSION['sub']=$col;
	$id=$_SESSION['bid'];
	$sql="SHOW COLUMNS FROM $col";
	$res=mysqli_query($connection,$sql);
	$i=1;
	while ($row=mysqli_fetch_array($res)) 
	{
		$x[$i]=$row['Field'];
		$i+=1;
	}
	$sql=select("*","$col","");
	?>
	<div class="page-inner ">
		<div class="row ">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" style="text-transform: uppercase;">
							<div class="row ">
								<div class="col-sm-6 col-md-3">					
									<?php echo $col;?>									
								</div>
								<div class="col-sm-6 col-md-3">
									<form action="newatt.php" method="post">
										<input type="hidden" name="sub" value="<?php echo $col;?>">
										<button class="btn btn-secondary btn-round" style="alignment-baseline: right" type="submit" name="submit">						
											<i class="fa fas fa-plus"></i> Start New attendance</button>
										</form>
									</div>
									<div class="col-sm-6 col-md-3">
										<button onclick="exportToExcel('basic-datatables','<?php echo $col;?>');" class="btn btn-success btn-round"><i class="fas fa-download"></i> Download Attendance</button>
									</div>
								</div>
							</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="basic-datatables" class="display table table-striped table-hover" >
									<?php
									echo "<thead><tr>";
									for($y=1;$y<$i;$y++){echo "<th>".$x[$y]."</th>";}
										echo"</tr></thead>";
									echo "<tbody>";
									while ($row=mysqli_fetch_assoc($sql)) 
									{  	
										echo "<tr>";
										foreach ($row as $key=>$value) 
										{
											echo nl2br("<td>".$value."\r\t"."</td>");
										}  	
										echo "</tr>";
									}
									echo "</tbody>";
									?>	

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
		<?php
	}
	else
	{
		header('Location:Subjects.php');
	}
	include('footer.php');
	include('script.php');
	?>