<?php
 $db = mysqli_connect('localhost','root','','jm');
 $user_id = $_POST['user_id'];
 $password = $_POST['password'];
 $sql = "SELECT * FROM users WHERE user_id = '".$user_id."' AND password = '".$password."'";
 $result = mysqli_query($db,$sql);
 $count = mysqli_num_rows($result);


 if($count == 1){
 	