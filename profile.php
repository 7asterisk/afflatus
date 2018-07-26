<!DOCTYPE html>
<html lang="en">
<head>
 <title>Afflatus</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php session_start(); ?>
<!-- navigation bar -->
<?php include  'navbar.php'; ?>
<br><br><br><br>

<?php $servername = "localhost";
$username = "root";
$password = "";
$db="afflatus";
$id=$_SESSION['id'];
// Create connection
$conn = new mysqli($servername, $username, $password,$db) or die("Connection failed: " . $conn->connect_error);
$user_login_quary="select email,gender,phone,location,user_type from user where id='$id'";
$select_result=mysqli_query($conn,$user_login_quary) or die(mysqli_error($conn));
$row=mysqli_fetch_array($select_result);
 ?>
<div class="container">
  <div class="row">

    <div class="col-md-3">

    </div>
  <div class=" col-md-6 ">
    <div class="card  text-center" >
      <i class="fa fa-user fa-4x"></i>
  <div class="card-block">
    <h4 class="card-title"><?php  echo $_SESSION['username']; ?></h4>
  </div>
  <ul class="list-group list-inverse list-group-flush">
    <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ocupation :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['user_type'];?></li>
    <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['gender'];?></li>
    <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email-id :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'];?></li>
    <li class="list-group-item">Phone Number :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['phone'];?></li>
    <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;city :&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['location'];?></li>
  </ul>
  <div class="card-block">
    <a href="profile_edit.php" class="card-link">Edit</a>
    <a href="index.php" class="card-link">Go back</a>
  </div>
    </div>
  </div>
  </div>
</div>

</body>
</html>
