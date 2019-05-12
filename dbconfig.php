
<? php
define('DB_HOST', 'localhost');
define('DB_NAME', 'Spark_payment');
define('DB_USER','root');
define('DB_PASSWORD','');

$db=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$con=mysql_select_db(DB_NAME,$db) or die("Failed to connect to MySQL: " . mysql_error());



mysqli_close($db);



?>

