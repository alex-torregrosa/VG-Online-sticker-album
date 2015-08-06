<?php
//include database connection data
include 'db.php';


/*___CONNECT___*/

   $con = mysql_connect($dbadress,$dbuser,$dbpass);
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
   
   $database = mysql_select_db($dbname,$con);
   if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
   
   ?>