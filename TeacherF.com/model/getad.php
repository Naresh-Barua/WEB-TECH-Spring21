<?php
require_once 'db_connect.php';
$mysqli = new mysqli("localhost", "root", "", "teacherf_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT USERNAME, EMAIL, COURSE , SALARY ,DETAILS  FROM `tutors_ad` WHERE USERNAME = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $username, $email, $course, $salary, $details);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
// echo "<th>CustomerID</th>";
// echo "<td>" . $id . "</td>";
echo "<th>Client Name:- </th> <br>";
echo "<td>" . $username . "</td>";
echo "<th>Email:-</th>";
echo "<td>" . $email . "</td>";
echo "<th>Course:-</th>";
echo "<td>" . $course . "</td>";
echo "<th>Salary:- </th>";
echo "<td>" . $salary . "</td>";
echo "<th>Details:- </th>";
echo "<td>" . $details . "</td>";
 
echo "</tr>";
echo "</table>";
?>