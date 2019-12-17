<?php

$GLOBALS['servername'] = 'localhost';
$GLOBALS['username'] = 'root';
$GLOBALS['password'] = '';
$GLOBALS['dbname']='hospital';

$GLOBALS['con']=mysqli_connect($GLOBALS['servername'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['dbname']);
if($GLOBALS['con']){
	mysqli_select_db($GLOBALS['con'],$GLOBALS['dbname']);
}else {
	die("<script>location.href ='index.php'</script>");
}

?>