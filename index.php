<?php require_once('master_layout/header.php')?>
<!--####### Home Section Start ##########-->
<section id="Home" class="d-flex align-items-center">
  <div
    id="home_signin"
    class="container-fluid d-flex align-items-center justify-content-center home_signin"
  >
    <div class="col-sm-3 border rounded-lg p-5 shadow bg-white">
      <p class="h4 m-0 pb-3">Sign In</p>
      <form>
        <div class="form-group">
          <label for="SignInEmail">Username</label>
          <input
            type="email"
            class="form-control"
            id="SignInEmail"
            aria-describedby="emailHelp"
          />
        </div>
        <div class="form-group">
          <label for="SignInPass">Password</label>
          <input type="password" class="form-control" id="SignInPass" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <p class="h3 mx-3">-or- Sign In With</p>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </div>
</section><!--####### Home Section End #########-->
<?php require_once('master_layout/footer.php')?>