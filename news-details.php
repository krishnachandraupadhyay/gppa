<?php
include("header.php");
include("admin/connect.php");
$query01="Select Count(id) from news_comm";
$res01=mysqli_query($conn,$query01);
while($row01=mysqli_fetch_array($res01))
{
   $count=$row01['Count(id)'];
}
?>
<title>News Details</title>
<style>
  .page-banner-area.bg-2
    {
      background-image:url("image/coll11.jpg");
    }
</style>
<div class="page-banner-area bg-2">
  <div class="container">
    <div class="page-banner-content">
      <h1>News Details </h1>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li>Pages</li>
        <li>News Details</li>
      </ul>
    </div>
  </div>
</div>
<div class="news-details-area pt-100 pb-70">
  <div class="container">
    <div class="row">
      <?php
    $query1="select * from tbl_news where n_id='1'";
    $res1=mysqli_query($conn,$query1);
    while($row1=mysqli_fetch_array($res1))
    {
        $image=$row1['file'];
        $news=$row1['news'];
        $newstype=$row1['newstype'];
        $desc=$row1['description'];
    }
    ?>
      <div class="col-lg-8">
        <div class="news-details">
          <div class="news-simple-card">
            <img src="Admin/news/<?php echo $image; ?>" alt="Image" style="height:40vh;">
            <div class="list">
              <ul>
                <li><i class="flaticon-user"></i>By <a href="news-details.php">Admin</a></li>
                <li><i class="flaticon-tag"></i>
                  <?php echo $news; ?>
                </li>
              </ul>
            </div>
            <p>
              <?php echo $desc; ?>
            </p>
          </div>
          <div class="tags-and-share">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6">
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="share">
                  <ul>
                    <li><span>Share :</span></li>
                    <li>
                      <a href="https://www.facebook.com" target="_blank"><i class="flaticon-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://instagram.com/?lang=en" target="_blank"><i class="flaticon-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://linkedin.com/?lang=en" target="_blank"><i class="flaticon-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="comments">
            <h3> comments(<?php echo $count; ?>)</h3>
            <?php
                $query4="Select * from news_comm ORDER BY id DESC LIMIT 5";
                $result=mysqli_query($conn,$query4);
                while($row=mysqli_fetch_array($result))
                {
                   ?>
                   <div class="single-comments-box">
                      <img src="assets/images/courses/review-2.png" alt="Images">
                        <h4><?php echo $row['name'];?></h4>
                           <div class="date">
                             <p><?php echo $row['dor'];?></p>
                            </div>
                            <div class="reply">
                              <a href="#">Reply</a>
                            </div>
                         <p><?php echo $row['comm'];?></p>
                      </div>
                   <?php
                   }
                    ?>
          </div>
          <div class="reply-area">
                            <div class="reply-form">
                                <h3>Leave a Reply</h3>
                                <p>Your email address will not be published.</p>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="comment" id="review" rows="4"
                                                    placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"  placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Save my name, email, and website in this browser for the next time I
                                            comment.
                                        </label>
                                    </div>
                                    <input type="submit" name="btn1" Value="Post a Comment" class="default-btn btn">
                                </form>
                            </div>
  </div>
  
<?php
 if(isset($_POST["btn1"])) 
 {    
  if(empty($_POST["comment"])){
    echo "<script>alert('comment Box is empty');window.location.href='news-details.php'</script>";
  }
  else{
    if(empty($_POST["name"])){
      echo "<script>alert('Name field is empty');window.location.href='news-details.php'</script>";
    }
    else{
         $comm=$_POST['comment'];
         $name=$_POST['name'];
         $email=$_POST['email'];
         $web=$_POST['website'];
         $query4="Select * from news_comm where email='$email' and comm='$comm'";
         $res4=mysqli_query($conn,$query4);
         if($row4=mysqli_fetch_array($res4))
         {
             echo "<script>alert('Your Messsage is Entered ');</script>";
         }
         else{
                $query3="insert into news_comm(comm,name,email,web,status,dor) 
                 Values('$comm','$name','$email','$web','N',now())";
                   mysqli_query($conn,$query3);
               echo "<script>alert('successfull');</script>";
         }
         
    }
  }
 }
 ?>
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
              <a href="news-views.php?id=<?php  echo $row3['n_id'];?>"><img src="Admin/news/<?php echo $row3['file'];?>"
                  alt="Image"></a>
              <h4><a href="news-views.php?id=<?php  echo $row3['n_id'];?>">
                  <?php echo $row3['news'];?>
                </a></h4>
              <p><i class="flaticon-tag"></i>
                <?php
$len=$row3['description'];
 echo substr($len,0,20); ?>
              </p>
            </div>
          </div>
          <?php
  }
?><a href="totalnews.php">View all</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>