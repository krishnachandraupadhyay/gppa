<?php
include("header.php");
include("Admin/connect.php");
$query="select * from tbl_placement";
$res=mysqli_query($conn,$query);
?>
<title>Placement Cell</title>
 <style>
        .page-banner-area.bg-2{
            background-image:url("image/coll5.jpg");
        }
        .companies{
            border:2px solid black;
        }
        .writing{
            border-top:2px solid black;
            border-radius:2px;
            background-color:gray;

        }
    </style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Placement Cell</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Placement Cell</li>
</ul>
</div>
</div>
</div>
<div class="companies">
        <div class="writing">
            <center><h3>20+ Placement Partner Tieup With Year</h3></center>
        </div>
    <div class="marquee">
        <marquee behavior="scroll" direction="left"><img src="image/1.png" alt=""><img src="image/2.png" alt=""><img src="image/3.png" alt=""><img src="image/4.png" alt=""><img src="image/5.png" alt=""><img src="image/1.png" alt=""><img src="image/2.png" alt=""><img src="image/3.png" alt=""><img src="image/4.png" alt=""><img src="image/5.png" alt=""></marquee>
    </div>
    </div>
<div class="health-care-area pt-100 pb-70">
<div class="container">
<div class="row justify-content-center">
    <?php
    while($row=mysqli_fetch_array($res))
    {
      ?>
      <div class="col-lg-4 col-md-6">
      <div class="single-health-care-card">
      <div class="img">
         <a href="placement-detail.php">
             <img src="Admin/Placedgallery/<?php echo $row['image']; ?>" alt="Image" style="height:200px;width:100%;">
         </a>
      </div>
      <div class="health-care-content">
     <a href="placement-detail.php"><h3><?php echo $row['name']; ?></h3></a>
       <?php
         $len= $row['description'];
         ?>
          <p style="text-align:justify;">
            <?php echo substr($len,0,300); ?> 
        </p>
<a href="placements-views.php?id=<?php echo $row['p_id'];?>" class="read-more-btn">Read More on Placement<i class="flaticon-next"></i></a>
</div>
</div>
</div>
    <?php
    }
    ?>
</div>
<div class="paginations">
<ul>
<li><a href="placement-detail.php"><i class="flaticon-back"></i></a></li>
<li><a href="placement-detail.php">01</a></li>
<li><a href="placement-detail.php">02</a></li>
<li><a href="placement-detail.php">03</a></li>
<li><a href="placement.php" class="active"><i class="flaticon-next"></i></a></li>
</ul>
</div>
</div>
</div>

<?php
include("footer.php");
?>