<?php

require_once 'db_connect.php';


function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tutors_info` WHERE User Name = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addSignupInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into tutors_info (Name, E-mail, Birth, User Name,Password,Gender)
VALUES (:name, :e-mail, :birth, :user name, :password, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':e-mail' => $data['e-mail'],
        	':birth' => $data['birth'],
			':user name' => $data['user name'],
			':password' => $data['password'],
			':gender' => $data['gender']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

