
<?php
require_once('config_inc.php');
session_start();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=md5($_POST['password']);


$sql="SELECT * FROM register WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('loged in')</script>";
    
    
}else{
    echo "<script>alert('email or password is wrong')</script>";
}
}

?>

<?php
    if (isset($_COOKIE['remember'])){
        $remember = $_COOKIE['remember'];
        echo "<script>alert('password remembered')</script>";
    }
    else{
    echo "<script>alert('password not remember')</script>";
     
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="bootstrap.css">
       <link rel="stylesheet" href="style.css">

       <title>ASSIGNMENT 1</title>
</head>
<body id="body">
<h1>LOGIN</h1>
<div id="center-container">
<fieldset>
    <table>
    <form action="set_remember_me.php" method="POST">

    <tr>
        
		<td><input type="email" id="login_mail" name="email" placeholder="abc@example.com" value="email" <?php if ($remember == 'email') echo "rememberd";  ?>></td>
    </tr>


    <tr>
        
		<td><input type="password" id="pass" name="password" placeholder="********" value="password" <?php if ($remember == 'password') echo "remembered";  ?>></td>
    </tr>
    

           <tr>
           <td><button id="login-btn" name="submit" class="btn">login</button></td>
         </tr>

         <tr>
        
		<td><p><input type="checkbox" name="remember" /> Remember me</p></td>
             <tr>

<tr>
<td> <p>if dont have an account? <a id="login-anch" href="register.php">Register here</a></p></td>
</tr>
           
</form>
</table>
</fieldset>

</div>
<script src="login_validate.js" lang="javascript"></script>
</body>


</html>