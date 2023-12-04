<?php
    require_once('config_inc.php');

    $conn_str = 'mysql:host=localhost;dbname=homepage';
   
        $pdo = new PDO($conn_str,$user,$pass);
       // $sql="SELECT * FROM register WHERE email='$email' AND password='$password'";

       $sql=$pdo->query("SELECT * FROM register");
//$mail="bhuralqau@gmail.com";

      // $sql=$pdo->prepare("SELECT * FROM register WHERE email=:email");
       //$sql->bindparam(1,$mail,PDO::PARAM_STR);
      // $sql->bindvalue(':email',$mail,PDO::PARAM_STR);
      // $sql->execute();
        $row=$sql->fetch(PDO::FETCH_ASSOC);
       // echo "<pre>";
       // print_r($row);
       // echo "</pre>";
       //echo "name:{$row['username']} <br> age: {$row['age']}<br> Email: {$row['email']} <br> date of birth: {$row['dob']} <br> Profile:{$row['profile']} <br> Objectives: {$row['objectives']} <br> Expeience: {$row['experience']} <br> Education {$row['education']} <br> Languages: {$row['languages']} <br> Hobbie {$row['hobbies']} <br> References: {$row['reference']} <br>";

       $contact="<h1>CONTACT:</h1>name:{$row['username']} <br> age: {$row['age']}<br>Email: {$row['email']} <br>date of birth: {$row['dob']} <br>";

      // $profile="Profile:{$row['profile']} <br>";
      // $objectives="Objectives: {$row['objectives']} <br>";
      // $exp="Expeience: {$row['experience']} <br>";
      // $edu="Education {$row['education']} <br>";
       //$lang="Languages: {$row['languages']} <br>";
       //$hobby="Hobbie {$row['hobbies']} <br>";
      // $refer="References: {$row['reference']} <br>";

       echo $contact;
      // echo $profile;
      // echo $objectives;
      // echo $exp;
     //  echo $lang;
     //  echo $hobby;
     //  echo $refer;
?>