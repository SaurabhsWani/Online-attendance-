<?php
include('header.php');
include('navbar.php');
title('Subject');
unset($_SESSION['sub']);
unset($_SESSION['subcode']);
?>
<div class="page-inner ">
  <?php
  message();
  ?>
  <div class="row ">   
    <div class="col-md-12">
      <div class="card bg-primary-gradient">
        <div class="card-header bubble-shadow">
          <h4 class="card-title" style="color: white">Subjects</h4>
        </div>
      </div>
    </div> 
    <div class="col-sm-6 col-md-3 ">
      <a href="newsub.php" style="text-decoration: none;">
        <div class="card card-stats  card-round card-dark bg-secondary-gradient"style="border-bottom-left-radius:40px;border-top-right-radius:40px;"><!-- background-color:rgb(187, 240, 233); -->
          <div class="card-body bubble-shadow">
            <div class="row">
              <div class="col-5">
                <div class="icon-big text-center">
                  <i class="fa fas fa-plus"></i>
                </div>
              </div>
              <div class="col-7 col-stats">
                <div class="numbers">
                  <p class="card-category" style="color: black">Create new subject</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <?php 
    $id=$_SESSION['bid'];
    $result=select("*","subject","WHERE id=$id");
    $row=mysqli_num_rows($result);
    if($row>0) {?>
      <div class="col-sm-6 col-md-3">
        <a href="delsub.php" style="text-decoration: none;">
          <div class="card card-stats card-round card-dark bg-danger-gradient"style="border-bottom-left-radius:40px;border-top-right-radius:40px;"><!-- background-color: rgb(255, 187, 187); -->
            <div class="card-body bubble-shadow">
              <div class="row">
                <div class="col-5">
                  <div class="icon-big text-center">
                    <i class="
                    fas fa-times"></i>
                  </div>
                </div>
                <div class="col-7 col-stats">
                  <div class="numbers">
                    <p class="card-category" style="color: black">Delete Subject subject</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>  
    <?php }
    ?>   
    <?php 
    $id=$_SESSION['bid'];
    $result=select("*","subject","WHERE id=$id");
    while($row = mysqli_fetch_assoc($result)) {?>               
      <div class="col-sm-6 col-md-3">
        <form action="Classs.php" method="post">      
          <div class="card card-stats card-round"style=" border-bottom-left-radius:40px;border-top-right-radius:40px;">
            <button class="btn  btn-xs btn-info" type="submit" name="submit" style="border-bottom-left-radius:40px;border-top-right-radius:40px;"><!-- background-color:rgb(240, 197, 253);  -->
              <div class="card-body bubble-shadow">
                <div class="row">
                  <div class="col-3">
                    <div class="icon-big text-center">
                      <i class="flaticon-interface-6"></i>
                    </div>
                  </div>
                  <div class="col-9 col-stats"style="text-align: left">
                    <div >
                      <h3  style="text-transform: uppercase;"><?php echo $row['subjname'];
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
                      echo " (".$std." ".$div.")";?><input type="hidden" name="sub" value="<?php echo $sn ?>"><input type="hidden" name="subcode" value="<?php echo $sid ?>"></h4>
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