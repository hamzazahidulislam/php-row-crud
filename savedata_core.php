<?php 
require_once("connect.php");
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email_addr= $_POST['email_addr'];
        $users_pwd= $_POST['users_pwd'];
        if($fname==NULL || $lname==NULL || $email_addr==NULL || $users_pwd==NULL){
            header("location: index.php");
        }else{
    $insertQuery ="INSERT INTO my_users (fname,lname,email_addr,users_pwd) VALUES ('$fname ', ' $lname', '$email_addr ', ' $users_pwd ')";
    $runQuery =mysqli_query($connect,$insertQuery);
    if($runQuery==true){
        header("location: index.php?action=true");
    }else{
        header("location: index.php?action=false");
    }
        }


    }

