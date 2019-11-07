<?php
class eventclass_admin_members  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


		$this->events["BeforeMoveNextList"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["BeforeDelete"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values["usu_estado"]=1;
$values["usu_nombres"]=mb_convert_case($values['usu_nombres'], MB_CASE_TITLE, 'UTF-8');

if($values["usu_identificacion"]!=""){
	$opciones = [
	 'cost' => 12,
	];
	$pass=password_hash($values["usu_identificacion"], PASSWORD_BCRYPT, $opciones);	
	$values["usu_contrasena"]=$pass;	
		
	return true;
}else{
	$message="Ingrese su identificación";
	return false;
}

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, &$pageObject)
{

		if($data["id_usuario"]=="1"){
	$record["edit_link"]=false;
	$record["checkbox"]=false;
	$record["view_link"]=false;	
}

$record["id_usuario"]=$data["id_usuario"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
$sql = "INSERT INTO arduino_ugmembers (\"UserName\",\"GroupID\") 
	values('".$values["usu_identificacion"]."','".$values["id_perfil"]."')";
CustomQuery($sql);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		$sql = "delete from arduino_ugmembers where \"UserName\"='".$deleted_values["usu_identificacion"]."'";
	CustomQuery($sql);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
