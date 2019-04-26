<?php
$dbname="student";
$link_id = mysqli_connect("localhost","root","","student");
if(!$link_id){
die(mysql_error("Can`t Connect To database"));
}
else{
$db = mysqli_select_db($link_id,$dbname);
}
if(!$db){
die(mysql_error("Can`t select database"));
}
return;
?>