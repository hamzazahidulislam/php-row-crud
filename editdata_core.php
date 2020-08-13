<?php 
require_once("connect.php");
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['submitButton'])){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email_addr= $_POST['email_addr'];
        $users_pwd= $_POST['users_pwd'];
        $id= $_POST['id'];
        if($fname==NULL || $lname==NULL || $email_addr==NULL || $users_pwd==NULL){
            header("location: index.php");
        }else{
    $insertQuery ="UPDATE my_users SET fname='$fname' ,lname='$lname' ,email_addr='$email_addr' , users_pwd='$users_pwd ' WHERE id=$id  " ;
    $runQuery =mysqli_query($connect,$insertQuery);
    if($runQuery==true){
        header("location: index.php?update");
    }
        }
    }

    }
