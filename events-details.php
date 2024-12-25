<?php
include("Admin/connect.php");
include("header.php");
?>
<title>Events Detail</title>
<style>
.page-banner-area.bg-2{
            background-image:url("image/KCS_3842.JPG");
        }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Events Details</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Events Details</li>
</ul>
</div>
</div>
</div>
<div class="events-details-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<?php
$query="select * from tbl_events where e_id='1'";
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
<div class="serch-content">
<h3>Search</h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="Find Your Course">
<button type="submit" class="src-btn">
<i class="flaticon-search"></i>
</button>
</div>
</div>
<div class="tranding">
<h3>Latest</h3>
<?php
$query1="Select * from tbl_events ORDER BY e_id DESC LIMIT 3";
$res1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($res1))
{
    ?>
<div class="tranding-box">
<div class="tranding-content">
<a href="events-views.php?id=<?php echo $row1['e_id'];?>"><img src="Admin/Eventgallery/<?php echo $row1['image']; ?>" alt="Image"></a>
<h4><a href="events-views.php?id=<?php echo $row1['e_id'];?>"><b><?php echo $row1['program'];?></b>
<br><br>
<b><?php echo $row1['Event'];?></b>
</a></h4>
</div>
</div>
    <?php
}
?><a href="totalevents.php">View all</a>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
?>