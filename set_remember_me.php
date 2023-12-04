<?php
if (isset($_POST['remember'])) {
    $remember = $_POST['remember'];
    $expiry = time()+60*60*24*30;
    setcookie('remember',$remember,$expiry);
    header('Location: resume.php',true,302);
}
else{
    header('Location: resume.php',true,302);
}

?>