<?php
include("Admin/connect.php");
$query01="select Count(p_id) from tbl_placement";
$res01=mysqli_query($conn,$query01);
while($row01=mysqli_fetch_array($res01))
{
  $updpl=$row01['Count(p_id)'];
}
$query02="select Count(n_id) from tbl_news where newstype='PDF Type'";
$res02=mysqli_query($conn,$query02);
while($row02=mysqli_fetch_array($res02))
{
  $updnew=$row02['Count(n_id)'];
}
?>