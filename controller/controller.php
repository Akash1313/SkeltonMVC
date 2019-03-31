<?php

require_once("../model/sql_functions.php");

$obj=new SqlFunctions();

$operation=$_POST['operation'];

if(ISSET($operation))
{
	if($operation=='select')
	{
	$obj->select();
	}
	//----------------------------------------/
	elseif($operation=='something_else')
	{
		
	}
	//----------------------------------------/
	elseif($operation=='something_else_2')
	{
		
	}
	//----------------------------------------/
	else
	{
		
	}
	//----------------------------------------/
}
