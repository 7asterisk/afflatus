
<div class="container-fluid">

  <div class="row">
    <!-- Search Widget -->
    <div class="col-lg-3">
      <!-- about Afflatus .Card -->
      <?php include  'about.php'; ?>

    <?php include  'search.php'; ?>

    </div>

    <!-- Blog Entries Column -->
    <div class="col-lg-6">

        <!-- Blog Post -->
        <?php include  'blog.php'; ?>

        <!-- Sidebar Widgets Column -->
        <div class="col-lg-3 d-none d-lg-block">


            <!-- sign up Widget -->
            <!-- if username cookie is not set it means user is not regestered so show signup card -->
            <?php
              if(!isset($_SESSION['id'])) include  'signup.php';
              else {
                include 'subscribe.php';
              }
            ?>

        </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
