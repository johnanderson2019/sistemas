<?php
$strTableName="admin_members";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="public.seg_usuarios";

$gstrOrderBy="order by usu_nombres asc";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("admin_members");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["admin_members"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>