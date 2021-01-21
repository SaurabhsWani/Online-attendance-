<?php
include('header.php');
include('navbar.php');
title("Friend's Subject");
unset($_SESSION['sub']);
unset($_SESSION['subcode']);
?>
<div class="page-inner ">
  <?php
  message();
  ?>
  <div class="row ">   
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">                  
          <?php 
          $bd=$_SESSION['bid'];
          $sql=select("*","b_person","WHERE bid=$bd");
          foreach($sql as $row ) 
            {?>
              <h4 class="card-title">Teachers &emsp;("<?php echo $row['code']; ?>")</h4>
            <?php } ?>
          </div>
          <div class="card-body">
            <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
             <?php 
             $sql=select("*","connxtion","WHERE ntid=$bd");
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
              $sqll=select("*","b_person","WHERE bid=$hm");
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
              $result=select("*","subject","WHERE id=$k");
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
                            $sql_run=select("prn",$row['subjname'],"");
                            $row=mysqli_num_rows($sql_run);
                            echo $row;
                            echo " <i class='fas fa-users'></i>";
                            echo " (".$std." ".$div.")";?><input type="hidden" name="sub" value="<?php echo $sn ?>"><input type="hidden" name="subcode" value="<?php echo $sid ?>">
                          </button>
                        </form>
                      </div>
                    </div><br>
                    <?php 
                  }
                  if (empty(mysqli_num_rows($result))) {
                    ?>
                    <div class="col-sm-6 col-md-3">
                      <div class="card-body">
                        <button class="btn btn-block btn-danger" type="submit" name="submit1">
                          <?php 
                          echo " <i class='far fa-frown-open'></i><br>";
                          echo "No Subjects";?>
                        </button>
                      </div>
                    </div>
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