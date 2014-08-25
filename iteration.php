<?php

$grades = array(4, 5, 9, 1, 0);

$average_grade = get_average($grades);
echo "Average";

echo $average_grade;

function get_average($cur_grades){
	 $total_students = 5;
	 
	 for ($i=0; $i < $total_students; $i++){
      	     $sum = $sum + $cur_grades[$i];
	 }
	 $avg = $sum/$total_students;

	 return $avg;
}
?>