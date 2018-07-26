<?php
  if(isset($_POST['pass1'])&&isset($_POST['pass2'])){
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($pass1===$pass2)
    // store the detal of user in database
      {
         $servername = "localhost";
         $username = "root";
         $password = "";
         $db="afflatus";

         // Create connection
         $conn = new mysqli($servername, $username, $password,$db) or die("Connection failed: " . $conn->connect_error);
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['pass1']);
        $gender=mysqli_real_escape_string($conn,$_POST['gender']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $pno=mysqli_real_escape_string($conn,$_POST['pno']);
        $date="20".date("y-m-d h:i:s");
        $user_reg_quary="insert into user(username,password,gender,email,phone,reg_date) values('$username','$password','$gender','$email','$pno','$date')";
        $user_reg_submit=mysqli_query($conn,$user_reg_quary) or die(mysqli_error($conn));
        $_SESSION['username']=$username;
        $_SESSION['id']=mysqli_insert_id($conn);
         header('refresh:0');
      }
    else {
      echo "<div class='alert alert-danger' role='alert'>password din't match </div>";
    }
  }

?>
