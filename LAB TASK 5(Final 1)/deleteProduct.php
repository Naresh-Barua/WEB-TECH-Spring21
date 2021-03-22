<?php 

require_once 'Model/model.php';
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
<title>Delete Product</title>
</head>
<body>
<form method="POST">
 <fieldset style="width: 15%;">
  <legend>DELETE PRODUCT</legend>

  Name : <?php echo $product['Name'] ?><br>

  Buying Price : <?php echo $product['Buying Price'] ?><br>

  Selling Price : <?php echo $product['Selling Price'] ?><br>

  Displayable :<?php echo $product['Display'] ?><br>

  <hr>
  <a href="Controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>

 </fieldset>
</form>
</body>
</html>