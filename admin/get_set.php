<!DOCTYPE html>
<html>
<head>
	<title>
		 Using __get() and __set()
	</title>
	<link rel="stylesheet" type="text/css" href="../common.css">
</head>
<body>
<h1> Using __get() and __set() </h1>
<?php
class Car
{
	public $manufacturer;
	public $model;
	public $color;
	private $_extraData=array();
	public function __get($propertyName){
	if(array_key_exists($propertyName, $this->_extraData))
	{
		return $this->_extraData[$propertyName];
	}
	else
	{
		return null;
	}
}
public function __set($propertyName,$propertyValue)
{
	$this->_extraData[$propertyName]=$propertyValue;
}
}
$myCar=new Car;
$myCar->manufacturer="Volkswagen";
$myCar->model="Bettle";
$myCar->color="red";
$myCar->engineSize=1.8;
$myCar->otherColor=array("green","gray","black");
echo "<h2>Some Properties</h2>";
echo "<p>My car's manufacturer is".$myCar->manufacturer."</p>";
echo "<p>My car's engine size is".$myCar->engineSize."</p>";
echo "<p>My car's fuel type is".$myCar->fuelType."</p>";
echo "<h2>The \$myCar Object</h2><pre>";
print_r($myCar);
echo "</pre>";

?>

</body>
</html>