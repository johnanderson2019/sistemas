<?php
class eventclass_public_fac_producto  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		if($_SESSION['s_type_usuario']==0){
	header('Location: menu.php');
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		global $conn;

if($_SESSION["s_type_usuario"]!='0'){
	
	$condicion="";

	if($condicion==""){
		$condicion="id_empresa='".$_SESSION["s_id_empresa"]."'";
	}else{
		$condicion.="or id_empresa='".$_SESSION["s_id_empresa"]."'";
	}

	if($strWhereClause!=""){
		$strWhereClause.=" and ($condicion) ";
	}else{
		$strWhereClause.=" ($condicion) ";
	}
}else{
	$condicion="";

	if($condicion==""){
		$condicion="id_empresa='-11'";
	}else{
		$condicion.="or id_empresa='-11'";
	}

	if($strWhereClause!=""){
		$strWhereClause.=" and ($condicion) ";
	}else{
		$strWhereClause.=" ($condicion) ";
	}
}




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values["pro_nombre"] = mb_convert_case($values['pro_nombre'], MB_CASE_TITLE, 'UTF-8');

if($_SESSION['s_type_usuario']!=0){
	$values["id_empresa"]=$_SESSION['s_id_empresa'];
}else{
	$values["id_empresa"]=-11;
}




//validar la sucursal de la facturacion
if($_SESSION['s_type_usuario']!=0){
	$values["id_sucursal"]=$_SESSION['s_sucursal'];
}else{
	$values["id_sucursal"]=-11;
}

if($values["id_sucursal"]==-11){
	$message="Error,intentelo mas tarde..!";
	return false;
}


if($values["id_sucursal"]!=-11){
	return true;
}
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$values["pro_nombre"] = mb_convert_case($values['pro_nombre'], MB_CASE_TITLE, 'UTF-8');

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events







}
?>
