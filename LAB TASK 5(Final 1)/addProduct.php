<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
</head>
<body>
<form action="Controller/saveProduct.php" method="POST" enctype="multipart/form-data">
 <fieldset style="width: 15%;">
  <legend>ADD PRODUCT</legend>

  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>

  <hr>

  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

  <hr>

  <input type="submit" name = "saveProduct" value="Save">

 </fieldset>
</form>
</body>
</html>