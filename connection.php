<?php
//db credentials
define('host','localhost');
define('user','root');
define('password','');
define('db_name','pfe');


// connect with the database.
function connect()
{
	$connect = mysqli_connect(host ,user ,password ,db_name);
	if(mysqli_connect_errno($connect)){
		die ("connection incorrect :".mysqli_connect_error());
	}
	mysqli_set_charset($connect, "utf8");
	return $connect;
}
$con=connect();
?>