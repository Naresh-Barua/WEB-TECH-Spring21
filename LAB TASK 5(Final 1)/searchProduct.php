<!DOCTYPE html>
<html>
<head>
<title>Search Product</title>
</head>
<body>
  <fieldset style="width: 20%;">
  <legend>SEARCH</legend>
  <form method="post"">
    <input type="text" name="name" placeholder="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required>
    <input type="submit" name="search" value="Search By Name">
  </form>
  </fieldset>
<?php
require 'Controller/search.php';
?>
</body>
</html>