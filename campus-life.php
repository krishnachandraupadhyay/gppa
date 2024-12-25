<?php
include("header.php");
include("Admin/connect.php");
$query="select * from tbl_campus";
$res=mysqli_query($conn,$query);
?>
 <title>Campus Life</title>
 <link rel=" icon" href="gpppalog.png" type="image/icon">
<style>
.page-banner-area.bg-2{
            background-image:url("image/cm6.jpg");
        }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Campus Life</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Campus Life</li>
</ul>
</div>
</div>
</div>


<div class="campus-life-area pt-100 pb-70">
<div class="container">
<div class="row justify-content-center">
    <?php
   while($row=mysqli_fetch_array($res))
   {
     ?>
<div class="col-lg-4 col-md-6">
<div class="single-campus-card">
<div class="img">
<a href="campus-view.php?id=<?php echo $row['id'];?>"><img src="Admin/Campusimg/<?php echo $row['file']; ?>" alt="Image" style="height:35vh;width:100%;"></a>
</div>
<div class="campus-content">
<span><a href="campus-view.php?id=<?php echo $row['id'];?>"><?php echo $row['heading']; ?></a></span>
<a href="campus-view.php?id=<?php echo $row['id'];?>"><h3><?php echo $row['program_name']; ?></h3></a>
</div>
</div>
</div>
<?php
  }
?>
</div>
</div>
</div>


<div class="student-life-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<h2>Student Life</h2>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis </p>
</div>
<div class="row">
<div class="col-lg-6">
<div class="student-life-card">
<img src="image/coll15.jpg" alt="Image">
<div class="tags">
<p>Soft Skill</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="student-life-card">
<img src="image/coll19.jpg" alt="Image">
<div class="tags">
<p>Social Activity for Vote</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="student-life-card">
<img src="image/coll20.jpg" alt="Image">
<div class="tags">
<p>Social Activity</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="student-life-card">
<img src="image/coll17.jpg" alt="Image">
<div class="tags">
<p>Barclays Life Skills</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
?>