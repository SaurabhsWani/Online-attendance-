<?php
include('header.php');
include('navbar.php');
?>
<div class="page-inner ">
  <div class="row">
  <div class="col-md-12">
      <div class="card bg-warning-gradient">
        <div class="card-header bubble-shadow">
          <h4 class="card-title" style="color: white">Delete Subjects</h4>
        </div>
      </div>
    </div>
    <?php
    if (isset($_SESSION['Success'])&&$_SESSION['Success']!='') {
      echo '
      <div class="col-md-12">
      <div class="card card-success">
      <div class="card-header">
      <h4 class="card-title">'.$_SESSION['Success'].'</h4>
      </div>
      </div>
      </div>';
      unset($_SESSION['Success']);
    }
    if (isset($_SESSION['Status'])&&$_SESSION['Status']!='') {
      echo '
      <div class="col-md-12">
      <div class="card card-danger">
      <div class="card-header">
      <h4 class="card-title">'.$_SESSION['Status'].'</h4>
      </div>
      </div>
      </div>';
      unset($_SESSION['Status']);
    }
    ?>
<?php 
    $id=$_SESSION['bid'];
    $sql = "SELECT * FROM subject WHERE id=$id";
    $result =mysqli_query($connection,$sql);
    if (mysqli_num_rows($result)>0) 
    {
      while($row = mysqli_fetch_assoc($result)) {?>               
      <div class="col-sm-6 col-md-3">
        <form action="del.php" method="post">      
          <div class="card card-stats card-round card-dark bg-dark-gradient" style=" ">
  <button class="btn  btn-sm btn-danger" type="submit" onclick="" name="submit" style="border-bottom-left-radius:40px;border-top-right-radius:40px;border-top-left-radius:40px;border-bottom-right-radius:40px;"><!-- background-color:rgb(192, 238, 205);  -->
            <div class="card-body bubble-shadow">
              <div class="row">
                <div class="col-2">
                  <div class="icon-big text-center">
                    <i class="flaticon-interface-6"></i>
                  </div>
                </div>
                <div class="col-10 col-stats" style="text-align: left">
                  <div class="numbers">
                    <h3 class="card-title" style="text-transform: uppercase;"><?php echo $row['subjname'];
                    $sn=$row['subjname'];
                     $sid=$row['sid'];?>                       
                     </h3>
                    <h4>Students 
                      <?php
                      $connection = mysqli_connect("localhost","root","","olattendacne");
    $query="SELECT prn FROM $row[subjname] ";
    $sql_run=mysqli_query($connection,$query);
    $row=mysqli_num_rows($sql_run);
                      echo $row;?>&emsp;<input type="hidden" name="sub" value="<?php echo $sn ?>"><input type="hidden" name="subcode" value="<?php echo $sid ?>"></h4>
                    </div>
                  </div>
                </div>
              </div>
              </button>
            </div>
          </form>
        </div> 
      <?php }
    }
    else
    {
  echo '<script>window.location="Subjects.php"</script>';
    }
      ?> 
  </div>
</div>
<?php
  include('footer.php');
  include('script.php');
  ?>