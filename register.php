<?php

require_once('config_inc.php');
//error_reporting(0);
if(isset($_POST['submit'])){
$username = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$GPA = $_POST['GPA'];
$profile = $_POST['profile'];
$objectives = $_POST['objectives'];
$experience = $_POST['experience'];
$education = $_POST['education'];
$languages = $_POST['languages'];
$hobbies = $_POST['hobbies'];
$reference = $_POST['reference'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);


if($password == $cpassword){
   // $sql="SELECT * FROM register WHERE email='$email'";
    //$result=mysqli_query($conn, $sql);

    $sql = "INSERT INTO register (username, age, email, dob, cgpa, profile, objectives, experience, education, languages, hobbies, reference, password) 
    VALUES ('$username', '$age', '$email', '$dob', $GPA, '$profile', '$objectives', '$experience', '$education', '$languages', '$hobbies', '$reference', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo "<script>alert('completed.')</script>";
            $username="";
            $age="";
            $email="";
            $dob="";
            $GPA="";
            $profile="";
            $objectives="";
            $experience="";
            $education="";
            $languages="";
            $hobbies="";
            $reference="";
            $_POST['password']="";
            
        }else{
            echo "<script>alert('something went wrong.')</script>";
        }

}else{
    echo "<script>alert('doesnt match password.')</script>";
}

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
<body id="regis-body">
    <div id="register-main-div"> 
<fieldset>
<table>
<h1>REGISTER RESUME</h1>
        <form action="" method="POST" calss="login-email">

            <tr>
        <td><label>Name:* </label></td>
        <td><input class="profilefiled" type="text" id="name" placeholder="USER" name="username"></td>
    </tr>

    <tr>
    
        <td><label>Age:* </label></td>
        <td><input type="number" placeholder="22" id="age" name="age"></td>
    </tr>

    <tr>
        <td><label>Email:* </label></td>
		<td><input type="email" id="mail" name="email" placeholder="abc@example.com"></td>
    </tr>

    <tr>
    <td><label>Date of Birth</label></td><br>
        <td><input type="date" id="dbirth" placeholder="10-3-2000" name="dob"></td>
	</tr>

    <tr>

    <td><label>CGPA</label></td><br>
        <td><input type="text" id="gpa" placeholder="4.0" type="range" min="0" max="4.0" name="GPA"></td>
		
	</tr>

          


 <tr>
   

        <td><label>PROFILE</label></td>
        <td> <TextArea id="Profile" placeholder="write something about your profile" name='profile' rows="5" cols="50"></TextArea></td>

</tr>


<tr>
   
   
   <td><label>OBJECTIVES</label></td>
   <td> <TextArea id="object" placeholder="write something about your objectives" name='objectives' rows="5" cols="50"></TextArea></td>

</tr>


<tr>
   

   <td><label>EXPERIENCE</label></td>
   <td> <TextArea id="exp" placeholder="write something about your experience" name='experience' rows="5" cols="50"></TextArea></td>


</tr>


<tr>
<td><label>EDUCATION</label></td>
<td> <TextArea id="educ" placeholder="write about your education e.g 1 BSCS QAU" name='education' rows="5" cols="50"></TextArea></td>

</tr>




<tr>

<td><label>LANGUAGES</label></td>
<td> <TextArea id="lang" placeholder="write some lanuguages which you speak e.g 1 ENGLISH"name='languages' rows="5" cols="50"></TextArea></td>
		
</tr>



    <tr>
        <td><label>HOBBIES</label></td>
        <td> <TextArea id="hobby" placeholder="write about your hobbies e.g 1 CRICKET"name='hobbies' rows="5" cols="50"></TextArea></td>
    
       
	</tr>

    <tr>
		<td><label>REFERENCES</label></td><br>
        <td> <TextArea id="ref" placeholder="write references if you have e.g 1 Dr Rabeeh Ayazz"name='reference' rows="5" cols="50"></TextArea></td>
        
       
	</tr>


    <tr>
        <td><label>password</label></td>
               <td> <input type="password" placeholder="********" name="password"></td>
</tr>

            <tr>
            <td><label>confirm password</label></td>
                <td><input type="password" placeholder="********" name="cpassword"></td>
          </tr>


    <tr>
   
        <td> <button id="regis-btn" name="submit" class="btn">register</button></td>
   
</tr>

    <tr>
         <td><p>if have an account? <a id="regis-anch" href="login.php">login here</a></p></td>
   </tr>


</form>
</table>
</fieldset>
</div>
<script src="front_end_validate.js" lang="javascript"></script>
</body>


</html>