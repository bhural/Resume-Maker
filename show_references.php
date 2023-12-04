<?php
    require_once('config_inc.php');

    $conn_str = 'mysql:host=localhost;dbname=homepage';
   
        $pdo = new PDO($conn_str,$user,$pass);
     
       $sql=$pdo->query("SELECT * FROM register");
        $row=$sql->fetch(PDO::FETCH_ASSOC);
      
        $refer="<h1>REFERENCES:</h1>References: {$row['reference']} <br>";
    

        echo $refer;
      
?>