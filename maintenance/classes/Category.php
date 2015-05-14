<?php
include_once("DAL/class.database.php");

class Category{
	
	var $conexion;
	var $message;
	
	function Category()
	{
		$objDB = new database();
		$this -> conexion = $objDB -> connectDataBase();
		$this -> message = "<script>alert('%s');</script>";
	}
	
	function getCategories()
	{
		$categories = array();
		$i = 0;
		$query = "select * from category where state=1";
		$results = mysql_query($query,$this->conexion) or die ("fallo el select");

		while($reg = mysql_fetch_array($results))
		{
			$categories[$i] = $reg;
			$i++;
		}
		
		return $categories;
	}

	function getCategoriesDropDownList()
	{
		$categories = $this->getCategories();
		$a = 0; 

		while($a < count($categories))
		{
			echo "<option value=".$categories[$a]['idcategory'].">".$categories[$a]['name']."</option>";
			$a = $a+1;
		}
	}

	function getCategoriesMenu()
	{
		$categories = $this->getCategories();
		$a = 0; 

		while($a < count($categories))
		{
			echo "<li><a class='btn btn-default ".$categories[$a]['class']."' href='#'' data-filter='.cat".$categories[$a]['idcategory']."'>".$categories[$a]['name']."</a></li>";
			$a = $a+1;
		}
	}
}

?>