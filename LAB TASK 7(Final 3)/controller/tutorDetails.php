<?php

require_once ('../model/model.php');

function fetchAllStudents(){
	return showAllStudent();

}
function fetchStudent($username){
	return showTutor($username);

}
?>