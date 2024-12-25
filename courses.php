<?php
include("Admin/connect.php");
include("header.php");
?>
<title>Courses</title>
<style>
.page-banner-area.bg-1{
            background-image:url("image/cm3.jpg");
        }
</style>
<div class="page-banner-area bg-1">
<div class="container">
<div class="page-banner-content">
<h1>Our Courses</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Our Courses</li>
</ul>
</div>
</div>
</div>
<div class="courses-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">

<div class="courses-left-content">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="single-courses-card style4">
<div class="courses-img">
<a href="academics-details.php"><img src="image/computer.jpeg" alt="Image" style="height:30vh;width:100%;"></a>
</div>
<div class="courses-content">
<a href="academics-details.php"><h4>Computer Science and Engineering</h4></a>
<p style="text-align:justify;">The Department of Computer Science and Engineering at Government Polytechnic Phulpur Azamgarh offers Diploma       programme at Diploma level since 2021 to impart quality education and to produce innovative and 
globally competent technocrats having sound knowledge in the fields of Computer hardware and software.</p>
</div>
</div>  
</div>
<div class="col-lg-6 col-md-6">
<div class="single-courses-card style4">
<div class="courses-img">
<a href="academics-details.php"><img src="image/electrical.jpeg" alt="Image" style="height:30vh;width:100%;"></a>
</div>
<div class="courses-content">
<a href="academics-details.php"><h4>Electrical Engineering</h4></a>
<p style="text-align:justify;">The Electrical as well as Electronics becomes the need of day to day life which has made the life 
    simple & comfortable. Thus the Electrical & Electronics engineering branch has been inducted by BTEUP Lucknow to
    facilitate the society with budding engineer having knowledge of both the streams.</p>
</div>
</div>  
</div>
<div class="col-lg-6 col-md-6">
<div class="single-courses-card style4">
<div class="courses-img">
<a href="academics-details.php"><img src="image/mechanical.jpeg" alt="Image" style="height:30vh;width:100%;"></a>
</div>
<div class="courses-content">
<a href="academics-details.php"><h4>Mechanical Engineering</h4></a>
<p style="text-align:justify;">Department of Mechanical Engineering offers an undergraduate programme leading to a Diploma in Mechanical    Engineering. It is one of the oldest branches of engineering and is called an 'evergreen branch' because of the steady 
 demand of mechanical engineers from the industry. Mechanical Engineers are never left short of job opportunities which 
are another reason for such ever-growing demand of this branch.</p>
</div>
</div>  
</div>
<div class="col-lg-6 col-md-6">
<div class="single-courses-card style4">
<div class="courses-img">
<a href="academics-details.php"><img src="image/computer.jpeg" alt="Image" style="height:30vh;width:100%;"></a>
</div>
<div class="courses-content">
<a href="academics-details.php"><h4>Civil Engineering</h4></a>
<p style="text-align:justify;">Civil engineering is traditionally broken into a number of sub-disciplines. Civil engineering is the application of physical and scientific principles for solving the problems of society, and its history is intricately linked to advances in the understanding of physics and mathematics throughout history.</p>
</div>
</div>  
</div>
</div>
</div>
<h3 align="center">Latest Courses In the Library</h3><br>
<div class="courses-left-content">
<div class="row">
<?php
$query1="select * from tbl_course";
$res1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($res1))
{
    ?>
<div class="col-lg-6 col-md-6">
<div class="single-courses-card style4">
<div class="courses-img">
<a href="courses-details.php?id=<?php echo $row1['c_id']; ?>"><img src="Admin/courseimg/<?php echo $row1['image'];?>" alt="Image" style="height:40vh;width:100%;"></a>
</div>
<div class="courses-content">
<div class="admin-profile">
<img src="assets/images/courses/admin-1.jpg" alt="Image">
<p>With <a href="courses.php"><?php echo $row1['writier'];?></a></p>
</div>
<a href="courses.php"><h3><?php echo $row1['course'];?></h3></a>
<div class="bottom-content">
<ul class="d-flex justify-content-between">
<li>
<ul>
<li><i class="flaticon-graduation"></i>321</li>
<li><i class="flaticon-bubble-chat"></i>1.2k</li>
</ul>
</li>
</ul>
</div>
</div>
</div>  
</div>
<?php
}
?>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="courses-right-content pl-20">
<div class="serch-content">
<h3>Search</h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="Find Your Course">
<button type="submit" class="src-btn">
<i class="flaticon-search"></i>
</button>
</div>
</div>
<div class="location-type">
<h3>Location Type</h3>
<div class="form-check">
<input class="form-check-input " checked type="checkbox" value id="flexCheckDefault">
<label class="form-check-label" for="flexCheckDefault">
On Campus
</label>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include("footer.php");
?>