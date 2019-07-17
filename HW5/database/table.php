<?php
include("config.php");
//customer table 
$tbl_customer="CREATE TABLE IF NOT EXISTS customer(
c_id INT(11) NOT NULL,
PRIMARY KEY(c_id),
name VARCHAR(50) NOT NULL,
email VARCHAR(50)NOT NULL)";
$customer=mysqli_query($myconn,$tbl_customer);
if($customer===TRUE)
{
	echo"<br>customer table created happy codding (:";
}
else
{
		echo"<br>customer table not created ):";

}
// customer table

?>