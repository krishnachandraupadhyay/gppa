<?php
include("header.php");
?>
<title>Total Events</title>
<style>
    tr td,th{
        border:2px solid black;
    }
    .page-banner-area.bg-2{
      background-image:url("image/coll9.jpg");
    }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Total Events Details</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Total Events Details</li>
</ul>
</div>
</div>
</div>
 
<div class="container">
   <div class="row">
    <h4 align="center">List of Events</h4>
   
            <?php
            $query="select * from tbl_events";
            $res=mysqli_query($conn,$query);
            $a=1;
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <div class="col-lg-3">
                  <div class="card" style="width: 18rem;">
                      <img src="admin/Eventgallery/<?php echo $row['image'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title"><?php $row['program'];?></h5>
                          <p class="card-text"><?php echo $row['Event'];?></p>
                          <a href="events-views.php?id=<?php echo $row['e_id'];?>" class="btn btn-primary">More Details</a>
                        </div>
                  </div>
                  </div>
                
                <?php
            }
            ?>
             </div>
 </div>
</div><br>

<?php
include("footer.php");
?>