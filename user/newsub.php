<?php
include('header.php');
include('navbar.php');
?>
<div class="page-inner ">
  
  <div class="row ">      
   <div class="col-lg-12">
    <div class="card card-body "style="border-bottom-left-radius:60px;border-top-right-radius:60px;">
      <div class="card-header">
        <h4 class="card-title">Create New Subject</h4>
      </div>
      <form action="newsubcon.php" method="post" enctype="multipart/form-data"><h5><strong>
        <div class="form-group">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Subject</span>
            </div>
            <input type="text" name="sname" class="form-control" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1" required="">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Standard</span>
            </div>
            <input type="text" name="ss" class="form-control" placeholder="Standard" aria-label="Username" aria-describedby="basic-addon1" required="">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Division</span>
            </div>
            <input type="" name="sd" class="form-control" placeholder="Division" aria-label="Username" aria-describedby="basic-addon1" required="">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">PRN Start</span>
            </div>
            <input type="number" name="s" class="form-control" placeholder="PRN" aria-label="Username" aria-describedby="basic-addon1" required="">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">PRN Last</span>
            </div>
            <input type="number" name="e" class="form-control" placeholder="PRN" aria-label="Username" aria-describedby="basic-addon1" required="">
          </div>
        </div><span class="input-group-text" id="basic-addon1">Below Input Are For Extra PRN</span>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">PRN Start</span>
            </div>
            <input type="number" name="s1" class="form-control" placeholder="PRN" aria-label="Username" aria-describedby="basic-addon1" >
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">PRN Last</span>
            </div>
            <input type="number" name="e1" class="form-control" placeholder="PRN" aria-label="Username" aria-describedby="basic-addon1" >
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">PRN Start</span>
            </div>
            <input type="number" name="s2" class="form-control" placeholder="PRN" aria-label="Username" aria-describedby="basic-addon1" >
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-0">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">PRN Last</span>
            </div>
            <input type="number" name="e2" class="form-control" placeholder="PRN" aria-label="Username" aria-describedby="basic-addon1" >
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary text-white px-4 py-2 btn-lg" style="
        border-bottom-left-radius:40px;border-top-right-radius:40px;">Submit</button></form>
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