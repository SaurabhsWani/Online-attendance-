<?php
include('header.php');
include('navbar.php');
unset($_SESSION['sub']);
unset($_SESSION['subcode']);
?>
<div class="page-inner ">
  <div class="row ">   
    <div class="col-md-12">
      <?php
      if (isset($_SESSION['Success'])&&$_SESSION['Success']!='') {
        echo '
        <div class="col-md-12">
        <div class="card">
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
        <div class="card">
        <div class="card-header">
        <h4 class="card-title">'.$_SESSION['Status'].'</h4>
        </div>
        </div>
        </div>';
        unset($_SESSION['Status']);
      }
      ?>

      <div class="card">
        <div class="card-header">                  
          <?php 
          $bd=$_SESSION['bid'];
          $query="SELECT * FROM b_person WHERE bid=$bd";
          $sql=mysqli_query($connection,$query);
          foreach($sql as $row ) 
            {?>
              <h4 class="card-title">Teachers &emsp;("<?php echo $row['code']; ?>")</h4>
            <?php } ?>
          </div>
          <div class="card-body">
            <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
             <?php 
             $query="SELECT * FROM connxtion WHERE ntid=$bd";
             $sql=mysqli_query($connection,$query);
             foreach($sql as $row ) 
             {
              $x=$row['tid'];
            }
            $ucp= unserialize($x);
            $b = array();
            $y=count($ucp);
            for ($i=0; $i <$y ; $i++) 
            { 
              $b[$i]=$ucp[$i];
            }
            for ($i=0; $i <$y ; $i++) 
            { 

              $h="home".$i;
              if ($i==0) 
              {
                $o="active"; 
                $t="true";             
              }
              else
              {
                $o="";
                $t="false";
              }
              $hm=$b[$i];
              $query="SELECT * FROM b_person WHERE bid=$hm";
              $sqll=mysqli_query($connection,$query);
              foreach($sqll as $rowm ) 
              {
                ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo $o;?>" id="pills-<?php echo $h;?>-tab" data-toggle="pill" href="#pills-<?php echo $h;?>" role="tab" aria-controls="pills-<?php echo $h;?>" aria-selected="<?php echo $t;?>"><?php 
                  echo "<i class='fas fa-user'></i> ".$rowm['Name']; ?></a>
                </li>
                <?php
              }
            }
            ?>            
          </ul>
          <div class="tab-content mt-2 mb-2" id="pills-tabContent">
            Subjects from selected teacher
            <?php 
            $y=count($b);
            for ($z=0; $z <$y ; $z++) 
            { 
              $h="home".$z;
              if ($z==0) 
              {
                $o="show active";              
              }
              else
              {
                $o="";
              }
              $k=$b[$z];
              $sql = "SELECT * FROM subject WHERE id=$k";
              $result =mysqli_query($connection,$sql);
              ?>
              <div class="tab-pane fade <?php echo $o;?>" id="pills-<?php echo $h;?>" role="tabpanel" aria-labelledby="pills-<?php echo $h;?>-tab">
                <div class="row">
                  <?php
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                    ?> 
                    <div class="col-sm-6 col-md-3">
                      <div class="card-body">
                        <form action="Classs.php" method="post">
                          <button class="btn btn-block" type="submit" name="submit1" style="background-color:rgba(176, 241, 176, 0.986);">
                            <?php echo $row['subjname']."<br>";
                            $sn=$row['subjname'];
                            $sid=$row['sid'];
                            $std=$row['standard'];
                            $div=$row['divsion'];?>
                            <?php
                            $query="SELECT prn FROM $row[subjname] ";
                            $sql_run=mysqli_query($connection,$query);
                            $row=mysqli_num_rows($sql_run);
                            echo $row;
                            echo " <i class='fas fa-users'></i>";
                            echo " (".$std." ".$div.")";?><input type="hidden" name="sub" value="<?php echo $sn ?>"><input type="hidden" name="subcode" value="<?php echo $sid ?>">
                          </button>
                        </form>
                      </div>
                    </div><br>
                    <?php 
                  } ?>                                    
                </div>
              </div>
              <?php
            } ?>          
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
</div>
</div> 
<?php
include('script.php');
?>