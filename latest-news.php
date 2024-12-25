<?php
include("header.php");
include("updatesoon.php");
include("Admin/connect.php");
$query2="select * from tbl_news where newstype='Image'";
$res2=mysqli_query($conn,$query2);
while($row2=mysqli_fetch_array($res2))
{
   $des=$row2['description'];
    $news=$row2['news'];
   $file=$row2['file'];
}
?>
<title>Latest News</title>
<style>
   .latest-news-area.latest-news-left-content.latest-news-simple-card {
    background-image:url("admin/news/<?php echo $file; ?> "); 
    background-size:cover;
    background-position:center center;
    height:450px;width:100%;position:relative;
    margin-bottom:30px;
    }
    .page-banner-area.bg-2
    {
      background-image:url("image/coll10.jpg");
    }
</style>

<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Latest News</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Pages</li>
<li>Latest News</li>
</ul>
</div>
</div>
</div>

<div class="latest-news-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="latest-news-left-content pr-20">
<div class="latest-news-card-area">
<h3>Latest News</h3>
<div class="row">
    <?php
         if($updnew<1){
          echo "Updated Soon";
      }
      else{
      $query1="select * from tbl_news where newstype='PDF Type'";
      $res1=mysqli_query($conn,$query1);
      while($row1=mysqli_fetch_array($res1))
      {
    ?>
<div class="col-lg-6 col-md-6">
<div class="single-news-card">
<div class="news-content">
<div class="list">
<ul>
<li><i class="flaticon-user"></i>By <a href="news-view.php">Admin</a></li>
<li><i class="flaticon-tag"></i><?php echo $row1['news'];?></li>
</ul>
</div>
<a href="news-view.php"><h5><?php
$len=$row1['description'];
 echo substr($len,0,20); ?></h5></a>
 <a href="admin/news/<?php echo $row['image'];?>" style="height:40vh;width:100%;" alt="Image"> View </a>
<a href="news-views.php?id=<?php echo $row1['n_id']; ?>" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
</div>
</div>
</div>
<?php       
}
}
?>
</div>
</div>

<div class="paginations">
<ul>
<li><a href="news-view.php"><i class="flaticon-back"></i></a></li>
<li><a href="news-view.php">01</a></li>
<li><a href="news-view.php">02</a></li>
<li><a href="news-view.php">03</a></li>
<li><a href="latest-news.php" class="active"><i class="flaticon-next"></i></a></li>
</ul>
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
<div class="related-post-area">
<h3>Related Post</h3>
<?php
      $query3="select * from tbl_news where newstype='Image' ORDER BY n_id DESC LIMIT 3 ";
      $res3=mysqli_query($conn,$query3);
      while($row3=mysqli_fetch_array($res3))
      {
    ?>
<div class="related-post-box">
<div class="related-post-content">
<a href="latest-news.php"><img src="Admin/news/<?php echo $row3['file'];?>" alt="Image"></a>
<h4><a href="latest-news.php"><?php echo $row3['news'];?></a></h4>
<p><i class="flaticon-tag"></i><?php
$len=$row3['description'];
 echo substr($len,0,20); ?></p>
</div>
</div>
<?php
  }
?>
<a href="totalnews.php">View all</a>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
?>