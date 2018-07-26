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

<?php

if(isset($_FILES['pic']))
{
  $name=$_FILES['pic']['name'];
  $temp=$_FILES['pic']['tmp_name'];
  setcookie('image',$name);
  setcookie('temp',$temp);
}
else {
  die("plz select image...!");
}


move_uploaded_file($temp,"images/".$name)or die();

?>


<div class="container">
  <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
      <div class="card">
        <h5 class="card-header"><?php if (isset($_POST['heading'])) {
        echo $_POST['heading'];
        } ?></h5>
        <img class="card-img-top" src="<?php  echo 'images/'.$name;?>" style="height: 275px;"alt="Card image cap">
        <div class="card-body">
          <p class="card-text"><?php if (isset($_POST['content'])) echo $_POST['content'] ?></p>
          <form action="post_script.php" method="post">
          <button type="submit" class="btn btn-outline-primary form-control " name='post_a' > <span> <i class="fa fa-send"></i>   Post</span></button>
          </form>
        </div>
        <div class="card-footer text-muted">
          <?php echo "Posted on:".date("d/m/20y") ?>
        </div>
      </div>
      <br><br>
      <?php setcookie('heading',$_POST['heading']);
            setcookie('content',$_POST['content']);
       ?>
    </div>
  </div>
</div>

</body>
</html>
