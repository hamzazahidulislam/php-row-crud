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
    <?php require_once("connect.php");
   if(isset($_REQUEST["action"])){
       if(isset($_REQUEST["action"])=="true"){
           echo "<div class='alert alert-success '><strong>Successful</strong> Data Inserted</div>";
       }else{
           echo "<div class='alert alert-danger '><strong>Successful</strong> Data not Inserted</div>";
       }
   }elseif (isset($_REQUEST["deleted"])) {
  echo "<div class='alert alert-danger'><strong>DELETED!!</strong> Your Data Is Deleted.</div>";
   }elseif (isset($_REQUEST["update"])) {
  echo "<div class='alert alert-success'><strong>UPDATED</strong> Your Data Is Updated.</div>";
   }
    ?>
    
   <form action="savedata_core.php" method="POST" >
   <input type="text" name="fname" placeholder="First Name">
   <input type="text" name="lname" placeholder="Last Nmae">
   <input type="email" name="email_addr" placeholder="Email">
   <input type="password" name="users_pwd" placeholder="Password">
   <input type="submit" name="submitButton" value="Save Data">
   <br>
   <br>

<table border=1px;>
<tr>
    <td><b>Serial </br>Numbar</br></td>
    <td><b>DB ID</b></td>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b>User Email Address</b></td>
    <td><b>User Password</b></td>
    <td><b>Action</b></td>
 
</tr>
<?php
require_once("connect.php");
$num=1;
$ShowDataQuery="SELECT * FROM my_users";
$runDataQuery=mysqli_query($connect,$ShowDataQuery);
if($runDataQuery==true){
    while($mydata = mysqli_fetch_array($runDataQuery)){?>
 <tr>
     <td><?php echo $num ?></td>
     <td><?php echo $mydata["id"] ?></td>
     <td><?php echo $mydata["fname"] ?></td>
     <td><?php echo $mydata["lname"] ?></td>
     <td><?php echo $mydata["email_addr"] ?></td>
     <td><?php echo $mydata["users_pwd"] ?></td>
     <td>  <a href="editdata.php?edit_id=<?php echo $mydata["id"] ?>">Edit</a> | <a href="deletedata_core.php?id=<?php echo $mydata["id"] ?>">Delete</a>  </td> 
   
 </tr>

<?php $num++;
    }
}
 ?>


</table>

   </form>
</body>
</html>