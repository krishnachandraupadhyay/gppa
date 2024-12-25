<?php
include("header.php");
include("Admin/connect.php");
$id=$_REQUEST['id'];
$query="select * from tbl_placement where p_id='$id'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
 $image=$row['image'];
    $name=$row['name'];
       $designation=$row['designation'];
    $description=$row['description'];
     $company_name=$row['companyname'];
}
?>
<title>Placement Views</title>
 <style>
        .page-banner-area.bg-1{
            background-image:url("image/coll8.jpg");
        }
    </style>
<div class="page-banner-area bg-1">
        <div class="container">
            <div class="page-banner-content">
                <h1>Placement Details View</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Placement Details View</li>
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
<b>Name of Student : </b> <?php echo $name;?><br>
<b>Name of Company : </b> <?php echo $company_name; ?><br>
<b>Designation in Company : </b> <?php echo $designation; ?><br>
<p align="text-align:justify;"><br><?php echo $description; ?> </p> 
</div>
</div>
</div>
</div>
</div>
</div>    
<?php
include("footer.php");
?>