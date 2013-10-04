<?php
	require_once ('global_inc.php');
	$con=mysql_connect("localhost", "root", "");
	$db_select = mysql_select_db("placement",$con);
	$sql="SELECT notice FROM notices ORDER BY time DESC LIMIT 0,6";
	$result=mysql_query($sql,$con);
	$flag=1;
	if(!$result)
		echo "database error";
	else
	{
		while($result && $flag<=6)
		{
			$flag++;
			$fnd=mysql_fetch_array($result);
			echo "<li>".$fnd['notice']."</li>";
		}
	}
?>