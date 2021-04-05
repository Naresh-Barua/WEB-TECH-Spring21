<?php
if(file_exists('postad.json'))
{

     $current_data = file_get_contents('postad.json');
     $array_data = json_decode($current_data, true);
   }

else
{
     $error = 'JSON File not exits';
}

foreach ($array_data as $array_data) {
  echo "Tutors name: ".$array_data['yourname'];
  echo "<br />";
  echo "Tutors email: ".$array_data['email'];
  echo "<br />";
  echo "Expert in: ".$array_data['coursename'];
  echo "<br />";
  echo "Salary: ".$array_data['salary'];
  echo "<br />";
  echo "Details : ".$array_data['comment'];
  echo "<br />";
  echo "<br />";
  echo "<br />";

}
 ?>
