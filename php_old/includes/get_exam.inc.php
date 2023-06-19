<?php 
 // require_once "../php/classes/init.php";
include_once "../php/classes/student.class.php";
include_once "../php/classes/staff.class.php";
include_once "../php/classes/course.class.php";

if(session_id()) {

} else {
    session_start();
}

$db = new Init();
$student_obj = new Students($db);
$staff_obj = new Staff($db);
$course_obj = new Course($db);

if (isset($_GET["c_id"]) && isset($_GET['id'])) {
    $next_exam_no = $staff_obj->get_question_no($_GET["c_id"]);
    $get_course_q = $staff_obj->get_course_questions($_GET["c_id"], $_GET['id']);
    $get_table = $staff_obj->get_table($_GET["c_id"]);

    $get_questions = $course_obj->get_questions($_GET["c_id"],$_GET['id']);

}
// update/edit exam question
if (isset($_GET["c_id"]) && isset($_GET["q_id"])) {
    $get_questions_edit = $staff_obj->get_q_edit($_GET["c_id"], $_GET["q_id"]);
}
if (isset($_GET["c_id"]) && isset($_GET["co_id"])) {
    $co_no = empty($_GET["co_no"]) ? '' : $_GET["co_no"];
    $cat = empty($_GET["cat"]) ? '' : $_GET["cat"];
    $get_questions = $course_obj->get_c_q_cord($_GET["c_id"], $_GET["co_id"], $co_no, $cat);
    $get_review = $course_obj->get_review($_GET["c_id"], $_GET["co_id"]);
}


// display questions
if (isset($_GET['c_id']) && isset($_GET['id']) && isset($_SESSION['student'])) {
    $c_no = '';
    if (isset($_GET['c_no'])) {
        $c_no = $_GET['c_no'];
    }
    if (isset($_GET['practice'])) {
        $get_e_questions = $student_obj->get_practice_questions($_GET['c_id'], $_GET['id'], $_GET['practice'], $_SESSION["student"]);
    } else {
        $get_e_questions = $student_obj->get_course_questions($_GET['c_id'], $_GET['id'], $c_no, $_SESSION["student"]);
    }

}

if (isset($_SESSION['cordinator'])) {
    $get_exam_dbname = $course_obj->get_course_cord();
    if (isset($_GET["cat"])) {
        $results = $staff_obj->get_results($_GET["cat"]);
    }
    $get_total_result = $student_obj->get_total_result();
}

// if (isset($_GET["cat"])) {
//     $results = $staff_obj->get_results($_GET["cat"]);
// }
//$mca_results = $staff_obj->get_mca_results();

if (isset($_SESSION["lecturer"]) && isset($_GET['cat'])) {
    $id = empty($_GET["id"])?'' : $_GET["id"];
    $course_result = $staff_obj->get_course_result($id, $_GET["cat"]);
}

//display all questions to the lecture for editting
if (isset($_GET['c_id']) && isset($_GET['id']) && isset($_GET['year']) && isset($_GET['co_no']) ) {
    $get_s_questions = $course_obj->get_set_questions($_GET['c_id'], $_GET['id'], $_GET['co_no'], $_GET['year'], $_GET['st'], $_GET['cat']);
}