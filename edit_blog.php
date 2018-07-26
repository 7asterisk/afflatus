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
  <?php
  session_start();
  if(isset($_SESSION['id']))
  {
    $id=$_SESSION['id'];
    $ano=$_SESSION['ano'];
    if (isset($_POST['edit'])) {
      $db = mysqli_connect("localhost", "root", "", "afflatus");
      $result = mysqli_query($db, "SELECT * FROM article where ano=$ano");
      $row = mysqli_fetch_array($result);
      $heading=$row['aheading'];
      $content=$row['acontent'];
       $src='images/'.$row['aimage'];
       $date=$row['on_date'];
    }
  }

   ?>

<!-- navigation bar -->
<?php include  'navbar.php'; ?>
<br><br><br><br>
<div class="container">
  <div class="row">

    <div class="col-md-3">
    </div>

  <div class=" col-md-6 ">
    <div class="card " >
      <form action="myarticle_script.php" method="POST"  enctype="multipart/form-data">

        <div class="text-group">
          <input type="text" class="form-control" name="heading" value="<?php echo $heading; ?>" placeholder="Heading Of My Research">
        </div>

          <input type="file" name="pic" accept="image/*">

        <div class="form-group">
          <textarea class="form-control" name="content" rows="5" ><?php echo $content;?></textarea>
        </div>

        <div class="card-block">
          <div class="input-group" >
            <button type="submit" class="btn btn-outline-primary form-control " name='preview' > <span ><i class="fa fa-eye"></i>  Preview</span>  </button>
            <button type="submit" class="btn btn-outline-primary form-control " name='post_a' > <span> <i class="fa fa-send"></i>   Post</span></button>
          </div>
        </div>

      </form>

    </div>

    <br><br>
    </div>

    </div>
  </div>

  </body>
  </html>
