<?php
include('header.php');
include('navbar.php');
title('New Attendance');
$col=$_SESSION['sub'];
if($_SESSION['sub']!=NULL)
{
?>
<div class="page-inner ">
	<div class="row ">
		<div class="col-md-6 ml-auto mr-auto" ><center>
		<form action="action.php" method="post" id="form">
			<input type="hidden" name="subj" value="<?php echo $col;?>">
				<div class="card " style="border-bottom-left-radius:70px;border-top-right-radius:70px;">
				<div class="card-header">
					<div class="card-title">
						<?php 
						$sql_run=select("prn",$col,"");
						$row=mysqli_num_rows($sql_run);
						echo $_SESSION['sub'].'&emsp;&emsp;Total Students: '.$row.'';
						$_SESSION['cont']=$row;
						$i=1;?>					
				</div>
			</div>
			<div class="card-body">
				<table class="table table-head-bg-primary mt-4" style="text-align: center;">
					<thead>
						<tr>
							<th scope="col">PRN</th>
							<th scope="col">ATTENDANCE&emsp;&emsp;Present All&emsp;<input class="btn larg"  onclick="p();" id="c" type="checkbox"/></th>
						</tr>
					</thead>
					<tbody>		
						<?php
						if (mysqli_num_rows($sql_run)>0) 
						{
							while ($row=mysqli_fetch_assoc($sql_run)) 
							{
								?>
								<tr>
									<td><?php echo $row['prn'];?> </td>
									<td><input type="checkbox" class="larg" id="<?php echo($i) ?>" name="<?php echo($i) ?>" value="present" /></td>
								</tr>
								<?php $i+=1; }} ?>
							</tbody>
						</table>				
						<button type="submit" class="btn btn-success btn-lg w-50" name="submit"><i class="fa fas fa-check"></i> Submit</button>					
				</div>
			</div>
			</form>
		</center>
	</div>
		</div>
	</div>
	<?php
}
	else
{echo '<script>window.location="Subjects.php"</script>';}
	include('footer.php');
	include('script.php');
	?>