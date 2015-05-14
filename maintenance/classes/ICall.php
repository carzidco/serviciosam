<?php


	$method = $_POST['method'] != null ? $_POST['method'] : $_REQUEST['method'];
	$name = $_POST['name'] != null ? $_POST['name'] : $_REQUEST['name'];
	$image = $_POST['productImage'];
	$category = $_POST['category'];
	$quantity = $_POST['quantity'];
	$description = $_POST['description'];
	
	if (function_exists($method)) {
		if($method == "create")
		{
			create($name, $image, $category, $quantity, $description);
		}
		if($method == "getproducts")
		{
			echo json_encode(getproducts());
		}
	}
	else{
		echo "<script>alert('This method ".$method." is not created.');</script>";
	}

	/*PRODUCT FUNCTIONS*/
?>

<?php

	function create($name, $image, $category, $quantity, $description)
	{
		include("Product.php");

		$origen = "../server/php/files/$image";
		$destino = "../server/php/files/$image";
		$destino_temporal = tempnam("tmp/","tmp");
		redimensionar_jpeg($origen, $destino_temporal, 600, 455, 100);

		// guardamos la imagen
		$fp=fopen($destino,"w");
		fputs($fp,fread(fopen($destino_temporal,"r"),filesize($destino_temporal)));
		fclose($fp);

		$product = new Product();
		$product -> create($name, $category, $quantity, $description, $image);
	}

	function redimensionar_jpeg($img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)
    { 
		// crear una imagen desde el original 
		$img = ImageCreateFromJPEG($img_original); 
		// crear una imagen nueva 
		$thumb = imagecreatetruecolor($img_nueva_anchura,$img_nueva_altura); 
		// redimensiona la imagen original copiandola en la imagen 
		ImageCopyResized($thumb,$img,0,0,0,0,$img_nueva_anchura,$img_nueva_altura,ImageSX($img),ImageSY($img)); 
	 	// guardar la nueva imagen redimensionada donde indicia $img_nueva 
		ImageJPEG($thumb,$img_nueva,$img_nueva_calidad);
		ImageDestroy($img);
	}

	function getproducts()
	{
		include("Product.php");
		$product = new Product();
		$productList = $product -> getJsonProducts();
		return $productList;
		//return "carlos";
	}

?>