<?php
include('header.php');
include('navbar.php');
title('Search');
include('acc.php');
?>
<!-- modal -->
<?php 
if (!isset($_GET['GO!'])) 
{
  $_GET['q']="";
}
$q=$_GET['q'];
$sn=$_SESSION['bid'];
$result=select("*","b_person","WHERE Name LIKE '%$q%' AND bid != '$sn' ");
while($row = mysqli_fetch_assoc($result)) 
{ 
  $mid=$row['bid'];
  ?>
  <div class="modal fade" id="<?php echo $mid;?>" tabmain="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Faculty profile</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="card card-profile">
            <div class="card-header" style="background-image: url('../admin/image/wall0.jpg')">
              <div class="profile-picture1">
                <?php 
                $status="";
                if ($row['status']=='on') 
                {
                  $status="avatar-online";
                }
                else
                {
                  $status="avatar-offline";
                }
                if (empty($row['image'])) 
                {
                  $words = explode(" ", strtoupper($row['Name']));
                  $acronym = "";
                  foreach ($words as $w) {
                    $acronym .= $w[0];
                  }
                  echo "<div class='avatar avatar-lg ".$status."'>
                  <span class='avatar-title rounded-circle border border-white '>".$acronym."</span>               
                  </div>";
                }
                else{
                  echo "<div class='avatar avatar-lg ".$status."'>
                  <img  class='avatar-img rounded-circle' src='../admin/image/".$row['image']."'> 
                  </div>";
                }               
                ?>
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
                  $sql_runn=select("*","subject","WHERE id=$mid");
                  $subj=mysqli_num_rows($sql_runn);
                  ?>
                  <div class="number"><?php echo $subj;?></div>
                  <div class="title">Subjects</div>
                </div>
                <div class="col">
                  <?php 
                  $sql_runn=select("*","connxtion","WHERE ntid=$mid");
                  $x=$y=0;
                  foreach($sql_runn as $row ) 
                  {
                    $x=$row['tid'];
                  }
                  if($x!='0')
                  {
                    $ucp= unserialize($x);
                    $y=count($ucp);
                  }
                  ?>
                  <div class="number"><?php echo $y;?></div>
                  <div class="title">Connections</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!-- modal end -->
<script type="text/javascript">
  function active()
  {
    var sb=document.getElementByID('sb');
    if(sb.value == 'Search...')
    {
      sb.value = '';
      sb.placeholder="Search...";
    }
  }
  function inactive()
  {
    var sb=document.getElementByID('sb');
    if(sb.value == '')
    {
      sb.value = 'Search...';
      sb.placeholder="";
    }
  }
</script>
<div class="page-inner" style="padding-top: 0px;" >  
  <!-- searchbbox -->
  <div class="row ">    
    <div class="col-md-12 ml-auto mr-auto">
      <form action="search.php" method="GET" id="sf">
        <div class="form-group">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
              <i class="fas fa-search"></i> </span>
              <input type="text" class="form-control" name="q" id="sb" value="" placeholder="Search..." autocomplete="off" onmousedown="active();" onblur="inactive();" >            
              <div class="input-group-prepend">
               <input type="submit" value="Search!" name="GO!" />
             </div>
           </div>
         </div>
       </form> 
     </div>
   </div>
   <!-- searchbbox end-->
   <!-- result starts -->
   <div class="row">
    <div class="col-md-6 ml-auto mr-auto">
      <div class="card card-round">        
            <?php 
            if ($_GET['q'] == 'Search...') 
            {
             header('Location:search.php');
           }
           if ($_GET['q'] != '') 
           {            
            if (!isset($_GET['q'])) 
            {
             echo " ";}
           else
           {       
           echo "<div class='card-body'>
          <div class='card-title fw-mediumbold'>Results</div>
          <div class='card-list'>";  
            $q=$_GET['q'];
            $sn=$_SESSION['bid'];
            $result=select("*","b_person","Where bid != '$sn' AND (Name LIKE '%$q%' OR category LIKE '%$q%' OR cs LIKE '%$q%')");
            $reow=mysqli_num_rows($result);
            echo '<div>'.$reow.' results For "'.$q.'"</div>';
            while($row = mysqli_fetch_assoc($result)) 
            {
              $mid=$row['bid'];
              ?>              
              <div class="item-list">
                <?php 
                $status="";
                if ($row['status']=='on') 
                {
                  $status="avatar-online";
                }
                else
                {
                  $status="avatar-offline";
                }
                if (empty($row['image'])) 
                {
                  $words = explode(" ", strtoupper($row['Name']));
                  $acronym = "";
                  foreach ($words as $w) {
                    $acronym .= $w[0];
                  }
                  echo "<div class='avatar ".$status."'>
                  <span class='avatar-title rounded-circle border border-white '>".$acronym."</span>               
                  </div>";
                }
                else{
                  echo "<div class='avatar ".$status."'>
                  <img  class='avatar-img rounded-circle' src='../admin/image/".$row['image']."'> 
                  </div>";
                }                
                ?>
                <div class="info-user ml-3">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#<?php echo $mid;?>">
                    <div class="username" style="font-size: 15px;">
                      <?php echo $row['Name'];?>  
                    </div>
                    <div class="status"><?php echo"(".$row['category'].") From ".$row['cs'];?>
                  </div>                      
                </a>
              </div>
              <?php
              if(is_friend($sn,$mid))
              {
                ?> 
                <button class='btn btn-icon btn-round btn-xs' title="Friends">
                  <i class='fas fa-user-friends text-success'></i>
                </button>&emsp;
                <form action='req.php' method='POST'>                 
                  <input type='hidden' name='q' value='<?php echo $q;?>'/> 
                  <input type='hidden' name='acptrid' value='<?php echo $mid;?>'>
                  <input type='hidden' name='sendrid' value='<?php echo $sn;?>'>    
                  <button class='btn btn-icon btn-round btn-xs' type='submit' name='unf' title="UnFriend User">
                    <i class='fas fa-user-minus text-danger'></i>
                  </button>
                </form>      
                <?php
              }
              elseif (is_req_send($sn,$mid)) 
              {
                ?>
                <form action='req.php' method='POST'>                 
                  <input type='hidden' name='q' value='<?php echo $q;?>'/> 
                  <input type='hidden' name='acptrid' value='<?php echo $mid;?>'>
                  <input type='hidden' name='sendrid' value='<?php echo $sn;?>'>      
                  <button class='btn btn-icon btn-round btn-xs' type='submit' name='can' title="Requested">
                    <i class='fas fa-user-plus text-success'></i>
                  </button>
                </form>      
                <?php
              }
              elseif (is_req_came($sn,$mid)) 
              {
               ?> 
               <form action='req.php' method='POST'>                 
                <input type='hidden' name='q' value='<?php echo $q;?>'/> 
                <input type='hidden' name='acptrid' value='<?php echo $mid;?>'>
                <input type='hidden' name='sendrid' value='<?php echo $sn;?>'>     
                <button class='btn btn-icon btn-round btn-xs' type='submit' name='accpt' title="Accept Request">
                  <i class='fas fa-user-plus text-info'></i>
                </button>
                <button class='btn btn-icon btn-round btn-xs' type='submit' name='rej' title="Reject Request">
                  <i class='fas fa-user-times text-danger'></i>
                </button>
              </form>     
              <?php                 
            }
            else
            {
              ?>
              <form action='req.php' method='POST'>                 
                <input type='hidden' name='q' value='<?php echo $q;?>'/> 
                <input type='hidden' name='acptrid' value='<?php echo $mid;?>'>
                <input type='hidden' name='sendrid' value='<?php echo $sn;?>'>         
                <button class='btn btn-icon btn-round btn-xs' type='submit' name='add' title="Send Request">
                  <i class='fas fa-user-plus'></i>
                </button>
              </form>    
            <?php } ?>
          </div>      
        <?php  } 
        echo "</div></div>";
      }
    }
    ?>
</div>
</div>
</div> 
<!-- result starts -->
</div> 
</div>
</div> 
</div>
<?php
include('script.php');
?>