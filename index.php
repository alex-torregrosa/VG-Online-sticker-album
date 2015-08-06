<?php
//include database connection data
include 'db.php';

//get username from url
$nickname = htmlspecialchars($_GET["nick"]);
$page = 6 * intval(htmlspecialchars($_GET["page"]));

/*___DB CONNECT___*/

   $con = mysql_connect($dbadress,$dbuser,$dbpass);
   if (!$con){die('ERROR DE CONEXION CON MYSQL ' );}
   
   $database = mysql_select_db($dbname,$con);
   if (!$database){die('ERROR CONEXION CON BD ');}
   
   $query  = sprintf("SELECT `CROMOS` FROM `ALBUM` WHERE `USER` = '%s' ",mysql_real_escape_string($nickname));
   $result = mysql_query($query);

   $hex =  mysql_fetch_row($result);
   
 $bin = base_convert($hex['0'],16,2); 
   ?>
<html>
	<head>
		<title>Sticker Album</title>
	</head>
	
	<body>
	<?php
		echo "<div class = 'cromo' id='c1'>".$bin{$page}."</div>";
		echo "<div class = 'cromo' id='c2'>".$bin{$page+1}."</div>";
		echo "<div class = 'cromo' id='c3'>".$bin{$page+2}."</div>";
		echo "<div class = 'cromo' id='c4'>".$bin{$page+3}."</div>";
		echo "<div class = 'cromo' id='c5'>".$bin{$page+4}."</div>";
		echo "<div class = 'cromo' id='c6'>".$bin{$page+5}."</div>";
		?>
	</body>
</html>
