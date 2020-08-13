<?php
require_once("connect.php");
$getId =$_REQUEST["id"];
$dltquery="DELETE FROM my_users WHERE id=$getId";
$rundlQuery=mysqli_query($connect,$dltquery);
if($rundlQuery==true){
    header("location: index.php?deleted");
}
?>