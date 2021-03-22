<?php  
require_once '../model/model.php';


if (isset($_POST['saveProduct'])) 
{
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (addProduct($data)) 
  {
  	echo 'Successfully added!!';
  	header('Location: ../displayProduct.php');
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>