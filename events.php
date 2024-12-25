<?php
include("header.php");
include("Admin/connect.php");
?>
<title>Events</title>
<style>
.page-banner-area.bg-2{
            background-image:url("image/KCS_3858.JPG");
        }
</style>
 

<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Events</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Pages</li>
<li>Events</li>
</ul>
</div>
</div>
</div>


<div class="events-area pt-100 pb-70">
<div class="container">
<div class="row justify-content-center">
    <?php
      $query="select * from tbl_events";
      $res=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($res))
      {
        ?>
        <div class="col-lg-4 col-md-6">
        <div class="single-events-card style-4">
        <div class="events-image">
        <a href="events-views.php?id=<?php echo $row['e_id'];?>"><img src="Admin/Eventgallery/<?php echo $row['image'];?>" alt="Image"></a>
        <div class="date">
        <span><?php echo $row['date'];?></span>
        <p><?php echo $row['month'];?></p>
        </div>
        </div>
        <div class="events-content">
        <div class="admin">
        <p><a href="events-views.php?id=<?php echo $row['e_id'];?>"><i class="flaticon-student-with-graduation-cap"></i><?php  echo $row['Event']; ?></a></p>
        </div>
        <a href="events-views.php?id=<?php echo $row['e_id'];?>"><h3><?php  echo $row['program']; ?></h3></a>
        </div>
        </div>
        </div>
        <?php
      }
    ?>
</div>
</div>
</div>
<div class="paginations">
<ul>
<li><a href="events-details.php"><i class="flaticon-back"></i></a></li>
<li><a href="events-details.php">01</a></li>
<li><a href="events-details.php">02</a></li>
<li><a href="events-details.php">03</a></li>
<li><a href="events.php" class="active"><i class="flaticon-next"></i></a></li>
</ul>
</div>
</div>
</div>


<?php
include("footer.php");
?>