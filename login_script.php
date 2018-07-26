3<?php
    if(isset($_POST['login'])&& isset($_POST['email']) && isset($_POST['pass']) )
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db="afflatus";

      // Create connection
      $conn = new mysqli($servername, $username, $password,$db) or die("Connection failed: " . $conn->connect_error);
      $password=mysqli_real_escape_string($conn,$_POST['pass']);
      $email=mysqli_real_escape_string($conn,$_POST['email']);
      $user_login_quary="select id,username,user_type from user where email='$email' and password='$password'";
      $select_result=mysqli_query($conn,$user_login_quary) or die(mysqli_error($conn));
      $row=mysqli_fetch_array($select_result);
      session_start();
      $_SESSION['id']=$row['id'];
      $_SESSION['username']=$row['username'];
      $_SESSION['user_type']=$row['user_type'];
       header('location:index.php');
    }
?>
