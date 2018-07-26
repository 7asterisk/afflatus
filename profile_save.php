<?php

  session_start();

    if(isset($_POST['save'])&& isset($_POST['email']) )
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db="afflatus";

      // Create connection
      $conn = new mysqli($servername, $username, $password,$db) or die("Connection failed: " . $conn->connect_error);
      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $phone=mysqli_real_escape_string($conn,$_POST['pno']);
      $location=mysqli_real_escape_string($conn,$_POST['location']);
      $username=mysqli_real_escape_string($conn,$_POST['username']);
      $gender=mysqli_real_escape_string($conn,$_POST['gender']);
      $user_type=mysqli_real_escape_string($conn,$_POST['user_type']);
      $id=$_SESSION['id'];
      $user_login_quary="UPDATE user SET username='$username',gender='$gender',phone='$phone',user_type='$user_type',location='$location' WHERE id='$id'";
      $select_result=mysqli_query($conn,$user_login_quary) or die(mysqli_error($conn));
       header('location:profile.php');
    }
?>
