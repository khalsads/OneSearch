<?php
session_start();  
if( isset( $_SESSION['SignInID'] ) ) {
    unset($_SESSION['SignInID']);
    session_destroy();
    header("Location: index.php");
}
?>