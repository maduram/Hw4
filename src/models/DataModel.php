<?php
namespace excalibur\hw4\models;


use excalibur\hw4\controllers\Controller;
use excalibur\hw4\configs\Config;

/**
 * This class extends Model class. This executes the Insert and Select queries for Chart data.
 */
class DataModel extends Model
{
	public function save_data($sheet_name,$sheet_id,$sheet_data, $sheet_code, $code_type)
	{
		$query_sheettable="insert into sheettable values('".$sheet_name."','".$sheet_id."','".$sheet_data."')";
		$query_sheetcodestable="insert into sheetcodestable values('".$sheet_id."','".$sheet_code."','".$code_type."')";
		$result=$this->connection->query($query_sheettable);
		$result=$this->connection->query($query_sheetcodestable);
	}


	
} ?>
