<?php
include('header.php');
include('navbar.php');
$col=$_SESSION['sub'];
$sid=$_SESSION['subcode'];
if($_SESSION['sub']!=Null)
{
	$_SESSION['sub']=$col;
	$id=$_SESSION['bid'];
	$per=$_SESSION['perdet'];
// $sql = "SELECT * FROM subject ";
// $result =mysqli_query($connectionn,$sql);
// while($row = mysqli_fetch_assoc($result)) {
// 	echo "<p>\n</p>".$row['subjname'];
// } 		
	$sql="SHOW COLUMNS FROM $col";
	$res=mysqli_query($connection,$sql);
	$i=1;
	while ($row=mysqli_fetch_array($res)) 
	{
		$x[$i]=$row['Field'];
		$i+=1;
	}
// for($y=1;$y<$i;$y++)
// {
// 	echo $x[$y]."<br>";
// }
	$query="SELECT prn,percnt FROM $col";
	$sql=mysqli_query($connection,$query);
	?>

	<div class="page-inner ">

		<div class="row ">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title" style="text-transform: uppercase;">
							<div class="row "><div class="col-sm-6 col-md-6">					
								<?php echo $col;?>&emsp;(DETAINTION LIST)</div>
								<div class="col-sm-6 col-md-6">
          	<button onclick="exportToExcel('basic-datatables','<?php echo $col;?>');" class="btn btn-success " style="
  border-bottom-left-radius:40px;border-top-right-radius:40px;"><i class="fas fa-download"></i> Download Detaintion List</button>
          </div>
          </div>          	
          </h4>
      </div>
      <div class="card-body">
      	<div class="table-responsive">
      		<table id="basic-datatables" class="display table table-striped table-hover" >
      			<?php
      			echo "<thead><tr>";
      			for($y=2;$y<4;$y++){echo "<th>".$x[$y]."</th>";}
      				echo"<th>DETAINTION STATUS</th></tr></thead>";
							// echo "<tfoot><tr>";
							// for($y=1;$y<$i;$y++){echo "<th>".$x[$y]."</th>";}
							// 	echo"</tr></tfoot>
      			echo "<tbody>";
      			while ($row=mysqli_fetch_assoc($sql)) 
      			{  	
      				echo "<tr>";
      					echo nl2br("<td>".$row['prn']."\r\t"."</td>");
      					echo nl2br("<td>".$row['percnt']."\r\t"."</td>");

      					if ($row['percnt']>=$per) 
      					{
      						echo "<td>NOT-DETAIN</td>"; 
      					}
      					else 
      					{
      						echo "<td>DETAIN</td>"; 
      					}  	
      				echo "</tr>";
      			}

      			mysqli_close($connection);
      			echo "</tbody>";
      			?>	

      		</table>
      	</div>
      </div>
  </div>
</div>
<?php	 	

?>
</div>
</div> 
<?php
}
else
	{echo '<script>window.location="Subjects.php"</script>';}
include('footer.php');
include('script.php');
?>