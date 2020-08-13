<?php require_once ('connect.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_REQUEST['edit_id'])){
$id=$_REQUEST['edit_id'];
$select="SELECT * FROM my_users WHERE id=$id";
$runquery=mysqli_query($connect,$select);
if($runquery==true){
while($mydata =mysqli_fetch_array($runquery)){ 

?>
   <form action="editdata_core.php" method="POST" >
   <input type="text" name="fname"value="<?php echo $mydata['fname'] ?> "  ">
   <input type="text" name="lname" value="<?php echo $mydata['lname'] ?> "  >
   <input type="email" name="email_addr" value="<?php echo $mydata['email_addr'] ?> "  >
   <input type="password" name="users_pwd" value="<?php echo $mydata['users_pwd'] ?> "  >
   <input type="hidden" name="id" value="<?php echo $id ?> "  >
   <input type="submit" name="submitButton" value="Update Data">
<?php } 
}
} ?>
   </form>
</body>
</html>