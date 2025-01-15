<?php  

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach($db as $key => $value)  {  define(strtoupper($key), $value); echo "<br>"; 

//echo "The key is" .' '. $key; echo "<br>";                                
//echo "The value is" .' '. $value; echo "<br>"; 
                                
}




echo "<br>";
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if($connection) { echo "connected to database"; } else {echo "database connection failed";}


//$connection=mysqli_connect('localhost','root','','cms');
//if($connection) { echo "connected to database"; } else {echo "database connection failed";}
?>
