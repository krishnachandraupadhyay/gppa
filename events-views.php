<?php
include("header.php");
include("Admin/connect.php");
$id=$_REQUEST['id'];
$query="select * from tbl_events where e_id='$id'";
$res=mysqli_query($conn,$query);
?>
<title>Event View</title>
<style>
.page-banner-area.bg-1{
            background-image:url("image/KCS_3843.JPG");
        }
</style>
<div class="page-banner-area bg-1">
        <div class="container">
            <div class="page-banner-content">
                <h1>Events Details View</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Events Details View</li>
                </ul>
            </div>
        </div>
    </div>
<div class="events-details-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<?php
$query="select * from tbl_events where e_id='$id'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
  $event=$row['Event'];
  $prog=$row['program'];
  $descrip=$row['Description'];
  $imagename=$row['image'];
  $date=$row['date'];
  $month=$row['month'];
}
?>
<div class="events-details-left-content pr-20">
<div class="events-image">
<img src="Admin/Eventgallery/<?php echo $imagename;?>" alt="Image">
</div>
<div class="meetings">
<h2><?php echo $event; ?></h2>
<h4><?php echo  $prog; ?></h4>
<p><?php echo $descrip; ?></p>
</div>
</div>
  </div>
  <div class="col-lg-4">
<div class="list">
<ul>
<li><span>Date :</span><?php  echo $date;?><?php  echo $month;?></li>
<li><span>Times :</span>5.30am - 8.30pm</li>
<li><span>Program :</span><?php echo  $prog; ?></h4></li>
</ul>
<div class="next-workshop pl-20">
<div class="about-lecturer pl-20">
<div class="social-content">
<ul>
<li>
<a href="https://www.facebook.com" target="_blank"><i class="ri-facebook-fill"></i></a>
</li>
<li>
<a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a>
</li>
<li>
<a href="https://instagram.com/?lang=en" target="_blank"><i class="ri-instagram-line"></i></a>
</li>
<li>
<a href="https://linkedin.com/?lang=en" target="_blank"><i class="ri-linkedin-fill"></i></a>
</li>
</ul>
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