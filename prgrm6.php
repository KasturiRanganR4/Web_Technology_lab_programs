<!DOCTYPE html>
<html>
<head>
<title> php running localy </title>
</head>
<body>
<h1> Welcome to my page </h1>

<?php 

   $fp = fopen("counterlog.txt", "r"); 
   $count = fread($fp, 10);  //arguments: file descriptor & max no of bytes to read
   fclose($fp); 
   $count = $count + 1; 
   echo "<p>Page views:" . $count . "</p>"; 
   $fp = fopen("counterlog.txt", "w"); 
   fwrite($fp, $count); 
   fclose($fp); 

 ?> 
 
 </body>
 </html>