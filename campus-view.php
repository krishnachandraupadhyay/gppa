<?php
include("header.php");
include("Admin/connect.php");
$id=$_REQUEST['id'];
$query="Select * from tbl_campus where id='$id'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
  $program= $row['program_name'];
  $heading=$row['heading']; 
  $file=$row['file'];
  $des=$row['description'];
}
?>
 <title>Campus Life Views</title>
 <link rel=" icon" href="gpppalog.png" type="image/icon">
<style>
        .page-banner-area.bg-2{
            background-image:url("image/coll7.jpg");
        }
        .head{
          font-size:25px;
          color:blue;
        }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Campus Life Views</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Campus Life Views</li>
</ul>
</div>
</div>
</div>
<div class="events-details-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="events-details-left-content pr-20">
<span><h2><?php echo $heading; ?></h2></span>
<div class="events-image">
<img src="Admin/Campusimg/<?php echo $file; ?>" alt="Image" style="height:35vh;width:100%;">
</div>

<div class="campus-content">

<span class="head"><?php echo $heading; ?> - <?php echo $program; ?></span>
    <h4>About </h4>
<p style="text-align:justify'"><?php echo  $des; ?></p>
</div>
</div>


</div>
</div>
</div>
<?php
include("footer.php");
?>