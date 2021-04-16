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

function showTutor($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tutors_info` where USERNAME = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function showAd($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tutors_ad` where USERNAME = '$username'";
    try {
        $stmt = $conn->prepare($selectQuery);
     
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function tutorSignup($data){
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

function tutorAd($data){
    $conn = db_conn();
    $selectQuery = "INSERT into tutors_ad (USERNAME, EMAIL, COURSE,SALARY,DETAILS)
VALUES (:username, :email, :course, :salary, :details)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':course' => $data['course'],
                    ':salary' => $data['salary'],
                    ':details' => $data['details']
                    

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}



function updateTutor($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE tutors_info set NAME = ?, EMAIL = ?, BIRTH = ? where USERNAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['birth']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updateAd($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `tutors_ad` set EMAIL = ? COURSE = ? SALARY = ? DETAILS = ? where NAME = '$name'?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['email'], $data['course'], $data['salary'], $data['details']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function checkUsername($tableName,$username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tutors_info` where username =?";

    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt-> execute([$username]);

    } catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt-> fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updatedTutorpassword($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE tutors_info set PASSWORD = '$password' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}




function deleteAd($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `tutors_ad` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
