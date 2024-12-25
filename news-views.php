<?php
include("header.php");
include("Admin/connect.php");
$id=$_REQUEST['id'];
$query="select * from tbl_events where e_id='$id'";
$res=mysqli_query($conn,$query);
?>
<title>News Views</title>
<style>
  .page-banner-area.bg-1
    {
      background-image:url("image/coll12.jpg");
    }
</style>
<div class="page-banner-area bg-1">
        <div class="container">
            <div class="page-banner-content">
                <h1>News Details View</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>News Details View</li>
                </ul>
            </div>
        </div>
    </div>
<div class="events-details-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<?php
$query="select * from tbl_news where n_id='$id'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
  $news=$row['news'];
  $newstype=$row['newstype'];
  $descrip=$row['description'];
  $file=$row['file'];
}
?>
<?php  
    if($newstype=='PDF Type')
    {
       $query1="Select * from tbl_news where newstype='PDF Type' and n_id='$id'";
       $res1=mysqli_query($conn,$query1);
       ?>
<div class="events-details-left-content pr-20">
<div class="events-image">
 <?php
       while($row1=mysqli_fetch_array($res1))
       {
        ?>
        <img src="image/pdf.png" alt="Image">
          </div>
       <div class="meetings">
       <h2><?php echo $row1['news']; ?></h2>
       <h4><?php echo $row1['description']; ?></h4>
       <a href="Admin/news/<?php echo $row1['file'];?>">View</a>
       </div>
        <?php
        }?>

</div>
  </div>
  <?php
     }
     else
     {
        ?>
        <div class="events-details-left-content pr-20">
       <div class="events-image">
    <?php
       $query2="Select * from tbl_news where newstype='Image' and n_id='$id'";
       $res2=mysqli_query($conn,$query2);
       while($row2=mysqli_fetch_array($res2))
       {
        ?>
        <img src="Admin/news/<?php echo $row2['file']; ?>" alt="Image">
          </div>
       <div class="meetings">
       <h2><?php echo $row2['news']; ?></h2>
       <h4><?php echo $row2['description']; ?></h4>
       </div>
        <?php
        }?>

</div>
  </div>
  <?php
     }
  ?>
  <div class="col-lg-4">
<div class="list">
<div class="next-workshop pl-20">
<div class="about-lecturer pl-20">
<div class="social-content">
  
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