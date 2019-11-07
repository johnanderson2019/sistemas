<?php 
	//include("../../dbcommon.php");
	//global $conn;

	$dbconn = pg_connect("host=localhost dbname=SIIGO_EXP user=insertar password=insertar");

	$sql_per="select id_empresa from org_empresa";
	$res_per=pg_query($sql_per);
	$num_per=pg_num_rows($res_per);

	$empresas=array();
	
	for ($i=0; $i<$num_per; $i++){
		$row_per=pg_fetch_array($res_per,$i);
		array_push($empresas,$row_per["id_empresa"]);
	}
	
	if(sizeof($empresas)>0){
		
		for($i=0;$i<50;$i++){ 
			sleep(1);

			$ram=rand(0,(sizeof($empresas)-1));
			$id=$empresas[$ram];
			date_default_timezone_set("America/Bogota");
			$pro_dis=substr(md5(microtime()),1,8);
			$producto="Producto-".$pro_dis;

			$val_temp=rand(1,10000);
			$valor=floatval("123".$val_temp);

			$con_detalle = "INSERT INTO fac_producto (id_empresa,pro_nombre,pro_descripcion,pro_valor)
			values ('".$id."','".$producto."','','".$valor."')";
			pg_query($con_detalle);	
		}
	}
	


	echo "ok";

?>