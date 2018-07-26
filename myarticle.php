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
  <?php session_start(); $id=$_SESSION['id']; ?>
<!-- navigation bar -->
<?php include  'navbar.php'; ?>
<br><br><br><br>
<div class="container">
  <div class="row">

    <div class="col-md-3">
    </div>

  <div class=" col-md-6 ">
    <div class="card " >
      <h5 class="card-header text-center"  style="background-color: #e3f2fd;">My New Research</h5><br>
      <form action="myarticle_script.php" method="POST"  enctype="multipart/form-data">

        <div class="text-group">
          <input type="text" class="form-control" name="heading" placeholder="Heading Of My Research">
        </div>

          <input type="file" name="pic" accept="image/*">

        <div class="form-group">
          <textarea class="form-control" name="content" rows="5"></textarea>
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

    <?php

      $db = mysqli_connect("localhost", "root", "", "afflatus");
      $result = mysqli_query($db, "SELECT * FROM article where rno=$id order by ano desc;");

        while ($row = mysqli_fetch_array($result)) {
          $heading=$row['aheading'];
          $content=$row['acontent'];
           $src='images/'.$row['aimage'];
           $date=$row['on_date'];
          echo"<div class='card'>
            <h5 class='card-header'>$heading
            <button type='button' style='float:right;' class='btn btn-outline-danger btn-sm'>&nbsp;<i class='fa fa-trash '></i>&nbsp;</button>
            <button type='button' style='float:right;' class='btn btn-outline-primary btn-sm'>&nbsp;<i class='fa fa-edit '></i>&nbsp;</button>
            </h5>

            <img class='card-img-top'style='height: 275px;' src='$src' alt='Card image cap'>
            <div class='card-body'>
              <p class='card-text'>$content</p>
            </div>
            <div class='card-footer text-muted'>
              Posted on $date
            </div>
          </div><br><br>";

        }

     ?>



  </div>

  </div>
</div>




</body>
</html>
