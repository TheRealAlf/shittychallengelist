<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql.7m.pl', 'JvstAlf', 'Alf3.02004','jvstalf_justalf');

// get the post records
$LEVELNAME = $_POST['LEVELNAME'];
$USERNAME = $_POST['USERNAME'];
$VIDEO = $_POST['VIDEO'];

// database insert SQL code
$sql = "INSERT INTO `records` (`LEVELNAME`, `USERNAME`, `VIDEO`) VALUES ($LEVELNAME', '$USERNAME', '$VIDEO')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>