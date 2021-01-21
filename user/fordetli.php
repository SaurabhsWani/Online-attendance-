<?php
include('header.php');
include('navbar.php');
title('Detaintion List');
unset($_SESSION['sub']);
unset($_SESSION['subcode']);
$id=$_SESSION['bid'];
?>
<div class="page-inner ">
  <div class="row ">    
    <div class="col-md-12">
      <div class="card bg-dark-gradient">
        <div class="card-header bubble-shadow">
          <h4 class="card-title" style="color: white">Detain List</h4>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">      
     <form action="Classs.php" method="post">
      <div class="form-group form-group-default">
        <label>Enter Percentage for detain<br>(75 By default) </label>
        <input id="Name" type="" name="pardet" class="form-control" placeholder="Enter Percentage" value="">
        <button name="btnn" type="submit" class="btn btn-block  btn-primary" >Submit</button>
      </div>
    </form> 
  </div>    
  <?php       
  $result=select("*","subject","WHERE id=$id");
  while($row = mysqli_fetch_assoc($result)) {?>               
    <div class="col-sm-6 col-md-3">
      <form action="Classs.php" method="post">      
       <div class="card card-stats card-round bg-dark-gradient">
        <button class="btn btn-xs btn-warning" type="submit" name="submit1" style="border-bottom-left-radius:40px;border-top-right-radius:40px;"><!-- background-color:rgba(176, 241, 176, 0.986); -->
          <div class="card-body bubble-shadow">
            <div class="row">
              <div class="col-3">
                <div class="icon-big text-center">
                  <i class="flaticon-interface-6"></i>
                </div>
              </div>
              <div class="col-9 col-stats" style="text-align: left">
                <div >
                  <h3  style="text-transform: uppercase;">
                    <?php echo $row['subjname'];
                    $sn=$row['subjname'];
                    $std=$row['standard'];
                    $div=$row['divsion'];
                    $sid=$row['sid'];?>
                  </h3>
                  <h4>
                    <?php
                    $sql_run=select("prn",$row['subjname'],"");
                    $row=mysqli_num_rows($sql_run);
                    echo $row;
                    echo " <i class='fas fa-users'></i>";
                    echo " (".$std." ".$div.")";?><input type="hidden" name="sub" value="<?php echo $sn ?>"><input type="hidden" name="subcode" value="<?php echo $sid ?>">
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </button>
      </div>
    </form>
  </div> 
<?php }
?>        
</div>
</div> 
</div>
</div> 
</div>
<?php
include('script.php');
?>