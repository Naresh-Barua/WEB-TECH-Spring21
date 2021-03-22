<?php 

require_once 'Model/model.php';
require_once 'Controller/updateProduct.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
  header('Location: displayProduct.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
</head>
<body>
<form method="POST">
 <fieldset style="width: 15%;">
  <legend>EDIT PRODUCT</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name" value="<?php echo $product['Name'] ?>"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice" value="<?php echo $product['Buying Price'] ?>"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice" value="<?php echo $product['Selling Price'] ?>"><br>

  <hr>
  
  <input type="checkbox" id="display" name="display"<?php if($product['Display']== "YES"){echo "checked";} ?>>
  <label for="display">Display</label><br>

  <hr>

  <input type="submit" name = "updateProduct" value="Save">

 </fieldset>
</form>
</body>
</html>