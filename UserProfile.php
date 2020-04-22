<?php require_once('master_layout/header.php')?>
<section class="d-flex align-items-center">
    <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if( isset( $_SESSION['SignInID'] ) ) {
            echo "Welcome ".$_SESSION['SignInID'];
        }
    ?>
</section>
<?php require_once('master_layout/footer.php')?>