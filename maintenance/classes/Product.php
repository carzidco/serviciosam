<?php
include_once("DAL/class.database.php");

class Product{
	
	var $conexion;
	var $message;
	
	function Product()
	{
		$objDB = new database();
		$this -> conexion = $objDB -> connectDataBase();
		$this -> message = "<script>alert('%s');</script>";
	}
	
	function getProducts()
	{
		$products = array();
		$i = 0;
		$query = "select * from Product";
		$results = mysql_query($query,$this->conexion) or die (mysql_error());

		while($reg = mysql_fetch_array($results))
		{
			$products[$i] = $reg;
			$i++;
		}
		
		return $products;
	}

	function getJsonProducts(){
		return $this-> getProducts();
	}

	function getProductCatalog()
	{
		$products = $this->getProducts();
		$a = 0; 

		while($a < count($products))
		{
			echo "<div class=\"portfolio-item joomla cat".$products[$a]['category']." col-xs-12 col-sm-4 col-md-3\">";
			echo "<div class=\"recent-work-wrap\">";
			echo "<img class=\"img-responsive\" src=\"maintenance/server/php/files/".$products[$a]['image']."\" alt=\"\">";
			echo "<div class=\"overlay\">";
			echo "<div class=\"recent-work-inner\">";
			//echo "<h3><a href=\"#\">".$products[$a]['name']."</a></h3>";
			//echo "<a class=\"preview\" href=\"maintenance/server/php/files/".$products[$a]['image']."\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i>".$products[$a]['name']."</a>";
			echo "<a class=\"preview\" href=\"maintenance/server/php/files/".$products[$a]['image']."\" rel=\"prettyPhoto\">".$products[$a]['name']."  "."<i class=\"fa fa-eye\"></i></a>";
			echo "<p style=\"font-size:12px\">".$products[$a]['description']."</p>";
			echo "</div>";
			echo "</div>";
			echo "</div>";     
			echo "</div>";

			$a = $a+1;
		}

	}

	function create($name, $category, $quantity, $description, $image)
	{
		$query = "INSERT INTO Product (name, category, quantity, description, image) VALUES ('$name', $category, $quantity, '$description', '$image')";
		mysql_query($query, $this->conexion) or die (mysql_error());
		mysql_close($this->conexion);
		//echo sprintf($this-> message, "El producto fue creado satisfactoriamente");
		header("Location: http://serviciosam.com/serviciosam/primero/maintenance/maint_products.php");
	}

}

?>