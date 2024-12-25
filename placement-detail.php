<?php
include("header.php");
include("Admin/connect.php");
$query="Select * from tbl_placement where p_id='1'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
  $image=$row['image'];
  $designation=$row['designation'];
  $description=$row['description'];
  $name=$row['name'];
  $company=$row['companyname'];
}
$query1="Select * from tbl_placement ORDER BY p_id DESC LIMIT 3";
$res1=mysqli_query($conn,$query1);
?>
<title>Placement Details</title>
 <style>
        .page-banner-area.bg-2{
            background-image:url("image/coll6.jpg");
        }
    </style>

<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Placement Cell Details</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Placement Cell Details</li>
</ul>
</div>
</div>
</div>


<div class="health-care-details pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="health-details">
<div class="top-content">
<img src="Admin/Placedgallery/<?php echo $image; ?>" alt="Image">
<h2>Placed Student</h2>
<b>Name of Student: </b> <?php echo $name;?><br>
<b>Name of Company: </b> <?php echo $company; ?><br>
<b>Designation in Company: </b> <?php echo $designation; ?><br>
<p><?php echo $description; ?> </p>
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
while($row1=mysqli_fetch_array($res1))
{
    ?>
<div class="tranding-box">
<div class="tranding-content">
<a href="placements-views.php?id=<?php echo $row1['p_id'];?>"><img src="Admin/Placedgallery/<?php echo $row1['image']; ?>" alt="Image"></a>
<h4><a href="placements-views.php?id=<?php echo $row1['p_id'];?>"><b><?php echo $row1['name'];?></b>
<br><br>
<b><?php echo $row1['companyname'];?></b>
</a></h4>
</div>
</div>
    <?php
}
?>
<a href="totalplacement.php">View all</a>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
?>