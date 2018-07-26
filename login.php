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
<!-- navigation bar -->
<?php include  'navbar.php'; ?>
<br><br><br><br>

<!-- Page Content -->


<div class="container col-sm-6">

  <div class="card my-4">
    <div class="card-body">
      <form action="login_script.php" method="post">
        <div class="input-group">

          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="email" name="email" class="form-control" id="email1" placeholder="Enter email">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key"></i></span>
          <input type="password" name="pass" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn btn-primary form-control"><i class="fa fa-unlock"></i></span>  Login</button>
      </form>
    </div>
  </div>

<?php include 'signup.php'; ?>
</div>


</body>
</html>
