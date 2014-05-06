<html>
<head>
<title>Connection test</title>
<body>
<h1>Connection test</h1>

<?php
error_reporting(E_ALL);
//access data
$user="testadmin";		 //User name of MySQL access
$password="testadminpass";		 //Password
$host="emysql501.discountasp.net";	 //Name (or IP address) of MySQL host
$dbname="MYSQL5_893005_test";

//Build up connection
//$db = mysql_connect($host, $user, $password) or die("connection failure");

$db_connection = mysql_connect($host, $user, $password,$dbname); 

if(!$db_connection) {
die ("Sorry, no database found!");
}

if($db_connection) {
echo " connection has been success"

echo "connection to MySQL database server is Success .";

}
?>
</body>
</html>
