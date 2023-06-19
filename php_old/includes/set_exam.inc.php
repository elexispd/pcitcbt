<?php 
session_start();
require "../classes/init.php";
include_once "../classes/student.class.php";
include_once "../classes/staff.class.php";
include_once "../classes/course.class.php";

$db = new Init();


if (isset($_POST['add_q'])) {
	$staff_object = new Staff($db);

	$question = empty($_POST['q']) ? "" : $_POST['q'];
	$opt1 = empty($_POST['opt1']) ? "" : $_POST['opt1'];
	$opt2 = empty($_POST['opt2']) ? "" : $_POST['opt2'];
	$opt3 = empty($_POST['opt3']) ? "" : $_POST['opt3'];
	$opt4 = empty($_POST['opt4']) ? "" : $_POST['opt4'];
	$ans =  (empty($_POST['ans'])) ? "" : $_POST['ans'];
	$cat =  (empty($_POST['category'])) ? "" : $_POST['category'];
	$c_id = $_POST['c_id'];
	$lec_id = $_POST['lec_id'];
	// $q_no = $_POST['q_no'];
	$table = $_POST['course_name'];
	$course_no = empty($_POST['course_no']) ? "" : $_POST['course_no'];
	
	

	$msg = $staff_object->set_exam($c_id, $lec_id, $question, $opt1,$opt2, $opt3, $opt4, $ans, $course_no,$table, $cat);
	echo $msg;
}


if (isset($_POST['edit_q']) || isset($_POST['add_new'])) {
	$staff_object = new Staff($db);
	$question = empty($_POST['q']) ? "" : $_POST['q'];
	$opt1 = empty($_POST['opt1']) ? "" : $_POST['opt1'];
	$opt2 = empty($_POST['opt2']) ? "" : $_POST['opt2'];
	$opt3 = empty($_POST['opt3']) ? "" : $_POST['opt3'];
	$opt4 = empty($_POST['opt4']) ? "" : $_POST['opt4'];
	$c_no =  (empty($_POST['course_no'])) ? "" : $_POST['course_no'];
	$ans =  (empty($_POST['ans'])) ? "" : $_POST['ans'];

	$clicked_button =  (empty($_POST["name"])) ? "" : $_POST["name"];

	
	
	$cat =  (empty($_POST['category'])) ? "" : $_POST['category'];
	$table = $_POST['course_name'];
	$c_id = $_POST['c_id'];
	$q_id = $_POST['q_id'];

	$year = $_POST['year'];

	if(isset($_POST['edit_q']) && $clicked_button == "Update") {
		$msg = $staff_object->edit_question($question, $opt1,$opt2,$opt3,$opt4,$ans,$table,$c_no, $cat, $q_id);
	} 
	elseif (isset($_POST['add_new']) && $clicked_button == "Set As New") {
		$lec_id = $_POST['lec_id'];
		$course_no = $_POST['course_no'];
		$is_duplicate =$staff_object->is_duplicate($table, $_POST['q_id'], $year, $cat, $course_no);
		if ($is_duplicate === true) {
			$msg = "Duplicate question!";
		} elseif($is_duplicate == false) {
			$msg = $staff_object->set_exam($c_id, $lec_id, $question, $opt1,$opt2, $opt3, $opt4, $ans, $course_no,$table, $cat);
			// $msg = "done";
		} 
		
	}
	echo $msg;


}



if (isset($_POST['approve'])) {
	$staff_object = new Staff($db);
	$duration = (empty($_POST['exam_duration'])) ? "" : $_POST['exam_duration'];
	$date = (empty($_POST['exam_date'])) ? "" : $_POST['exam_date'];
	$cat = (empty($_POST['cat'])) ? "" : $_POST['cat'];
	$co_no = $_POST['co_no'];
	$c_id = $_POST['c_id'];
	$table = $_POST['course_name'];
	$msg =  $staff_object->set_approval($table, $duration, $date, $co_no, $c_id, $cat);
	echo $msg;
} 


if (isset($_POST['submit_exam'])) {
	$student_obj = new Students($db);
	$ans = [];
	// if (empty($_POST['ans'])) {
	// 	$_POST['ans'] = "p";
	// }

	// print_r($_POST['ans']);
	
	$msg = $student_obj->set_result($_POST['c_id'], $_POST['q_id'], $_POST['s_id'], $_POST['c_no'], $_POST['id'], $_POST['ans'], $_POST["cat"], $_POST["duration"], $_POST['time']);
	


}



