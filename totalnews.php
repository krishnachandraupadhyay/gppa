<?php
include("header.php");
?>
<title>Total News</title>
<style>
    tr td,th{
        border:2px solid black;
    }
    .page-banner-area.bg-2
    {
      background-image:url("image/coll13.jpg");
    }
</style>
<div class="page-banner-area bg-2">
<div class="container">
<div class="page-banner-content">
<h1>Total News Details</h1>
<ul>
<li><a href="index.php">Home</a></li>
<li>Total News Details</li>
</ul>
</div>
</div>
</div>
 
<div class="container">
    <br>
    <h4 align="center">List of Placed Student</h4>
    <table align="center" class=" table table-striped">
        <tr>
            <th>S.no</th>
            <th>News</th>
            <th>News Type</th>
            <th>Views</th>
        </tr>
        <tr>
            <?php
            $query="select * from tbl_news";
            $res=mysqli_query($conn,$query);
            $a=1;
            while($row=mysqli_fetch_array($res))
            {
                ?>
              <td><?php echo $a;?></td>
              <td><?php echo $row['news'];?></td>
              <td><?php echo $row['newstype'];?></td>
              <td><a href="news-views.php?id=<?php echo $row['n_id'];?>">View</a></td>
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