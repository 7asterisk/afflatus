
<!-- Image and text -->
  <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">
      <img src="logo.png" height="37" style="margin-left:50px;" class="d-inline-block align-top" alt="">
      Afflatus
    </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-md-0 ">
      <!-- just to display login form right side-->
    </ul>



<?php if(isset($_SESSION['id']))
{
  echo '<ul class="navbar-nav mr-auto mt-2 mt-md-0 ">
  <!-- just to display things form right side-->
</ul>
<ul class="navbar-nav mr-auto mt-2 mt-md-0 ">
  <!-- just to display things form right side-->
</ul>
<ul class="navbar-nav mr-auto mt-2 mt-md-0 ">
  <!-- just to display things form right side-->
</ul>
<ul class="navbar-nav mr-auto mt-2 mt-md-0 ">
<li class="nav-item">
  <a class="nav-link" href="profile.php"><i class="fa fa-user"></i></span> My Profile</a>
</li>';

if($_SESSION['user_type']==="researcher") {

  //if user_type is researcher show my artical

echo '<li class="nav-item">
    <a class="nav-link" href="myarticle.php"><i class="fa fa-file-text"></i></span> My Article</a>
  </li>';
}

echo '<li class="nav-item">
  <a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i></span> Logout</a>
</li>
</ul>';
}
else {
  include 'nav_login.php';
  echo ' <ul class="navbar-nav mr-auto mt-2 mt-md-0 d-block d-lg-none ">
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i></span> Sign up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i></span> Login</a>
          </li>
      </ul>';
}
   ?>
    <!--if cookie is not set it means user dint loged in then show Login form -->

  </div>
</nav>
