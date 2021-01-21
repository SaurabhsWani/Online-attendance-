<?php
include('header.php');
include('navbar.php');
title('Friends');
unset($_SESSION['sub']);
unset($_SESSION['subcode']);
$id=$_SESSION['bid'];
?>
<div class="page-inner ">
  <div class="row ">        
    <div class="col-md-6">
      <div class="card ">
        <div class="card-header bubble-shadow card-dark bg-primary-gradient">                  
          <?php 
          $bd=$_SESSION['bid'];?>
          <h4 class="card-title">Here a Teachers you are connected with</h4>
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
          if($y>0)
          {
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
          }
          ?>            
        </ul>
        <!-- Subjects from selected teacher -->
        <?php 
        $y=count($b);
        if($y>0)
        {
          echo "<div class='tab-content mt-2 mb-2' id='pills-tabContent'>";
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
            $result=select("*","b_person","WHERE bid=$k");
            ?>
            <div class="tab-pane fade <?php echo $o;?>" id="pills-<?php echo $h;?>" role="tabpanel" aria-labelledby="pills-<?php echo $h;?>-tab">
              <div class="row">
                <?php
                while($row = mysqli_fetch_assoc($result)) 
                {
                  ?> 
                  <div class="card card-profile col-md-8 ml-auto mr-auto">
                    <div class="card-header" style="background-image: url('../admin/image/wall0.jpg')">
                      <div class="profile-picture1">
                        <?php 
                        if ($row['status']=='on') 
                        {
                          $status="avatar-online";
                        }
                        else
                        {
                          $status="avatar-offline";
                        }
                        ?>
                        <div class="avatar avatar-xl <?php echo $status; ?>">
                          <?php  echo "<img  class='avatar-img rounded-circle' src='../admin/image/".$row['image']."'> ";?>
                        </div>
                      </div>
                    </div>
                    <div class="card-body1">
                      <div class="user-profile text-center">
                        <div class="names">
                          <?php echo $row['Name'];?>                    
                        </div>
                        <div class="job"><?php echo $row['category'];?></div>
                        <div class="desc"><?php echo $row['cs'];?></div> 
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row user-stats text-center">
                        <div class="col">
                          <div class="number"><?php echo $row['code'];?></div>
                          <div class="title">Code</div>
                        </div>
                        <div class="col">
                          <?php 
                          $sql_runn=select("*","subject","WHERE id=$k");
                          $subj=mysqli_num_rows($sql_runn);
                          ?>
                          <div class="number"><?php echo $subj;?></div>
                          <div class="title">Subjects</div>
                        </div>
                        <div class="col">
                          <?php 
                          $sql_runn=select("*","connxtion","WHERE ntid=$k");
                          $xx=$yy=0;
                          foreach($sql_runn as $roww ) 
                          {
                            $xx=$roww['tid'];
                          }
                          if($xx!='0')
                          {
                            $ucp= unserialize($xx);
                            $yy=count($ucp);
                          }
                          ?>
                          <div class="number"><?php echo $yy;?></div>
                          <div class="title">Connections</div>
                        </div>
                        <div class="col">
                          <div class="number">                            
                            <form action='req.php' method='POST'>                 
                              <input type='hidden' name='q' value='xyz'/> 
                              <input type='hidden' name='acptrid' value='<?php echo $k;?>'>
                              <input type='hidden' name='sendrid' value='<?php echo $id;?>'>
                              <button class='btn btn-icon btn-round btn-xs' type='submit' name='unf' title="UnFriend User">
                                <i class='fas fa-user-minus text-danger'></i>
                              </button>
                            </form>
                          </div>
                          <div class="title">Unfriend</div>
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <?php 
                } ?>                                    
              </div>
            </div>
          <?php } echo "</div>";} ?> 
        </div>
      </div>  
    </div> 
    <div class="col-md-6">
      <div class="card bg-info-gradient">
        <div class="card-header bubble-shadow">
          <h4 class="card-title" style="color: white">Requests</h4>
        </div>
        <?php
        $aid=$_SESSION['bid'];
        $resultt=select("*","recieve","WHERE bid=$aid");
        foreach($resultt as $roww ) 
        {
          $arr=$roww['rec'];
          $ucp= unserialize($arr);
          $b = array();
          $y=count($ucp);
        }
        for ($i=0; $i <$y ; $i++) 
        { 
          $b[$i]=$ucp[$i];
        }
        if($y>0)
        {
          echo "<br><ul>";

          for ($i=0; $i <$y ; $i++) 
          { 
            $hm=$b[$i];
            $sqll=select("*","b_person","WHERE bid=$hm");
            foreach($sqll as $rowm ) 
            {

              echo "<form action='req.php' method='POST' style='padding:0px;'><h5 style='color: white;padding:0px;'><img class=' rounded-circle' width=50px height=50px src='../admin/image/".$rowm['image']."'> ".$rowm['Name'];
              ?>                               
              <input type='hidden' name='q' value='xyz'/> 
              <input type='hidden' name='acptrid' value='<?php echo $hm;?>'>
              <input type='hidden' name='sendrid' value='<?php echo $aid;?>'>     
              <button class='btn btn-icon btn-round btn-xs' type='submit' name='accpt' title="Accept Request">
                <i class='fas fa-user-plus text-info'></i>
              </button>
              <button class='btn btn-icon btn-round btn-xs' type='submit' name='rej' title="Reject Request">
                <i class='fas fa-user-times text-danger'></i>
              </button>

              <?php 
              echo "</h5></form>";
            }
          }
          echo "</ul>";
        }
        ?>
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