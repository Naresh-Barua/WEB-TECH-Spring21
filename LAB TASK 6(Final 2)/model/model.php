<?php

require_once 'db_connect.php';


function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tutors_info` WHERE USERNAME = '$username'";


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
    $selectQuery = "INSERT into tutors_info (NAME, EMAIL, BIRTH,USERNAME,PASSWORD,GENDER)
VALUES (:name, :email, :birth, :username, :password, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':birth' => $data['birth'],
                    ':username' => $data['username'],
                    ':password' => $data['password'],
                    ':gender' => $data['gender']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
