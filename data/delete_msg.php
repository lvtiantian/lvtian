<?php
	$uname=$_REQUEST['uname'];
	$title=$_REQUEST['title'];
	$conn=mysqli_connect('127.0.0.1','root','','yc',3306);
	$sql="SET NAMES utf8";
	$result=mysqli_query($conn,$sql);
	$sql="SELECT * FROM yc_msgs WHERE user_name='$uname' AND msg_title='$title'";
	$result=mysqli_query($conn,$sql);
	if(count($result)==1){
    	$sql="DELETE from yc_msgs WHERE user_name='$uname' AND msg_title='$title'";
        $result=mysqli_query($conn,$sql);
        if($result){
        	echo 'succ';
        }else{
           	echo 'erro';
        }
    }
?>