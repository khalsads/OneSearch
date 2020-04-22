<?php
//Session Start
if (session_status() == PHP_SESSION_NONE) {session_start();}

$SignInID = $SignInPass = "";
$error = array();
$RegexAll = array(
    'SignInID' => '/^[0-9]{6}$/',
    'SignInPass' => '/^.{8}$/',
);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $x => $value) {
        if (empty($value)){
            $error[$x] = "<span style='color:red;'>**Required Field**</span>";
        }
        elseif (!preg_match($RegexAll[$x],$value)){
            $error[$x] = "<span style='color:red;'>**Please your input**</span>";
        }
      }
    if (!$error) {
        $_SESSION['SignInID']= "Dhanpreet Singh";
        header('Location: UserProfile.php');
    }
    $SignInID = sanatize_data($_POST['SignInID']);
    $SignInPass = sanatize_data($_POST['SignInPass']);
}




/* Function to get data and return the sanatized data so that it will be safe to use*/
function sanatize_data($data){
    /* Strip unnecessary characters (extra space, tab, newline) */
    $data = trim($data);

    /* Remove backslashes (\) */
    $data = stripslashes($data);
    
    /* Convert special characters to HTML entities */
    $data = htmlspecialchars($data);
    return $data;
}

?>