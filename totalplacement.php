<?php
include("header.php");
?>
<title>Total Placements</title>
<style>
    tr td,th{
        border:2px solid black;
    }
    .page-banner-area.bg-2{
        background-image:url("image/coll7.jpg");
    }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Total Placement List</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Total Placement List</li>
</ul>
</div>
</div>
</div>
<div class="container">
    <br>
    <h4 align="center">List of Placed Student</h4>
    <table align="center" class="table table-striped">
        <tr>
            <th>S.no</th>
            <th>Name of Student</th>
            <th>Name of Designation</th>
            <th>Company Name</th>
            <th>Views</th>
        </tr>
        <tr>
            <?php
            $query="select * from tbl_placement";
            $res=mysqli_query($conn,$query);
            $a=1;
            while($row=mysqli_fetch_array($res))
            {
                ?>
              <td><?php echo $a;?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['designation'];?></td>
              <td><?php echo $row['companyname'];?></td>
              <td><a href="placements-views.php?id=<?php echo $row['p_id'];?>">View</a></td>
                 </tr>
                <?php
                $a++;
            }
            ?>
    </table>
</div><br>

<?php
include("footer.php");
?>