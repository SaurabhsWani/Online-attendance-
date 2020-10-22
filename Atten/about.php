<?php
include('header.php');
?>
<!-- ##### Courses Content Start ##### -->
<div class="single-course-content" style="padding-top: 30px;">
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
      p{
        color: black;
      }
    </style>
    <img class="wave" src="../admin/image/ind2.png"/>
    <div class="row">
     <div class="col-12 col-lg-8">
      <div class="course--content">

       <div class="saurabh-tabs-content">

        <?php
        if (isset($_SESSION['Success'])&& $_SESSION['Success']!='') {
          echo '<h2 class="bg-info text-white">'.$_SESSION['Success'].'</h2>';
          unset($_SESSION['Success']);
        }
        if (isset($_SESSION['Status'])&& $_SESSION['Status']!='') {
          echo '<h2 class="bg-danger text-white">'.$_SESSION['Status'].'</h2>';
          unset($_SESSION['Status']);
        }
        ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
         <li class="nav-item">
          <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Reviews</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent" >
       <!-- Tab Text -->
       <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
        <div class="saurabh-description">

         <!-- About Course -->
         <div class="about-course mb-30"  style="background-color: white">
          <h4>Idea Behind to Start Online Attendance</h4>
          <p>&emsp;&emsp;&emsp;&emsp;&emsp;The idea behind the online attendance came from the observation of the Teachers by Saurabh. Let's get understand with the short real story. There was a student, named as Saurabh who was an engineering student. he startrd observating the things happenig before the exam of their college, and sees that, in 1hr duration of lecture, teacher wastes time more than 10 min for the attendance. Also they use the seperate register for the attendacne. And then go to their pc or laptop to enter this attendance form paper to excel sheet. This works takes lots of time of the teacher for the attendacne. And then also needs a lots of time to make a Detain list of student by calculations.</p>
          <p>&emsp;&emsp;&emsp;&emsp;&emsp;So that student things that, why should we make something which reduceses teacher's time and efforts for the attendacne, to calculate detain list, to calculate percentage of present and absent students and then print it.</p>
          <p>&emsp;&emsp;&emsp;&emsp;&emsp;Then that Student created a website which provides all the facilities at one place to teachers for which they had to take lots of efforts. Also this reduces the cutting of trees </p>
        </div>

        <!-- All Instructors -->
        <div class="all-instructors mb-30" style="background-color: white;">
          <h4>Team of Online Attendance</h4>

          <div class="row">
           <!-- Single Instructor -->
           <div class="col-lg-6">
            <div class="single-instructor d-flex align-items-center mb-30">
             <div class="instructor-thumb">
              <img src="../admin/image/avatar5.png" alt="">
            </div>
            <div class="instructor-info">
              <h5>Saurabh S. Wani</h5>
              <span>Founder</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Tab Text -->
<div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
 <div class="saurabh-review">

  <!-- Ratings start-->
  <div class="saurabh-ratings d-flex align-items-center mb-30" style="background-color: white">
    <?php 
    $query="SELECT * FROM review INNER JOIN b_person ON review.id=b_person.bid";
    $sql=mysqli_query($connection,$query);
    $per=0;
    $fi=0;
    $fo=0;
    $th=0;
    $tw=0;
    $on=0;
    if (mysqli_num_rows($sql)>0) 
    {
      while ($row=mysqli_fetch_assoc($sql)) 
      {
        if ($row['display']=='yes') 
        {
          $x=$row['rate'];                                        
          $per+=1;
          if ($x==5) 
          {
            $fi+=1;
          }
          else if ($x==4) 
          {
            $fo+=1;
          }
          else if ($x==3) 
          {
            $th+=1;
          }
          else if ($x==2) 
          {
            $tw+=1;
          }
          else if ($x==1) 
          {
            $on+=1;
          }
        }
      }
    }
    $mic=(($fi*5)+($fo*4)+($th*3)+($tw*2)+($on*1))/$per;
    ?> 
    <div class="total-ratings text-center d-flex align-items-center justify-content-center">
      <div class="ratings-text" >
       <h2><?php echo $mic;?></h2>
       <div class="ratings--">
        <?php
        $exponant=intval($mic);
        $mntis=($mic*10)%10;
        if ($exponant>0) 
        {
          for ($i=1; $i <=$exponant ; $i++) 
          {
            echo "<i class='fa fa-star' aria-hidden='true'></i>"; 
          }
        }
        if ($exponant!=5) 
        {
          echo "<i class='fa fa-star-half-o' aria-hidden='true'></i>"; 
        }
        ?>
      </div>
      <span style="color: black">Rated 5 By <?php echo $fi;?> out of <?php echo $per;?> Ratings</span>
    </div>
  </div>

  <div class="rating-viewer"  style="background-color: white">
    <?php 
    $query="SELECT * FROM review INNER JOIN b_person ON review.id=b_person.bid";
    $sql=mysqli_query($connection,$query);
    $per=0;
    $fi=0;
    $fo=0;
    $th=0;
    $tw=0;
    $on=0;
    if (mysqli_num_rows($sql)>0) 
    {
      while ($row=mysqli_fetch_assoc($sql)) 
      {
        if ($row['display']=='yes') 
        {
          $x=$row['rate'];
          $per+=1;
          if ($x==5) 
          {
            $fi+=1;
          }
          else if ($x==4) 
          {
            $fo+=1;
          }
          else if ($x==3) 
          {
            $th+=1;
          }
          else if ($x==2) 
          {
            $tw+=1;
          }
          else if ($x==1) 
          {
            $on+=1;
          }
        }
      }
    }
    else
    {}
  if ($per==0) 
  {
    $per=1;
  }
  $fip=($fi/$per)*100;
  $fop=($fo/$per)*100;
  $thp=($th/$per)*100;
  $twp=($tw/$per)*100;
  $onp=($on/$per)*100;
  ?> 
  <!-- Rating -->
  <div class="single-rating mb-15 d-flex align-items-center">
   <span style="color: black">5 STARS</span>
   <div class="progress">
    <div class="progress-bar" role="progressbar" style="width:<?php echo$fip;?>%;background-color:green" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <span style="color: black"><?php echo $fip; ?>%</span>
</div>
<!-- Rating -->
<div class="single-rating mb-15 d-flex align-items-center">
 <span style="color: black">4 STARS</span>
 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $fop; ?>%;background-color:yellow" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span style="color: black"><?php echo $fop; ?>%</span>
</div>
<!-- Rating -->
<div class="single-rating mb-15 d-flex align-items-center">
 <span style="color: black">3 STARS</span>
 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $thp; ?>%;background-color:orange" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span style="color: black"><?php echo $thp; ?>%</span>
</div>
<!-- Rating -->
<div class="single-rating mb-15 d-flex align-items-center">
 <span style="color: black">2 STARS</span>
 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $twp; ?>%;background-color:blue" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span style="color: black"><?php echo $twp; ?>%</span>
</div>
<!-- Rating -->
<div class="single-rating mb-15 d-flex align-items-center">
 <span style="color: black">1 STARS</span>
 <div class="progress">
  <div class="progress-bar" role="progressbar" style="width:<?php echo $onp; ?>%;background-color:red" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span style="color: black"><?php echo $onp; ?>%</span>
</div>
</div>
</div>
<!-- end -->
<?php 
$query="SELECT * FROM review INNER JOIN b_person ON review.id=b_person.bid";
$sql=mysqli_query($connection,$query);
$sum=0;
$y=0;
if (mysqli_num_rows($sql)>0) 
{
 while ($row=mysqli_fetch_assoc($sql)) 
 {
  if ($row['display']=='yes') 
  {
   echo "<!-- Single Review -->
   <div class='single-review mb-30' style='background-color: white'>
   <div class='d-flex justify-content-between mb-30'>
   <!-- Review Admin -->
   <div class='review-admin d-flex'>
   <div class='thumb'>
   <img  src='../admin/image/".$row['image']."' alt='online Attendance teacher'>
   </div>
   <div class='text'>
   <h6>".$row['Name']."</h6>
   <h6>".$row['name']."</h6>
   <span>".$row['DATE']."</span>
   </div>
   </div>
   <div class='ratings'>";
   for ($i=0; $i < $row['rate']; $i++) 
   {
    echo "
    <i class='fa fa-star' aria-hidden='true'></i>";
  }
  echo"
  </div>
  </div>
  <p>".$row['review']."</p>
  </div>";
  $x=$row['rate'];
  $y++;
}
$sum=$sum+$x;
}

$rate=$sum/$y;
}
else
{
 echo "<div class='single-tutors-slides'>Temperorily Review Not Available</div>";
}
?> 
<form class="single-review mb-30" style="background-color: white" method="post" action="../user/revcon.php">
  <div class="form-group" >
    <span for="comment" style="color: black">Write about The Online Attendance</span>
    <textarea class="form-control" name="rev" id="comment"  rows="5" require=""></textarea>
  </div>
  <div class="form-group" >
    <span  style="color: black">Your Name</span>
    <input class="form-control" name="un" id="comment" require=""/>
  </div>
  <div class="form-group" >
    <span  style="color: black">Your Email</span>
    <input class="form-control" name="ueml" id="comment" require=""/>
  </div>
  <div class="form-group">
    <span class="form-label d-block" style="color: black">Rate Us</span>
    <div class="selectgroup selectgroup-success selectgroup-pills">
      <label class="selectgroup-item" >
        <input type="checkbox" name="icon-input" value="1" id="1" class="selectgroup-input" onclick="p();" style="width: 25px; height: 20px;" >                    
      </label>
      <label class="selectgroup-item">
        <input type="checkbox" name="icon-input" value="2" id="2" class="selectgroup-input" onclick="p2();"style="width: 25px; height: 20px;">                    
      </label>
      <label class="selectgroup-item">
        <input type="checkbox" name="icon-input" value="3" id="3" class="selectgroup-input" onclick="p3();"style="width: 25px; height: 20px;">                    
      </label>
      <label class="selectgroup-item">
        <input type="checkbox" name="icon-input" value="4" id="4" class="selectgroup-input" onclick="p4();"style="width: 25px; height: 20px;">                    
      </label>
      <label class="selectgroup-item">
        <input type="checkbox" name="icon-input" value="5" id="5" class="selectgroup-input" onclick="p5();"style="width: 25px; height: 20px;">                    
      </label>
    </div>
  </div>
  <input type="hidden"  name="rate" value="" id="r">
  <script type="text/javascript">
    function p3()
    {
      var e=document.getElementById("3");
      if (e.checked) 
      {
        // alert("All Students Are Present");
        for (let i = 1; i <=3; i++) 
        {
          document.getElementById(i).checked=true;
        }
        for (let i = 4; i <=5; i++) 
        {
          document.getElementById(i).checked=false;
        }
        document.getElementById("r").value=3;
      }                                
    }
    function p4()
    {
      var f=document.getElementById("4");
      if (f.checked) 
      {
        // alert("All Students Are Present");
        for (let i = 1; i <=4; i++) 
        {
          document.getElementById(i).checked=true;
        }
        document.getElementById(5).checked=false;
        document.getElementById("r").value=4;
      } 

    }

    function p5()

    {
      var g=document.getElementById("5");                           
      if (g.checked) 
      {
        // alert("All Students Are Present");
        for (let i = 1; i <=5; i++) 
        {
          document.getElementById(i).checked=true;
        }
        document.getElementById("r").value=5;
      } 
    }
    function p2()
    {
      var d=document.getElementById("2");
      if (d.checked) 
      {
        // alert("All Students Are Present");
        for (let i = 1; i <=2; i++) 
        {
          document.getElementById(i).checked=true;
        }
        for (let i = 3; i <=5; i++) 
        {
          document.getElementById(i).checked=false;
        }
        document.getElementById("r").value=2;
      } 

    }
    function p()
    {

      var c=document.getElementById("1");
      if (c.checked)
      {
        // alert("All Students Are Absent");
        for (let i = 1; i <=1; i++) 
        {
          document.getElementById(i).checked=true;
        }
        for (let i = 2; i <=5; i++) 
        {
          document.getElementById(i).checked=false;
        }
        document.getElementById("r").value=1;
      }
      else
      {
       // alert("All Students Are Absent");
       for (let i = 1; i <=5; i++) 
       {
        document.getElementById(i).checked=false;
      }
      document.getElementById("r").value=5;
    }

  }
</script>
<div class="form-group">
  <button  type="submit" name="btnu" class="btn btn-lg"> Submit Review</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-12 col-lg-4">
 <div class="course-sidebar">
  <!-- Buy Course -->
  <br><br><br>

  <!-- Widget -->
  <div class="sidebar-widget">
   <h4>Online Attendance Features</h4>
   <ul class="features-list">
    <li>
      <h6 style="color: black"><i class="fa fa-clock-o" aria-hidden="true"></i> Attendance data security</h6>
    </li>
    <li>
     <h6 style="color: black"><i class="fa fa-bell" aria-hidden="true"></i> Detaintion List for each subjects</h6>
   </li>
   <li>
     <h6 style="color: black"><i class="fa fa-file" aria-hidden="true"></i> Attendance for 2/more subjects</h6>
   </li>
   <li>
     <h6 style="color: black"><i class="fa fa-thumbs-up" aria-hidden="true"></i>% of Present & Absent Students</h6>
   </li>
 </ul>
</div>
</div>
</div>
</div>
</div>
</div><br>
<?php
include('footer.php');
?>