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
  <form action="profile_save.php" method="post">
    <!--user name-->
      <div class="input-group">
        <span class="input-group-addon">&nbsp;Full name:</i></span>
        <input type="username" id="username" class="form-control" name="username"  required value="<?php echo $_SESSION['username']?>"/>
      </div>
        <!--password input -->
        <div class="input-group">
          <span class="input-group-addon">Ocupation:</span>
          <select class="custom-select" name="user_type">
            <option value="student">Student</option>
            <option value="researcher">Researcher</option>
            <option value="company">Company</option>
          </select>
        </div>

        <div class="input-group">
          <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;city:</span>
          <input type="text" class="form-control" name='location' required value="<?php echo $row['location']?>"/>
        </div>

        <!-- Gender -->
        <div class="row">
          <div class="col">
            <input type="radio" value="male" name="gender" <?php if($row['gender']=='male') echo "checked='checked'"; ?> />
            <label for="male"><i class="fa fa-male"></i> Male</label>
          </div>
          <div class="col">
            <input type="radio" value="female" name="gender" <?php if($row['gender']=='female') echo "checked='checked'";?> />
            <label for="female"><i class="fa fa-female"></i> Female</label>
          </div>
        </div>


        <!-- Contact details -->
        <div class="input-group">
          <span class="input-group-addon">&nbsp;&nbsp;&nbsp;Email-ID:</span>
          <input type="email" id="email" class="form-control" name="email" required value="<?php echo $row['email']?>"/>
        </div>
        <div class="input-group">
          <span class="input-group-addon">&nbsp;Phone no:</span>
          <input type="text"  maxlength="10" class="form-control"  name="pno" required  value="<?php echo $row['phone']?>"/>
        </div>

    <button type="submit" class="btn btn-primary form-control" name='save' ><i class="fa fa-save"></i></span>   Save </a></button>
  </form>
  <div class="card-block">
    <a href="profile.php" class="card-link">Go back</a>
  </div>
    </div>
  </div>
  </div>
</div>

</body>
</html>
