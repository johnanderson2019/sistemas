<?php 
	include("../../dbcommon.php");
	global $conn;


	$sql_per="select * from org_empresa";
	$res_per=db_query($sql_per,$conn);
	$num_per=pg_num_rows($res_per);
	$row_per=db_fetch_array($res_per);

	for ($i=0; $i < $num_per; $i++) { 
		
	}()

	echo "ok";

?>