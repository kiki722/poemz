<?php
include("mysql.php");

$result=mysql_fetch_assoc(mysql_query("select count(*) from completed"));
echo($result["count(*)"]);

?>