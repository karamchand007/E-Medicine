<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	echo "DB Not Connected...";
}
mysql_select_db("e_medicalwala");
?>