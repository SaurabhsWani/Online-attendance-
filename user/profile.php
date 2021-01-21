<?php
include('header.php');
include('navbar.php');
title('Profile');
?>
<div class="page-inner mt--5">
  <br><br>
  <?php
  message();
  $id=$_SESSION['bid'];
  $sql=select("*","b_person","WHERE bid=$id");
  foreach($sql as $row ) {
    ?>
    <div class="row">
      <div class="col-md-9 ml-auto mr-auto">
        <div class="card card-round">
          <div class="card-body">
            <div class="card-title fw-mediumbold">Edit Profile</div>
            <div class="card-list">
              <form action="usrupd.php"  method="post" enctype="multipart/form-data">
                <div class="item-list">
                  <?php
                  if (empty($row['image'])) 
                  {
                    $words = explode(" ", strtoupper($row['Name']));
                    $acronym = "";
                    foreach ($words as $w) {
                      $acronym .= $w[0];
                    }
                    echo "<div class='avatar avatar-xl'>
                    <span class='avatar-title rounded-circle border border-white avatar-online'>".$acronym."</span>               
                    </div>";
                  }
                  else{
                    echo "<div class='avatar avatar-xl'>
                    <div id='img_div'><img src='../admin/image/".$row['image']."' width=100px;height=100px; class='avatar-img rounded'></div>
                    </div>";                    
                  }               
                  ?>   
                  <div class="info-user ml-3">
                    <div class="form-group">            
                      <div class="username"> 
                        <input type="file" name="adimg" style="display:none;" id="adimg" class="form-control" value="ssw" required="">
                        <label for="adimg">Click to upload image</label>
                      </div>        
                    </div>
                  </div>
                  &emsp;<button type="submit" name="updp" class="btn btn-icon btn-secondary btn-round btn-xs" title="Update Photo">
                    <i class="fa fa-check"></i>
                  </button>
                </form>
                <form action="usrupd.php"  method="post" enctype="multipart/form-data">
                  <?php
                  if (!empty($row['image']))
                  {
                    echo "&emsp;<button type='submit' name='delp' class='btn btn-icon btn-danger btn-round btn-xs' title='Remove Photo'>
                    <i class='fas fa-times'></i>
                    </button>";
                  }
                  ?>
                </div>
              </form>
              <form action="usrupd.php"  method="post">
                <div class="item-list">                          
                  <div class="avatar" title="Name">                
                    <div class="input-group-append">
                     <span  class="btn btn-info text-white px-4 py-2">
                      <i class="fas fa-user"></i>
                    </span>
                  </div>               
                </div>
                <div class="info-user ml-3">
                  <div class="form-group">
                    <div class="username">
                      <input type="text" name="First_Name" value="<?php echo $row['Name'];?>" class="form-control" required="">
                    </div>
                    <div class="status">Full name</div>
                  </div>
                </div>
                &emsp;<button class="btn btn-icon btn-secondary btn-round btn-xs" type="submit" name="updfn" title="Update Name">
                  <i class="fa fa-check"></i>
                </button>
              </div>
            </form>
            <form action="usrupd.php"  method="post" enctype="multipart/form-data">
              <div class="item-list">                           
                <div class="avatar" title="Email">                
                  <div class="input-group-append">
                   <span  class="btn btn-info text-white px-4 py-2">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>               
              </div>
              <div class="info-user ml-3">
                <div class="form-group">
                  <div class="username">
                    <input type="email" name="Email" value="<?php echo $row['Email']?>" class="form-control" required="">
                  </div>
                  <div class="status">Email</div>
                </div>
              </div>
              &emsp;<button class="btn btn-icon btn-secondary btn-round btn-xs" type="submit" 
              name="updeml" title="Update Email">
              <i class="fa fa-check"></i>
            </button>
          </div>
        </form>
        <form action="usrupd.php"  method="post" enctype="multipart/form-data">
          <div class="item-list">            
            <div class="avatar" title="Password">
              <div class="input-group-append">
               <span  class="btn btn-info text-white px-4 py-2" onclick="myFunction()">
                <i class="icon-eye"></i>
              </span>
            </div>
          </div>
          <div class="info-user ml-3">
            <div class="form-group">
              <div class="username"><input type="password" name="Password" id="ip" value="<?php echo $row['Password']?>" class="form-control" required="">
              </div>
              <div class="status">Password</div>
            </div>
          </div>
          &emsp;<button class="btn btn-icon btn-secondary btn-round btn-xs" type="submit"
          name="updpd" title="Update password">
          <i class="fa fa-check"></i>
        </button>
      </div>
    </form>
    <form action="del.php"  method="post" enctype="multipart/form-data">        
      <div class="item-list">           
        <div class="avatar" title="Delete Account">
          <div class="input-group-append">
           <span  class="btn btn-info text-white px-4 py-2" onclick="myFunction1()">
            <i class="icon-eye"></i>
          </span>
        </div>
      </div>
      <div class="info-user ml-3">
        <div class="form-group">
          <div class="username"><input type="password" name="Pddel" id="ip1"  class="form-control" required="">
          </div>
          <div class="status">Delete My Account (Enter The Password)</div>
        </div>
      </div>
      &emsp;<button class="btn btn-icon btn-danger btn-round btn-xs" type="submit" 
      name="delac" title="Delete Account">
      <i class="fa fa-check"></i>
    </button>
  </div>
</form> 
</div>
</div>
</div>
</div>
</div>
<?php } ?>
<script>
  function myFunction() {
    var x = document.getElementById("ip");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function myFunction1() {
    var x = document.getElementById("ip1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
</div>
</div>
</div>
</div>
<?php
include('script.php');
?>