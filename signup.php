<div class="card my-4 " style="background-color: #eee;">
  <h5 class="card-header" style="background-color: #e3f2fd;">Register</h5>
  <div class="card-body ">
    <form action="<?php echo$_SERVER['PHP_SELF'] ?>" method="post">
      <!--user name-->
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
          <input type="username" id="username" class="form-control" name="username" placeholder="username" required value="<?php if(isset($_POST['singin'])&&isset($_POST['username']))echo $_POST['username']?>"/>
        </div>
          <!--password input -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input type="password"  id="pass1" class="form-control" name="pass1" placeholder="password" required />
          </div>

          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input type="password" id="pass2"class="form-control" name='pass2' placeholder="Re-enter password" required />
          </div>

          <!-- Gender -->
          <div class="row">
            <div class="col">
              <input type="radio" value="male" name="gender" <?php if(isset($_POST['gender'])&& $_POST['gender']=='male') echo "checked='checked'"; ?> />
              <label for="male"><i class="fa fa-male"></i> Male</label>
            </div>
            <div class="col">
              <input type="radio" value="female" name="gender" <?php if(isset($_POST['gender'])&& $_POST['gender']=='female') echo "checked='checked'";?> />
              <label for="female"><i class="fa fa-female"></i> Female</label>
            </div>
          </div>




          <!-- Contact details -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
            <input type="email" id="email" class="form-control" name="email"placeholder="Email" required value="<?php if(isset($_POST['singin'])&&isset($_POST['email']))echo $_POST['email']?>"/>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-mobile  fa-fw" aria-hidden="true"></i></span>
            <input type="telephone" id="pno" class="form-control"  name="pno" placeholder="Phone number" required value="<?php if(isset($_POST['singin'])&&isset($_POST['pno']))echo $_POST['pno']?>"/>
          </div>

      <button type="submit" class="btn btn-primary form-control" name='singin' ><i class="fa fa-sign-in"></i></span>   Sign in</a></button>
    </form>
  </div>
</div>
