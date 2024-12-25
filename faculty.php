<?php
include("header.php");
include("Admin/connect.php");
$query="select * from tbl_staff where designation='Principal'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
   $staff=$row['staff'];
   $designation=$row['designation'];
   $branch=$row['branch'];
   $file=$row['file'];
}
$query1="select * from tbl_staff where designation='Vice-Principal'";
$res1=mysqli_query($conn,$query1);
while($row1=mysqli_fetch_array($res1))
{
   $staff1=$row1['staff'];
   $designation1=$row1['designation'];
   $branch1=$row1['branch'];
   $file1=$row1['file'];
}
$query2="select * from tbl_staff where designation='HOD'";
$res2=mysqli_query($conn,$query2);
$query3="select * from tbl_staff where designation='Lecturer' and branch='Computer Science and Engineering'";
$res3=mysqli_query($conn,$query3);
$query4="select * from tbl_staff where designation='Lecturer' and branch='Electrical Engineering'";
$res4=mysqli_query($conn,$query4);
$query5="select * from tbl_staff where designation='Lecturer' and branch='Mechanical Engineering'";
$res5=mysqli_query($conn,$query5);
?>
<title>Faculty & Staff</title>
<style>
   .page-banner-area.bg-2{
  background-image:url("image/coll14.jpg");
   }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Staff & Faculty</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Pages</li>
<li>Staff & Faculty</li>
</ul>
</div>
</div>
</div>
<!-----body------->
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h4 align="center">Principal</h4>
         <div class="card" style="width: 18rem;">
        <img src="Admin/staff/<?php echo $file;?>" class="card-img-top" alt="<?php echo $staff;?>" style="height:30vh;width:100%;">
        <div class="card-body">
           <h4 class="card-title" align="center"><?php echo $staff;?></h4>
           <h6 class="card-text" align="center"><?php echo $designation;?></h6>
           <h6 class="card-text" align="center"><?php echo $branch;?></h6>
       </div>
     </div>
        </div>
        <div class="col-lg-6">
        <h4 align="center">Vice-Principal</h4>
        <div class="card" style="width: 18rem;">
  <img src="Admin/staff/<?php echo $file1;?>" class="card-img-top" style="height:30vh;width:100%;">
  <div class="card-body">
    <h4 class="card-title" align="center"><?php echo $staff1;?></h4>
    <h6 class="card-text" align="center"><?php echo $designation1;?></h6>
    <h6 class="card-text" align="center"><?php echo $branch1;?></h6>
  </div>
</div>
        </div>
        <h4 align="center">H.O.D </h4>
        <?php
        while($row2=mysqli_fetch_array($res2))
        {
        ?>
        <div class="col-lg-4">
         <div class="card" style="width: 18rem;">
        <img src="Admin/staff/<?php echo $row2['file'];?>" class="card-img-top" alt="<?php echo $row2['staff'];?>" style="height:30vh;width:100%;">
        <div class="card-body">
           <h4 class="card-title" align="center"><?php echo $row2['staff'];?></h4>
           <h6 class="card-text" align="center"><?php echo $row2['designation'];?></h6>
           <h6 class="card-text" align="center"><?php echo $row2['branch'];?></h6>
       </div>
     </div>
        </div>
        <?php
        }
        ?>
         <h4 align="center">Computer Science and Engineering</h4>
        <?php
        while($row3=mysqli_fetch_array($res3))
        {
        ?>
        <div class="col-lg-4">
         <div class="card" style="width: 18rem;">
        <img src="Admin/staff/<?php echo $row3['file'];?>" class="card-img-top" alt="<?php echo $row3['staff'];?>" style="height:30vh;width:100%;">
        <div class="card-body">
           <h4 class="card-title" align="center"><?php echo $row3['staff'];?></h4>
           <h6 class="card-text" align="center"><?php echo $row3['designation'];?></h6>
           <h6 class="card-text" align="center"><?php echo $row3['branch'];?></h6>
       </div>
     </div>
        </div>
        <?php
        }
        ?>
        <h4 align="center">Electrical Engineering</h4>
        <?php
        while($row4=mysqli_fetch_array($res4))
        {
        ?>
        <div class="col-lg-4">
         <div class="card" style="width: 18rem;">
        <img src="Admin/staff/<?php echo $row4['file'];?>" class="card-img-top" alt="<?php echo $row4['staff'];?>" style="height:30vh;width:100%;">
        <div class="card-body">
           <h4 class="card-title" align="center"><?php echo $row4['staff'];?></h4>
           <h6 class="card-text" align="center"><?php echo $row4['designation'];?></h6>
           <h6 class="card-text" align="center"><?php echo $row4['branch'];?></h6>
       </div>
     </div>
        </div>
        <?php
        }
        ?>
        <h4 align="center">Mechanical Engineering</h4>
        <?php
        while($row5=mysqli_fetch_array($res5))
        {
        ?>
        <div class="col-lg-4">
         <div class="card" style="width: 18rem;">
        <img src="Admin/staff/<?php echo $row5['file'];?>" class="card-img-top" alt="<?php echo $row5['staff'];?>" style="height:30vh;width:100%;">
        <div class="card-body">
           <h4 class="card-title" align="center"><?php echo $row5['staff'];?></h4>
           <h6 class="card-text" align="center"><?php echo $row5['designation'];?></h6>
           <h6 class="card-text" align="center"><?php echo $row5['branch'];?></h6>
       </div>
     </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<!---footer----->
<?php
include("footer.php");
?>