<?php
include('header.php');
$conn=mysqli_connect("localhost","root","","gppa");
 $query="select * from tbl_events Where e_id='2'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
     $event=$row['event'];
     $program=$row['program'];
    $image=$row['image'];
    $description=$row['description'];
    $date=$row['date'];
    $month=$row['month'];  
}
?>
<style>
    .name{
        margin: 2px;
        color: brown;
        
    }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>placement Details</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>placement Details</li>
</ul>
</div>
</div>
</div>
<div class="placement-details-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="placement-details-left-content pr-20">
<div class="placement-image">
<img src="admin/eventgallry/<?php echo $image;?>" alt="Image" style="height:50vh;width:100%">
</div>
<div class="meetings">
<h2><?php echo $event;?></h2>
<p><?php echo $description;?></p>
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
<h3>Trending</h3>
<?php
$query1="select * from tbl_events ORDER BY e_id DESC LIMIT 4";
$result1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($result1))
{
?>
<div class="tranding-box">
<div class="tranding-content">
<a href="eventview.php?id=<?php echo $row1['e_id'];?>"><img src="admin/eventgallry/<?php echo $row1['image'];?>" alt="Image"></a>
<h4><a href="eventview.php?id=<?php echo $row1['e_id'];?>"><?php echo $row1['program'];?>
<p><?php echo $row1['event']?></p></a></h4>
</div>
</div>
<?php
}
?>

<a href="totalevent.php">view all</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>