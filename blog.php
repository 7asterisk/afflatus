<?php

  $db = mysqli_connect("localhost", "root", "", "afflatus");
  $result = mysqli_query($db, "SELECT * FROM article  order by ano desc;");

    while ($row = mysqli_fetch_array($result)) {
      $heading=$row['aheading'];
      $content=$row['acontent'];
       $src='images/'.$row['aimage'];
       $date=$row['on_date'];
      echo"<div class='card'>
        <h5 class='card-header'>$heading";
        if(isset($_SESSION['id'])&& $_SESSION['user_type']==="researcher" )
        {
          if($_SESSION['id']===$row['rno'])
          echo " <form action='edit_blog.php' method='post'>
            <button type='submit' style='float:right;' class='btn btn-outline-danger btn-sm' name='delete'>&nbsp;<i class='fa fa-trash '></i>&nbsp;</button>
            <button type='submit' style='float:right;' class='btn btn-outline-primary btn-sm' name='edit'>&nbsp;<i class='fa fa-edit ' ></i>&nbsp;</button>
          </form>";
        }
        echo"</h5>
        <img class='card-img-top'style='height: 345px;' src='$src' alt='Card image cap'>
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
