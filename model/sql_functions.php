<?php

require ('../database/db.php');

class SqlFunctions
{
	private $db;
	
//*******************************************************/	
	
	//Constructior
	public function __construct()
	{
		$this->db=new DBOperations();	
	}
	
//*******************************************************/	
	
	//
	public function select()
	{
	$db=$this->db;
	$db->select();
	
	}
	
//*******************************************************/		
}


