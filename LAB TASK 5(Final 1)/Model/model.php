<?php 

require_once 'db_connect.php';

function addProduct($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `product_info`(`Name`, `Buying Price`, `Selling Price`, `Display`)  VALUES (:name, :buyingPrice, :sellingPrice, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':buyingPrice' => $data['buyingPrice'],
            ':sellingPrice' => $data['sellingPrice'],
            ':display' => $data['display']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllproducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `product_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `product_info` set `Name` = ?, `Buying Price` = ?, `Selling Price` = ?, `Display` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['buyingPrice'], $data['sellingPrice'], $data['display'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `product_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `product_info` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `product_info` WHERE Name LIKE '%$name%'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>