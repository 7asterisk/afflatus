<?php

session_start();

$id=$_SESSION['id'];

if (isset($_POST['post_a']) && isset($_SESSION['id'])) {
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "afflatus");

  	// Get all  post content by cookie...
    $image = $_COOKIE['image'];
    $temp=$_COOKIE['temp'];
    $heading=$_COOKIE['heading'];
    $content=$_COOKIE['content'];
  	// Get text
  	$heading = mysqli_real_escape_string($db, $heading);
    $content = mysqli_real_escape_string($db, $content);
    $date="20".date("y-m-d h:i:s");
  	// image file directory
  	$target = "images/".basename($image);

    $sql="insert into article(rno,aimage,aheading,acontent,on_date) values('$id','$image','$heading','$content','$date')";
	// execute query
    mysqli_query($db, $sql) or die("somthing went wrong");
    header('location:myarticle.php');
}

 ?>
