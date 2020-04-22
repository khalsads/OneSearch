<?php require_once('master_layout/header.php')?>
<?php require_once('SignIn.php')?>
<?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if( isset( $_SESSION['SignInID'] ) ) {
          header('Location: UserProfile.php');
        }
    ?>

<!--####### Home Section Start ##########-->
<section id="Home" class="d-flex align-items-center">
  <div
    id="home_signin"
    class="container-fluid d-flex align-items-center justify-content-center home_signin pt-5"
  >
    <div class="col-sm-4 border rounded-lg p-5 shadow bg-white">
      <p class="h4 m-0 pb-3" id='sign_in'>Sign In</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="SignInForm">
        <div class="form-group">
          <label for="SignInID">User ID [Hint: User Id is only numbers]</label>
          <?php if (isset ($error['SignInID'])){ echo $error['SignInID']; } ?>
          <input
            type="text"
            class="form-control"
            id="SignInID"
            name="SignInID"
            placeholder="User ID [Hint: User Id is only numbers]"
            value="<?= $SignInID?>"
            aria-describedby="Signing in User ID"
            autocomplete="off"
            autofocus
          />
        </div>
        <div class="form-group">
          <label for="SignInPass"> Password</label>
          <?php if (isset ($error['SignInPass'])){ echo $error['SignInPass']; } ?>
          <input
            type="password"
            class="form-control"
            id="SignInPass"
            name="SignInPass"
            placeholder="Your Password"
            autocomplete="off"
          />
        </div>
        <button
          type="submit"
          class="btn btn-primary"
          form="SignInForm"
        >
          Submit
        </button>
      </form>
    </div>
    <p class="h3 mx-3">-or- Sign In With</p>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </div>
</section><!--####### Home Section End #########-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php require_once('master_layout/footer.php')?>