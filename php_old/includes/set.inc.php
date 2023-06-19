<?php
if(!session_id()){

session_start();
}

$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, "/admin/")) {
    require_once "../php/classes/init.php";
    include_once "../php/classes/student.class.php";
    include_once "../php/classes/staff.class.php";
    include_once "../php/classes/course.class.php";
} else {
    require "../classes/init.php";
    include_once "../classes/student.class.php";
    include_once "../classes/staff.class.php";
    include_once "../classes/course.class.php";
}

// require "../classes/init.php";
// include_once "../classes/student.class.php";
// include_once "../classes/staff.class.php";
// include_once "../classes/course.class.php";

$db = new Init();


if (isset($_POST["register"])) {
	$reg_object = new Students($db);
	$fname = strtoupper($_POST['fname']);
	$lname = strtoupper($_POST['lname']);
	$sg = strtoupper($_POST['sg']);
	$state = strtoupper($_POST['state']);
	$gender = strtoupper($_POST['gender']);
	$date_of_enlistment = $_POST['date_of_enlistment'];
	$command = strtoupper($_POST['command']);
	$date_last_promoted = $_POST['date_last_promoted'];
	$qualification = strtoupper($_POST['qualification']);
	$apnumber = $_POST['apnumber'];
	$year = $_POST['year'];
	$leaves_on = $_POST['leaves_on'];
	$course = $_POST['course'];
	// $file_name = $_FILES['image'];

	$msg = ($reg_object->set_student($fname, $lname, $sg, $state, $gender, $date_of_enlistment, $command, $date_last_promoted, $qualification, $apnumber,$year, $leaves_on, $course));
	echo($msg);
	
}

if (isset($_POST['edit_student'])) {
	
	$reg_object = new Students($db);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sg = $_POST['sg'];
	$state = $_POST['state'];
	$gender = $_POST['gender'];
	$date_of_enlistment = $_POST['date_of_enlistment'];
	$command = $_POST['command'];
	$date_last_promoted = $_POST['date_last_promoted'];
	$qualification = $_POST['qualification'];
	$apnumber = $_POST['apnumber'];
	$year = $_POST['year'];
	$leaves_on = $_POST['leaves_on'];
	$course = $_POST['course'];
	$id = $_POST['id'];
	$msg = ($reg_object->update_student_profile($fname, $lname, $sg, $state, $gender, $date_of_enlistment, $command, $date_last_promoted, $qualification, $apnumber,$year,$course, $leaves_on, $id));
	echo($msg);
}
if (isset($_POST['register_staff'])) {
	
	$staff_object = new Staff($db);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sg = $_POST['position'];
	$state = $_POST['state'];
	$gender = $_POST['gender'];
	$username = $_POST['username'];
	$date_of_enlistment = $_POST['date_of_enlistment'];
	$role = $_POST['role'];
	$date_last_promoted = $_POST['date_last_promoted'];
	$qualification = $_POST['qualification'];
	$year = $_POST['year'];

	$msg = ($staff_object->set_staff($fname, $lname, $username, $state, $role, $gender, $qualification, $year, $sg, $date_of_enlistment, $date_last_promoted));
	echo($msg);
}

if (isset($_POST["edit_staff"])) {
	$staff_object = new Staff($db);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$sg = $_POST['position'];
	$state = $_POST['state'];
	$gender = $_POST['gender'];
	$date_of_enlistment = $_POST['date_of_enlistment'];
	$role = $_POST['role'];
	$date_last_promoted = $_POST['date_last_promoted'];
	$qualification = $_POST['qualification'];
	$year = $_POST['year'];
	$username = $_POST['username'];
    $msg = $staff_object->update_staff($fname, $lname,$state, $role, $gender, $qualification, $year, $sg, $date_of_enlistment, $date_last_promoted, $username);
    echo($msg);
}

if (isset($_POST["add_course"])) {
	$course_object = new Course($db);
	$course = $_POST['course_name'];

    $msg = $course_object->set_course($course);
    echo($msg);
}

if (isset($_POST["add_course_no"])) {
	$course_object = new Course($db);
	$year = empty($_POST['year']) ? "" : $_POST['year'];
	$course_num = empty($_POST['course_num']) ? "" : $_POST['course_num'];

    $msg = $course_object->set_course_number($year, $course_num);
    echo($msg);
}

if (isset($_POST["assign_course"])) {
	$course_object = new Course($db);
	$course = $_POST['course'];
	if (!empty($_POST["lecturer"])) {
		$lecturer = $_POST["lecturer"];
	} else{
		$lecturer = [];
	}
	

	$msg = $course_object->assign_course($course,$lecturer);
	echo($msg);
}

// get sessions

if (isset($_SESSION["admin"])) {
	$session = $_SESSION["admin"];
} else if(isset($_SESSION["lecturer"])) {
	$session = $_SESSION["lecturer"];
} else if(isset($_SESSION["cordinator"])) {
	$session = $_SESSION["cordinator"];
} 

// staff change password
if (isset($_POST['change_pass'])) {
	$staff_object = new Staff($db);
	$pass= $_POST['pass'];
	$c_pass = $_POST['c_pass'];
	$msg = $change_pass = $staff_object->change_pass($pass, $c_pass, $session);
	echo $msg;
}


// student change password
if (isset($_POST['std_change_pass'])) {
	$staff_object = new Staff($db);
	$pass= $_POST['pass'];
	$c_pass = $_POST['c_pass'];
	$msg = $change_pass = $staff_object->change_pass($pass, $c_pass, $session);
	echo $msg;
}

//lecturer to delete a question
if (isset($_POST['delete_q'])) {
	$staff_object = new Staff($db);
	$table= $_POST['c_id'];
	$q_id = $_POST['q_no'];

	$msg = $staff_object->delete_question($table, $q_id);
	echo $msg;
}

if (isset($_POST["delete_student"])) {
	$del = new Students($db);
	$id = $_POST["ap"];
	$msg = $del->delete_student($id);
	echo $msg;
}
