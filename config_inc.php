<?php
$server="localhost";
$user="root";
$pass="";
$database="homepage";

$conn= mysqli_connect($server, $user, $pass, $database);

if(!$conn)
{
   // echo "<script> alert('connection failed')</script>";
    die("<script> alert('connection failed')</script>");
}
?>