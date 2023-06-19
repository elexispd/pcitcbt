<?php
session_start();
require "../classes/init.php";
include_once "../classes/auth.class.php";

$db = new Init();

if (isset($_POST["admin_login"])) {
	$admin_object = new Auth($db);
	$role = $_POST['role'];
	$password = $_POST['password'];

	$msg = $admin_object->admin_login($role, $password);
	echo $msg;	
}
if (isset($_POST["staff_login"])) {
	$staff_object = new Auth($db);
	$username = $_POST['username'];
	$password = $_POST['password'];

	$msg = $staff_object->staff_login($username, $password);
	echo $msg;	
}

if (isset($_POST["cord_login"])) {
	$cord_object = new Auth($db);
	$username = $_POST['username'];
	$password = $_POST['password'];

	$msg = $cord_object->cordinator_login($username, $password);
	echo $msg;	
}

if (isset($_POST['student_login'])) {
	$std_obj = new Auth($db);
	$ap_number = $_POST['username'];
	$pass = $_POST['password'];

	$msg = $std_obj->student_login($ap_number, $pass);
	echo $msg;
}