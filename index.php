<?php
include("header.php");
include("Updatesoon.php");
include("Admin/connect.php");
$query="Select * from tbl_events";
$res=mysqli_query($conn,$query);
$query01="Select * from tbl_news where newstype ='link'";
$res01=mysqli_query($conn,$query01);
?>
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<title>Government Polytechnic Phoolpur</title>
<style>
    .slider-item.banner-bg-1{background-image:url("image/coll4.jpg")}
    .slider-item.banner-bg-2{background-image:url("image/phoolpur.jpg")}
    .slider-item.banner-bg-3{background-image:url("image/cm6.jpg")} 
     .slider-item.banner-bg-4{background-image:url("image/scroll.jpg")}
    .slider-item.banner-bg-5{background-image:url("image/phoolpu_header.jpeg")} 
    .academic
    {
        height: 40vh;
    }
    .notice{
        min-height:400px;
    }
    .n1{
      
        min-height:400px;
    }
    .n2{
      
        min-height:400px;
    }
</style>

<div class="banner-area pb-100">
<div class="container-fluid">
<div class="hero-slider owl-carousel owl-theme" data-slider-id="1">
<div class="slider-item banner-bg-1">
<div class="slider-content">
</div>
</div>
<div class="slider-item banner-bg-2">
<div class="slider-content">
</div>
</div>
<div class="slider-item banner-bg-3">
<div class="slider-content">
    
</div>
</div>
<div class="slider-item banner-bg-4">
<div class="slider-content">
</div>
</div>
<div class="slider-item banner-bg-5">
<div class="slider-content">
</div>
</div>
</div>
<div class="owl-thumbs" data-slider-id="1">
<button class="owl-thumb-item">
<img src="image/coll4.jpg" alt="Images">
</button>
<button class="owl-thumb-item">
<img src="image/phoolpur.jpg" alt="Images">
</button>
 <button class="owl-thumb-item">
<img src="image/cm6.jpg" alt="Images">
</button>
<button class="owl-thumb-item">
<img src="image/scroll.jpg" alt="Images">
</button>
<button class="owl-thumb-item">
<img src="image/phoolpu_header.jpeg" alt="Images">
</button> 
</div>
</div>
</div>

<div class="notice  ">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3 bg-f4f6f9 n1">
            <br>
            <h5 align="center">Notice</h5>
        <marquee behavior="scroll" direction="up" scrollamount="3">
            <?php
           while($row01=mysqli_fetch_array($res01))
           {
            ?>
            <a href="<?php echo $row01['link']; ?>"><?php echo $row01['news']; ?></a>
            <hr>
          <?php
           }
          ?>
        </marquee>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7 n2 row">
            <br>
            <h5 align="center">Video</h5>
            <div class="col-sm-6">
            <div class="admission-image">
<img src="image/coll4.jpg" alt="Image">
<div class="icon">
<a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=0HpVTfBaGNs"><i class="ri-play-fill"></i></a>
</div>
</div>
</div>
            <div class="col-sm-6">
                <div class="admission-image" >
<img src="image/coll4.jpg" alt="Image">
<div class="icon">
<a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=0HpVTfBaGNs"><i class="ri-play-fill"></i></a>
</div>
</div>
</div>
<a href="">View More</a>
        </div>
    </div>
</div>
</div>
<hr>

<div class="academic-area pt-90 pb-60">
<div class="container">
<div class="section-title">
<h2>Academics</h2>
<p>These Academics Courses are available in this college.</p>
</div>
<div class="row justify-content-center">
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
<div class="single-academics-card">
<div class="academic-top-content">
<i class="flaticon-college-graduation"></i>
<a href="academics-details.php"><h3 >Computer Science and Engineering</h3></a>
</div>
         <p class="academic">The Department of Computer Science and Engineering at Government Polytechnic Phulpur Azamgarh 
            offers Diploma programme at Diploma level since 2021 to impart quality education and to produce innovative. and 
            globally competent technocrats having sound knowledge in the fields of Computer hardware and software.</p>
<a href="academics-details.php" class="read-more-btn">Computer Science and Engineering<i class="flaticon-next"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400" data-aos-once="true">
<div class="single-academics-card">
<div class="academic-top-content">
<i class="flaticon-graduation"></i>
<a href="academics-details.php"><h3>Mechanical Engineering</h3></a>
</div>
         <p class="academic">Department of Mechanical Engineering offers an undergraduate programme leading to a Diploma in Mechanical 
            Engineering. It is one of the oldest branches of engineering and is called an 'evergreen branch' because of the steady 
            demand of mechanical engineers from the industry.</p>
<a href="academics-details.php" class="read-more-btn">Mechanical Engineering<i class="flaticon-next"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600" data-aos-once="true">
<div class="single-academics-card">
<div class="academic-top-content">
<i class="flaticon-writing-tool"></i>
<a href="academics-details.php"><h3>Elecctrical Engineering</h3></a>
</div>
<p class="academic">The Electrical as well as Electronics becomes the need of day to day life which has made the life 
    simple & comfortable. Thus the Electrical & Electronics engineering branch has been inducted by BTEUP Lucknow to
    facilitate the society with budding engineer having knowledge of both the streams.</p>
<a href="academics-details.php" class="read-more-btn">Elecctrical Engineering<i class="flaticon-next"></i></a>
</div>
</div>
</div>
</div>
</div>


<div class="campus-information-area pb-60">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="1300" data-aos-once="true">
<div class="campus-content pr-20">
<div class="campus-title">
<h2>Importance of Technical Education</h2>
<p>There are engineers, but mid-level requirement of the industry is not properly met. There is a dearth of skilled labour. 
   The quality of existing Government polytechnics is also not very good. It will be a win-win situation for students and
   the industry. The objective of the PPP Government model is to bring the Private Sector Partners (PSP) onboard to operate 
   and maintain the identified institutes focusing on imparting quality trainings with state-of-the-art infrastructure.The
   Government Mission’s basic objective is to create a trained Skilled Manpower of atleast 100 million persons by 2030. </p>
</div>
<div class="list">
<div class="row">
<div class="col-lg-6 col-md-6">
<ul>
<li>
<i class="ri-check-fill"></i>
<p>Diploma Programs</p>
</li>
<li>
<i class="ri-check-fill"></i>
<p>Placement Programs</p>
</li>
<li>
<i class="ri-check-fill"></i>
<p>Soft Skill program</p>
</li>
<li>
<i class="ri-check-fill"></i>
<p>Hard Skill Program</p>
</li>
</ul>
</div>
<div class="col-lg-6 col-md-6">
<ul>
<li>
<i class="ri-check-fill"></i>
<p>Undergraduate</p>
</li>
<li>
<i class="ri-check-fill"></i>
<p>International Hubs</p>
</li>
<li>
<i class="ri-check-fill"></i>
<p>Doctoral Degrees</p>
</li>
<li>
<i class="ri-check-fill"></i>
<p>Global Students</p>
</li>
</ul>
</div>
</div>
</div>

<a href="academics-details.php" class="default-btn btn">Start your application<i class="flaticon-next"></i></a>
</div>
</div>
<div class="col-lg-6" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1300" data-aos-once="true">
<div class="campus-image pl-20">
<img src="image/phoolpur.jpg" alt="Image" style="height:70vh;width:100%;">
</div>
</div>
</div>
</div>
</div>

<div class="campus-life-area ptb-100">
<div class="container">
<div class="section-title">
<h2>Campus Life</h2>
</div>
<div class="row justify-content-center">
    <?php
    $query3="Select * from tbl_campus ORDER BY id DESC LIMIT 3";
    $res3=mysqli_query($conn,$query3);
    while($row3=mysqli_fetch_array($res3))
    {
    ?>
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
<div class="single-campus-card">
<div class="img">
<a href="campus-view.php?id=<?php echo $row3['id'];?>"><img src="Admin/Campusimg/<?php echo $row3['file'];?>" alt="Image"style="height:40vh;width:100%;"></a>
</div>
<div class="campus-content">
<span><a href="campus-view.php?id=<?php echo $row3['id'];?>"><?php echo $row3['program_name'];?></a></span>
<a href="campus-view.php?id=<?php echo $row3['id'];?>"><h3><?php echo $row3['heading'];?></h3></a>
</div>
</div>
</div>
<?php
    }
?>
</div>
<div class="more-campus text-center">
<p>Select From Hundreds of Options. <a href="campus-life.php" class="read-more-btn active">More on Campus Life <i class="flaticon-next"></i></a></p>
</div>
</div>
</div>


<div class="admisssion-area bg-f4f6f9 ptb-100">
<div class="container">
<div class="admission-content">
<div class="section-title">
<h2>Diploma Admission</h2>
</div>
<div class="admission-image">
<img src="image/phoolpu_header.jpeg" alt="Image">
<div class="icon">
<a class="popup-youtube play-btn" href="https://www.youtube.com/watch?v=0HpVTfBaGNs"><i class="ri-play-fill"></i></a>
</div>
</div>
<div class="query text-center">
<p>If You Have Any Query or Facing any Problem Please Contact Us Via Email</p>
<a href="academics-details.php" class="default-btn btn">More on admission<i class="flaticon-next"></i></a>
</div>
</div>
</div>
</div>


<div class="health-care-area ptb-100">
<div class="container">
<div class="section-title">
<h2>Placement Cell</h2>
</div>
<div class="row justify-content-center">
    <?php
    if($updpl<1){
        echo "Updated Soon";
    }
    else{
   
    $query1="Select * from tbl_placement ORDER BY p_id DESC LIMIT 3";
    $res1=mysqli_query($conn,$query1);
    while($row1=mysqli_fetch_array($res1))
    {
    ?>
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
<div class="single-health-care-card">
<div class="img">
<a href="placement-detail.php"><img src="Admin/Placedgallery/<?php echo $row1['image']; ?>" alt="Image" style="height:25vh;width:100%;"></a>
</div>
<div class="health-care-content">
<a href="placement-detail.php"><h3><?php echo $row1['name']; ?></h3></a>
<p><?php  $len=$row1['description'];
echo substr($len,0,200);
?></p>
<a href="placement-detail.php" class="read-more-btn">Read More on Placement<i class="flaticon-next"></i></a>
</div>
</div>
</div>
<?php        
}
     
}
?>
</div>
</div>
</div>


<div class="events-area bg-f4f6f9 ptb-100">
<div class="container">
<div class="section-title">
<h2>Events</h2>
</div>
<div class="row justify-content-center">
    <?php
    while($row=mysqli_fetch_array($res)){
        ?>
    
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">  
<div class="single-events-card">
<div class="events-image">
<a href="events-details.php"><img src="Admin/Eventgallery/<?php echo $row['image'];?>" alt="Image"></a>
<div class="date">
<span><?php echo $row['date']; ?></span>
<p><?php echo $row['month']; ?></p>
</div>
</div>
    <div class="events-content">
<div class="admin">
<p><a href="events-details.php"><i class="flaticon-student-with-graduation-cap"></i><?php echo $row['Event']; ?></a></p>
</div>
<a href="events-details.php"><h3><?php echo $row['program']; ?></h3></a>
</div>
</div>
    </div>
        <?php
    }
    ?>
</div>
</div>
<div class="more-health-care text-center">
<p>Select From Hundreds of Options. <a href="totalevents.php" class="read-more-btn active">More on Events<i class="flaticon-next"></i></a></p>
</div>
</div>
</div>


<div class="lates-news-area ptb-100">
<div class="container">
<div class="section-title">
<h2>Latest News</h2>
</div>
<div class="row justify-content-center">
    <?php
    if($updnew<1){
        echo "Updated Soon";
    }
    else{
      $query4="select * from tbl_news where newstype='Image' ORDER BY n_id DESC LIMIT 3";
      $res4=mysqli_query($conn,$query4);
      while($row4=mysqli_fetch_array($res4))
      {
      ?>
<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
<div class="single-news-card">
<div class="news-img">
<a href="news-views.php?id=<?php echo $row4['n_id'];?>"><img src="Admin/news/<?php echo $row4['file']; ?>" alt="Image"></a>
</div>
<div class="news-content">
<div class="list">
<ul>
<li><i class="flaticon-user"></i>By <a href="news-views.php?id=<?php echo $row4['n_id'];?>">Admin</a></li>
<li><i class="flaticon-tag"></i><?php echo $row4['news']; ?></li>
</ul>
</div>
<a href="news-views.php?id=<?php echo $row4['n_id'];?>" class="read-more-btn">Read More<i class="flaticon-next"></i></a>
</div>
</div>
</div>
<?php
      }
    }
      ?>
</div>
<div class="more-latest-news text-center">
<p>Select From Hundreds of Options.<a href="totalnews.php" class="read-more-btn active"> More on News<i class="flaticon-next"></i></a></p>
</div>
</div>
</div>

<?php
include("footer.php");
?>