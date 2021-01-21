<?php
include('header.php');
?>

<div class="page-inner mt--5">

  <div class="container">
    <style type="text/css">
      .wave{
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
      }
    </style>
    <img class="wave" src="../admin/image/lr.png" alt="Online attendance"/>
    <div class="row justify-content-center">

     <div class="col-xl-6 col-lg-6 col-md-6">

      <div class="card o-hidden border-0 shadow-lg my-5 " style="border-bottom-right-radius:40px;
      border-bottom-left-radius:40px;">
      <div class="card-body p-1">

        <!-- Nested Row within Card Body -->
        <div class="row">
         <div class="col-lg-12">
          <div class="p-2">
            <a href="../Atten/index.php"><button type="submit" name="submit" value="submit" class="btn btn- btn-user btn-block"style="background-color:rgb(181, 230, 29)">
              <span class="btn-label">
                <img src="../admin/image/Online-Attendance-n2.png" alt="">
              HOME </span>
            </button></a><br>
            <div class="text-center">
              <h2 class="h2 text-gray-1000 mb-2">Register Here!</h2>
            </div>
            <form action="Reg_buy_connection.php" method="POST" enctype="multipart/form-data"><h5><strong>
              <div class="form-group">
                <label for="f_name" >Full Name:</label>
                <input type="Name" placeholder="Full Name" class="form-control" id="f_name" name="First_Name" required="">
              </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" id="formGroupDefaultSelect" name="cat" required="">
                  <option value="Principal">Principal</option>
                  <option value="HOD">HOD</option>
                  <option value="Class Teacher">Class Teacher</option>
                  <option value="Teacher">Teacher</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input  type="Email" class="form-control" placeholder="Enter Email Id" name="Email" id="Email" required="">
              </div>              
              <div class="form-group">
                <label for="CS">College/School Name:</label>
                <input  type="text" class="form-control" placeholder="Enter College/School" name="CS" id="CS" required="">
              </div>
             <!--  <div class="form-group">
                <label>Upload Profile Photo</label>
                <input type="file" name="adimg" id="adimg" class="form-control"  required="">
              </div> -->
              <div class="form-group">
                <label for="password">Password:</label>
                <div class="input-group">
                  <input type="password" placeholder="Enter Password" class="form-control" name="Password" id="myInput1" required="">
                  <div class="input-group-append">
                   <span  class="btn btn-dark text-white px-4 py-2" onclick="myFunction1()">
                    <i class="icon-eye"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group" >
              <label for="password2" >Confirm Password:</label>
              <div class="input-group">
                <input placeholder="Re-Enter Password" type="password" class="form-control" name="password2" id="myInput" required="" data-toggle="password">
                <div class="input-group-append">
                 <span  class="btn btn-dark text-white px-4 py-2" onclick="myFunction()">
                  <i class="icon-eye"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Select Plan</label>
            <select class="form-control" id="formGroupDefaultSelect" name="pln" required="">
              <option value="Free">Free</option>
              <option value="0.4">$0.4/Month</option>
              <option value="4">$4/Year</option>
            </select>
          </div>
          <br><button type="submit" name="submit" value="submit" class="btn btn-primary  btn-user btn-block ">
           <span class="btn-label">
            <i class="fa fa-check"></i>
          </span>Submit 
        </button>
      </strong></h5></form><form><div class="text-center"><a href="ulogin.php">
        <span class="btn btn-success">
         <span class="btn-label" >
          <i class="fas fa-sign-in-alt"></i>
        </span> Login Existing account
      </span>
    </a></div>									
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
<?php
include('footer.php');
include('script.php');
?>
<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function myFunction1() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>