<?php 

$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, "/cbt/") || strpos($url, "/admin/") || strpos($url, "/staff/") || strpos($url, "/cordinator/")) {
    require_once "../php/classes/init.php";
    include_once "../php/classes/student.class.php";
    include_once "../php/classes/staff.class.php";
    include_once "../php/classes/course.class.php";
} else {
    require "php/classes/init.php";
    include_once "php/classes/student.class.php";
    include_once "php/classes/staff.class.php";
    include_once "php/classes/course.class.php";
}



if(session_id()) {

} else {
    session_start();
}

$db = new Init();
$student_obj = new Students($db);
$staff_obj = new Staff($db);
$course_obj = new Course($db);

$student_obj->is_due();

//returns number of active students
$no_active_students = $student_obj->no_active_students();

//returns total number of students
$total_students = $student_obj->total_students();


//returns all the students
$get_students = $student_obj->get_students();

//return a student for the user

if (isset($_SESSION['student'])) {
    $get_student = $student_obj->get_student($_SESSION['student']);
    if (isset($_GET['cat'])) {
        $results = $student_obj->get_result($_SESSION['student'], $_GET["cat"]);
    }
    // $done = $student_obj->done($_SESSION["done"]);
}

//returns profile of students
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $staff_student_profile = $student_obj->get_student_profile($id);
}
// returns students for index
$get_students_index = $student_obj->get_active_students(10);
$get_students_view= $student_obj->get_active_students(20000000000000000);

//returns all the staff
$get_staff = $staff_obj->get_staff();

//returns profile of staff
if (isset($_GET["user"])) {
    $username = $_GET["user"];
    $staff_profile = $staff_obj->get_staff_profile($username);
}
if (isset($_SESSION['lecturer'])) {
    $staff_profile = $staff_obj->get_staff_profile($_SESSION['lecturer']);
}


//returns total number of staff
$total_staff = $staff_obj->total_staff();

//profile of logged in staff

foreach ($_SESSION as $key => $value) {
    $profile = $staff_obj->profile($key,$value);
} 






// get all courses
$get_courses = $course_obj->get_courses();

// get all courses and lecturers
$get_course_details = $course_obj->get_course_lecturer();
function abc( $key, $value) {
    $c = [];
    $c["title"] = $key;
    $c["lecturer"] = $value;
    return $c;
}

if (isset($_SESSION['lecturer'])) {

    $get_exam_setter = $course_obj->get_course_lecturer_two($_SESSION['lecturer']);
}

// if (isset($_SESSION['cordinator'])) {
//     $get_exam_dbname = $course_obj->get_course_cord();
//     $results = $staff_obj->get_results();
// }


// get course number
$get_course_num = $course_obj->get_course_number();





