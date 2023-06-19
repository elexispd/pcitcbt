<?php 

class Students {
	private $db;
	private $first_name;
	private $last_name;
	private $sg;
	private $state_of_origin;
	private $gender;
	private $date_of_enlistment;
	private $command;
	private $date_last_promoted;
	private $qualification;
	private $ap_number;
	private $year_of_birth;
	private $course_ends;
	private $course_number;
	// private $file;
	private $msg = [];

	function __construct($db) {
		$this->db = $db;
	}
	//, $lname, $sg, $state, $gender, $enlist, $command, $promote, $qualification, $apnnumber, $year, $ends, $no

	// , $enlist, $command, $promote, $qualification, $apnnumber, $year, $ends, $no
	public function set_student($fname, $lname, $sg, $state, $gender, $enlist, $command, $promote, $qualification, $apnumber, $year, $ends, $no) {
		
		$this->first_name = $fname;
		$this->last_name = $lname;
		$this->sg = $sg;
		$this->state_of_origin = $state;
		$this->gender = $gender;
		$this->date_of_enlistment = $enlist;
		$this->command = $command;
		$this->date_last_promoted = $promote;
		$this->qualification = $qualification;
		$this->ap_number = $apnumber;
		$this->year_of_birth = $year;
		$this->course_ends = $ends;
		$this->course_number = $no;
		$this->file = "";
		

		$this->set_fname();
		$this->set_lname();
		$this->set_gender();
		$this->set_sg();
		$this->set_state();
		$this->set_enlistment();
		$this->set_command();
		$this->set_promoted();
		$this->set_qualification();
		$this->set_ap_number();
		$this->set_year();
		$this->set_course();
		// $this->set_file($file);
		

		if(empty($this->msg)) {
			if ($this->gender == "MALE") {
				$this->file = "../images/students/male.png";
			} else if($this->gender == "FEMALE") {
				$this->file = "../images/students/female.png";
			}
			
					$password = password_hash($this->ap_number, PASSWORD_DEFAULT);
					$sql = "INSERT INTO students(first_name, last_name, sg, state_of_origin, gender, password, date_of_enlistment, command, date_last_promoted, qualification, ap_number, year_of_birth, course_no, course_ends, photo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
					$stmt = $this->db->run($sql, [$this->first_name, $this->last_name, $this->sg, $this->state_of_origin, $this->gender, $password, $this->date_of_enlistment, $this->command, $this->date_last_promoted, $this->qualification, $this->ap_number, $this->year_of_birth, $this->course_number, $this->course_ends, $this->file]);
					if ($stmt->rowCount() > 0) {
						$this->message(1, "Registration successful");
					} else {
						$this->message(0, "Data not inserted");
					}			

			// } 
			// else {
			// 	if ($this->gender == "Male") {
			// 		$this->file = "images/students/male.png";
			// 	} else if ($this->gender == "Female") {
			// 		$this->file = "images/students/female.png";
			// 	}
			// 		$password = password_hash($this->ap_number, PASSWORD_DEFAULT);
			// 		$sql = "INSERT INTO students(first_name, last_name, sg, state_of_origin, gender, password, date_of_enlistment, command, date_last_promoted, qualification, ap_number, year_of_birth, course_no, course_ends, photo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			// 		$stmt = $this->db->run($sql, [$this->first_name, $this->last_name, $this->sg, $this->state_of_origin, $this->gender, $password, $this->date_of_enlistment, $this->command, $this->date_last_promoted, $this->qualification, $this->ap_number, $this->year_of_birth, $this->course_number, $this->course_ends]);
			// 		if ($stmt->rowCount() > 0) {
			// 			$this->message(1, "Registration successful");
			// 		}
		}

		return json_encode($this->msg);
	}

	public function set_fname() {
		$this->first_name = htmlspecialchars(trim($this->first_name));
		$this->first_name = ucfirst($this->first_name);
		if (empty($this->first_name)) {
			$this->message(0, "First name is empty");
		}
		else if (!preg_match("/^[a-zA-Z]*$/", $this->first_name)) {
			$this->message(0, "First name should have only letters");
		}
	}
	private function set_lname() {
		$this->last_name = htmlspecialchars(trim($this->last_name));
		$this->last_name = ucfirst($this->last_name);
		if (empty($this->last_name)) {
			$this->message(0, "last name is empty");
		}
		else if (!preg_match("/^[a-zA-Z]*$/", $this->last_name)) {
			$this->message(0, "Last name should have only letters");
		}
	}
	private function set_sg() {
		$this->sg = htmlspecialchars(trim($this->sg));
		$this->sg = ucfirst($this->sg);
		if (empty($this->sg)) {
			$this->message(0, "SG is empty");
		}
		else if (!preg_match("/^[a-zA-Z]*$/", $this->sg)) {
			$this->message(0, "SG should have only letters");
		}
	}
	public function set_state() {
		$this->state_of_origin = htmlspecialchars(trim($this->state_of_origin));
		$this->state_of_origin = ucfirst($this->state_of_origin);
		if (empty($this->state_of_origin)) {
			$this->message(0, "State of origin is empty");
		}
		else if (!preg_match("/^[a-zA-Z ]*$/", $this->state_of_origin)) {
			$this->message(0, "State should have only letters");
		}
	}
	public function set_gender() {
		$this->gender = htmlspecialchars(trim($this->gender));
		$this->gender = ucfirst($this->gender);
		if (empty($this->gender)) {
			$this->message(0, "Gender is empty");
		}
		elseif (!preg_match("/^[a-zA-Z]*$/", $this->gender)) {
			$this->message(0, "gender should have only letters");
		} 
	}
	public function set_enlistment() {
		// $date = explode("-", $enlist);
		// $m = $date[1];
		// $d = $date[2];
		// $y = $date[0];

		// if (checkdate($m, $d, $y) != TRUE) {
		// 	$this->message(0, "wrong enlistment date");
		// }
		if (empty($this->date_of_enlistment)) {
			$this->message(0, "Date of enlistment is empty");
		}
	}

	public function set_command() {
		$this->command = htmlspecialchars(trim($this->command));
		$this->command = ucfirst($this->command);
		if (empty($this->command)) {
			$this->message(0, "Command is empty");
		}
		elseif (!preg_match("/^[a-zA-Z 0-9]*$/", $this->command)) {
			$this->message(0, "Command should have only letters");
		}
	}
	public function set_promoted() {
	// 	$date = explode("-", $promoted);
	// 	$m = $date[1];
	// 	$d = $date[2];
	// 	$y = $date[0];

	// 	if (checkdate($m, $d, $y) != TRUE) {
	// 		$this->message(0, "wrong promotion date");
	// 	}
	if (empty($this->date_last_promoted)) {
		$this->message(0, "Date of promotion is empty");
	}

	}

	public function set_qualification() {
		$this->qualification = htmlspecialchars(trim($this->qualification));
		$this->qualification = ucfirst($this->qualification);
		if (empty($this->qualification)) {
			$this->message(0, "qualification is empty");
		}
		elseif (!preg_match("/^[a-zA-Z ]*$/", $this->qualification)) {
			$this->message(0, "qualification should have only letters");
		}
	}

	public function set_ap_number() {
		$this->ap_number = htmlspecialchars(trim($this->ap_number));
		$this->ap_number = ucfirst($this->ap_number);
		if (empty($this->ap_number)) {
			$this->message(0, "AP Number is empty");
		}
		elseif (!preg_match("/^[0-9]*$/", $this->ap_number)) {
			$this->message(0, "Invalid ap_number");
		} 
		// else {
		// 	$sql = "SELECT ap_number FROM students WHERE ap_number = ?";
		// 	$stmt = $this->db->run($sql,[$this->ap_number]);
		// 	$result = $stmt->rowCount();
		// 	if ($result > 0) {
		// 		$this->message(0, "AP/F/number already in use");
		// 	}

		// }
	}

	public function set_year() {
		$this->year_of_birth = htmlspecialchars(trim($this->year_of_birth));
		$this->year_of_birth = ucfirst($this->year_of_birth);
		if (empty($this->year_of_birth)) {
			$this->message(0, "Year of birth is empty");
		}
		elseif (!preg_match("/^[0-9]*$/", $this->year_of_birth)) {
			$this->message(0, "Invalid year");
		}
	}

	public function set_ends() {
	// 	$date = explode("-", $ends);
	// 	$m = $date[1];
	// 	$d = $date[2];
	// 	$y = $date[0];

	// 	if (checkdate($m, $d, $y) != TRUE) {
	// 		$this->message(0, "wrong promotion date");
	// 	}
		if (empty($this->ap_number)) {
			$this->message(0, "Course duration is empty");
		}
	}
	
	public function set_course() {
		$this->course_number = htmlspecialchars(trim($this->course_number));
		$this->course_number = ucfirst($this->course_number);
		if (empty($this->course_number)) {
			$this->message(0, "Course is empty");
		}
		elseif (!preg_match("/^[0-9]*$/", $this->course_number)) {
			$this->message(0, "Invalid course number");
		}
	}


	public function total_students() {
		$sql = "SELECT * FROM students";
		$stmt = $this->db->run($sql);
		return $stmt->rowCount();
	}
	
	public function get_student($id) {
		$id = htmlspecialchars($id);
		$sql = "SELECT * FROM students WHERE ap_number = ?";
		$stmt = $this->db->run($sql, [$id]);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetch();
			return $result;
		}
	}
	public function get_students() {
		// $id = htmlspecialchars($id);
		$sql = "SELECT * FROM students ORDER BY documented_at DESC, course_no DESC,  first_name";
		$stmt = $this->db->run($sql);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		}
	}

	public function get_student_profile($id) {
		$id = htmlspecialchars($id);
		$sql = "SELECT * FROM students WHERE ap_number = ?";
		$stmt = $this->db->run($sql, [$id]);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		}
	}

	public function update_student_profile($fname, $lname, $sg, $state, $gender, $enlist, $command, $promote, $qualification, $apnumber, $year, $no,$ends,$id) {
		$this->first_name = $fname;
		$this->last_name = $lname;
		$this->sg = $sg;
		$this->state_of_origin = $state;
		$this->gender = $gender;
		$this->date_of_enlistment = $enlist;
		$this->command = $command;
		$this->date_last_promoted = $promote;
		$this->qualification = $qualification;
		$this->ap_number = $apnumber;
		$this->year_of_birth = $year;
		$this->course_ends = $ends;
		$this->course_number = $no;

		$this->set_fname();
		$this->set_lname();
		$this->set_gender();
		$this->set_sg();
		$this->set_state();
		$this->set_enlistment();
		$this->set_command();
		$this->set_promoted();
		$this->set_qualification();
		$this->set_ap_number();
		$this->set_year();
		$this->set_course();

		if (empty($this->msg)) {
			$id = htmlspecialchars($id);
			$sql = "UPDATE students SET first_name = ?, last_name = ?,  sg = ?,  state_of_origin = ?,  gender = ? , date_of_enlistment = ? , command = ? , date_last_promoted = ? , qualification = ?, ap_number = ?, year_of_birth = ?, course_no = ?, course_ends =?  WHERE ap_number = ?";
			$stmt = $this->db->run($sql, [$this->first_name,$this->last_name,$this->sg,$this->state_of_origin,$this->gender,$this->date_of_enlistment,$this->command,$this->date_last_promoted,$this->qualification,$this->ap_number,$this->year_of_birth,$this->course_number,$this->course_ends,$id]);
			if ($stmt->rowCount() > 0) {
				$this->message(1, "Profile updated");
			} else {
				$this->message(0, "No changes was made");
			}
		} 
		
		return json_encode($this->msg);
	}

	public function get_active_students($limit) {
		$sqll = "SELECT * FROM students WHERE status = 1 ORDER BY first_name ASC LIMIT $limit ";
		$stmtt = $this->db->run($sqll);
		return $stmtt->fetchAll();
	}

	public function no_active_students() {
		$sqll = "SELECT COUNT(*) AS total FROM students WHERE status = 1";
		$stmtt = $this->db->run($sqll);
		$result = $stmtt->fetch();
		return $result["total"];
	}

	public function get_table($name) {
		$name = strtolower(trim($name));
			$sql = "SHOW TABLES LIKE '%".$name."%'";
			$stmt = $this->db->run($sql);
			$result = $stmt->fetchAll(PDO::FETCH_NUM);
			$b = "";
			foreach ($result as $value) {
				$b =$value[0];
			}

			return $b;
	} 
			//MAIN METHOD: UNCOMMENT AFTER TESTING

	public function get_course_questions($name, $id, $c_no, $student_id) {
		$table = $this->get_table($name);
		$year = Date("Y");

		
		$sq = "SELECT * FROM result WHERE student_id = ? AND course_id = ? AND submitted_at = CURRENT_DATE";
		$st = $this->db->run($sq, [$student_id, $id]);
		if ($st->rowCount() > 0) {
			return 1;
		} else {
			$sql = "SELECT * FROM $table WHERE course_id = ? AND year = ? AND status = ? AND course_no = ? AND DATE(exam_date) = CURRENT_DATE   ORDER BY RAND() LIMIT 20";
			$stmt = $this->db->run($sql, [$id, $year, 1, $c_no]);
			return $stmt->fetchAll();
		}
	}


	/*---------for practice exam------------*/
	public function get_practice_questions($name, $id, $c_no, $student_id) {
		$table = $this->get_table($name);
			$sql = "SELECT * FROM $table WHERE course_id = ? AND category = ? ORDER BY RAND() LIMIT 20";
			$stmt = $this->db->run($sql, [$id, 'practice']);
			return $stmt->fetchAll();
	}

	public function change_pass($pass, $cpass, $user) {
		if (empty($pass) || empty($cpass)) {
			$this->message(0, "All fields must be filled");
		} else if($pass != $cpass) {	
			$this->message(0, "Passwords don't match");
		} else {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			$sql = "UPDATE students SET password = ? WHERE username = ?";
			$stmt = $this->db->run($sql, [$password, $user]);
			if ($stmt->rowCount() > 0) {
				$this->message(1, "Password has been changed successfully");
			} else {
				$this->message(0, "Something went wrong. Try again");
			}
		}

		return json_encode($this->msg);
	}


	public function set_result($name, $question_id, $student_id, $c_no, $course_id, $ans, $cat, $duration, $time) {
		$total = 0;
		$table = $this->get_table($name);
		$year = date("Y");

		if ($cat == 'practice') {
			$sql = "SELECT *, 
				(SELECT DISTINCT(COUNT(*))  From $table WHERE category = ?) AS qu
				FROM $table  WHERE course_id = ? AND category = ?";
				$stmt = $this->db->run($sql, [$cat, $course_id, $cat]);
			$result = $stmt->fetchAll();
		} else {
			$cat = htmlspecialchars($cat."_score");
			/*---uncomment when deploying----*/
			$sql = "SELECT * FROM $table WHERE course_id = ? AND year = ? AND course_no = ?";
			$stmt = $this->db->run($sql, [$course_id, $year, $c_no]);
			$result = $stmt->fetchAll();
			$date = date("Y-m-d");
			//check if the the user has already submitted

			/*----------PLEASE, UNCOMMENT AFTER TESTING.. THIS IS FOR FOR DEPLOYMENT PURPOSE------------*/
			$sq = "SELECT * FROM result WHERE student_id = ? AND course_id = ? AND submitted_at = CURRENT_DATE";
			$st = $this->db->run($sq, [$student_id, $course_id]);
			if ($st->rowCount() > 0) {
				header("location: ../../exam.php");
			} else {
				if (!empty($ans)) {
					$total = 0;
					foreach ($result as $key => $value) {
						$key = $key+1;
						if ($ans[$value['question_id']] == $value["answer"]) {
							$total = $total + 1;
						} 
					}
				}
				$sqll = "INSERT INTO result (student_id, course_id, $cat, submitted_at) VALUES (?, ?, ?, ?)";
				$stmtt = $this->db->run($sqll, [$student_id, $course_id, $total, $date]);

				if ($stmtt->rowCount() > 0) {
					header("location: ../../cbt/home.php");
				}
			}
			
		}
		
		if ($cat == 'practice') {
			if (!empty($ans)) {
				$total = 0;
				foreach ($result as $key => $value) {
					$key = $key+1;
					if ($ans[$value['question_id']] == $value["answer"]) {
						$total = $total + 1;
					} 
				}
			}
			$_SESSION["total_q"] =  $value["qu"];
			$_SESSION["att"] =  count($ans);
			$_SESSION["score"] =  $total;
			$t = $duration - $time;
			$_SESSION["time"] = $t;
			
			header("location: ../../cbt/score");
		}
		
		
	}


	public function get_result($id, $cat) {

		$id = htmlspecialchars($id);
		$cat = htmlspecialchars($cat."_score");

		$sql = "SELECT MAX(r.$cat) AS $cat, c.course_title, c.course_id
				FROM result AS r 
				Join courses AS c
				ON r.course_id = c.course_id
				WHERE r.student_id = ? GROUP BY c.course_id";
		$stmt = $this->db->run($sql, [$id]);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		}
	}

	public function get_total_result() {
		$sql = "SELECT
				     s.first_name
				    , s.last_name
				    ,MAX(IF(c.course_id = 963976, r.exam_score, 0)) as `database`
				    ,MAX(IF(c.course_id = 894259, r.exam_score, 0)) as `excel`
				    ,MAX(IF(c.course_id = 758481, r.exam_score, 0)) as `ca`
				    ,MAX(IF(c.course_id = 490032, r.exam_score, 0)) as `english`
				    ,MAX(IF(c.course_id = 514118, r.exam_score, 0)) as `powerpoint`
				    ,MAX(IF(c.course_id = 297435, r.exam_score, 0)) as `typing`
				    ,MAX(IF(c.course_id = 185162, r.exam_score, 0)) as `word`
				    ,MAX(IF(c.course_id = 226931, r.exam_score, 0)) as `internet`
				    ,MAX(IF(c.course_id = 159167, r.exam_score, 0)) as `security`
                    ,MAX(IF(c.course_id = 963976, r.mca_score, 0)) as `d`
				    ,MAX(IF(c.course_id = 894259, r.mca_score, 0)) as `e`
				    ,MAX(IF(c.course_id = 758481, r.mca_score, 0)) as `c`
				    ,MAX(IF(c.course_id = 490032, r.mca_score, 0)) as `en`
				    ,MAX(IF(c.course_id = 514118, r.mca_score, 0)) as `p`
				    ,MAX(IF(c.course_id = 297435, r.mca_score, 0)) as `t`
				    ,MAX(IF(c.course_id = 185162, r.mca_score, 0)) as `w`
				    ,MAX(IF(c.course_id = 226931, r.mca_score, 0)) as `i`
				    ,MAX(IF(c.course_id = 159167, r.mca_score, 0)) as `s`
				FROM result r
				LEFT JOIN courses AS c ON r.course_id = c.course_id
				LEFT JOIN students AS s ON s.ap_number = r.student_id
				GROUP BY s.ap_number";
		$stmt = $this->db->run($sql);
		if ($stmt->rowCount() > 0) {
			return $stmt->fetchAll();
		} else {
			$this->message(0, "No Record Found");
			return $this->msg;
		}
	}

	public function message($key, $value){
        $this->msg["status"] = $key;
		$this->msg["message"] = $value;
	}

	public function delete_student($id) {
		$sql = "DELETE FROM students WHERE ap_number = ?";
		$stmt = $this->db->run($sql, [$id]);
		if ($stmt->rowCount() > 0) {
			$this->message(1,"Student Deleted");
		} else{
			$this->message(0,"Something went wrong");
		}
		return json_encode($this->msg);
	}

	// marks a student inactive or active
	public function is_due() {
		$sqlll = "UPDATE students
				SET status = IF(course_ends < CURDATE(), 0, 1)" ;
		$st = $this->db->run($sqlll);
	}


}