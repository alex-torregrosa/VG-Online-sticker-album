<?php
//include database connection data
include 'db.php';

//get username from url
$nickname = htmlspecialchars($_GET["nick"]);

/*___DB CONNECT___*/

   $con = mysql_connect($dbadress,$dbuser,$dbpass);
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
   
   $database = mysql_select_db($dbname,$con);
   if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
   
   $query  = "SELECT `CROMOS` FROM `ALBUM` WHERE `USER` = '{$nickname}'";
   $result = mysql_query($query);
   
   $hex =  mysql_fetch_row($result);
   echo $hex['0']; 
   
   ?>