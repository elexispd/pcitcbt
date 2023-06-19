<?php 
class Course {

	private $msg = [];

	function __construct($db) {
		$this->db = $db;
	}

	public function set_course($course) {
		$course = htmlspecialchars($course);
		$course = trim($course);
		$course = ucwords($course);
		$course_id = rand(1000, 9999).rand(10, 100);
		$sql = "SELECT * FROM  courses WHERE course_title = ?";
		$stmtt = $this->db->run($sql, [$course]);
		if (empty($course)) {
			return "Coure can not empty";
		} else if(!preg_match("/^[a-zA-Z ]*$/", $course)){
			return "Only letters are valid";
		}
		else if ($stmtt->rowCount() > 0) {
			return "course already exist";
		}
		else {
			$sql = "INSERT INTO courses (course_id, course_title) VALUES (?, ?)";
			$stmt = $this->db->run($sql, [$course_id, $course]);
			if ($stmt->rowCount() > 0) {
				$this->create_course($course);
				return "course created successfully";
			}
		}
		//  else {
		// 	$sql = "INSERT INTO courses (course_id, course_title) VALUES (?, ?)";
		// 	$stmt = $this->db->run($sql, [$course_id, $course]);
		// 	if ($stmt->rowCount() > 0) {
		// 		$this->create_course($course);
		// 		return "course created successfully";

		// 	}
		// }
	}

	private function create_course($name) {
		$name_ = explode(' ', $name);
		$table_name = strtolower($name_[0])."_exam";
		$sql = "CREATE TABLE $table_name (
			  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
			  `course_id` int(11) NOT NULL,
			  `lecturer_id` int(11) NOT NULL,
			  `q_no` int(11) NOT NULL,
			  `question` text NOT NULL,
			  `question_id` int(11) NOT NULL,
			  `option_a` text NOT NULL,
			  `option_b` text NOT NULL,
			  `option_c` text NOT NULL,
			  `option_d` text NOT NULL,
			  `answer` varchar(3) NOT NULL,
			  `year` varchar(11) NOT NULL,
			  `course_no` int(2) NOT NULL,
			  `status` int(3) NOT NULL,
			  `duration` int(4) NOT NULL,
			  `exam_date` varchar(11) NOT NULL,
			  `category` varchar(7) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
		$stmt = $this->db->run($sql);
	} 

	public function set_course_number($year, $num) {
		$year = htmlspecialchars($year);
		$num = htmlspecialchars($num);

		if (empty($year)  || empty($num)) {
			return "All fields are required";
		} else if(!preg_match("/^[0-9]*$/", $year)){
			return "invalid date";
		} else if(!preg_match("/^[0-9]*$/", $num)){
			return "invalid course number";
		} else {
			$sql = "SELECT * FROM  course_number WHERE course_year = ? AND course_num = ?";
			$stmtt = $this->db->run($sql, [$year, $num]);
			if ($stmtt->rowCount() > 0) {
				return "course year and number exist";
			} else {
				$sql = "INSERT INTO course_number (course_year, course_num) VALUES (?, ?)";
				$stmt = $this->db->run($sql, [$year, $num]);
				if ($stmt->rowCount() > 0) {
					return "course created successfully";
				}
			}
		}	 
	}

	public function get_courses() {
		$sql = "SELECT * FROM courses";
		$stmt = $this->db->run($sql);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		}
	}
	public function get_course($course_id) {
		$id = htmlspecialchars($id);
		$sql = "SELECT * FROM courses WHERE course_id = ?";
		$stmt = $this->db->run($sql, [$course_id]);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetch();
			return $result;
		}
	}

	// public function get_course_lecturer() {
	// 	$sql = "SELECT c.id, c.course_title, s.first_name, s.last_name, c.course_id
	// 			FROM courses AS c
	// 		    JOIN staff AS s
	// 		    ON c.course_id = s.course_id";
	// 	$stmt = $this->db->run($sql);
	// 	if ($stmt->rowCount() > 0) {
	// 		$result = $stmt->fetchAll();
	// 		return $result;
	// 	} else {
	// 		return "No course yet";
	// 	}
	// }
	public function get_course_lecturer() {
		$sql = "SELECT 
					c.course_title, c.course_id,
				  GROUP_CONCAT(
				  first_name, ' ',
			      last_name, ' ')
			      AS lecturer FROM staff AS s
			     JOIN courses as c
			     ON c.course_id = s.course_id
			     GROUP BY c.course_id";
		$stmt = $this->db->run($sql);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		} else {
			return "No course yet";
		}
	}

	

	public function assign_course($course_id, $lecturer_id) {
		$course_id = htmlspecialchars($course_id);
		// $lecturer_id = htmlspecialchars($lecturer_id);
		// $lecturer_id = explode(",", $lecturer_id);
		if (empty($course_id) || empty($lecturer_id)) {
			$this->message(0,"All fields are required");
		} else {
			foreach ($lecturer_id as $key => $value) {
				$sql = "UPDATE staff SET course_id = ? WHERE lecturer_id = ?";
				$stmt = $this->db->run($sql, [$course_id, $value]);
				if ($stmt->rowCount() > 1) {
					$this->message(1,"Course assignment successful");
				} else {
					$this->message(1,"*Course assignment successful");
				}
			}

		}

		return json_encode($this->msg);
	}

	public function get_course_lecturer_two($username) {
		$sql = "SELECT c.course_title, s.first_name, s.last_name, c.course_id, s.lecturer_id
				FROM courses AS c
			    JOIN staff AS s
			    ON c.course_id = s.course_id WHERE s.username = ?";
		$stmt = $this->db->run($sql, [$username]);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		} else {
			return $this->message(0, "No course yet");
		}
	}

	public function get_course_cord() {
		$sql = "SELECT DISTINCT c.course_title, c.course_id
				FROM courses AS c
			    JOIN staff AS s
			    ON c.course_id = s.course_id";
		$stmt = $this->db->run($sql);
		if ($stmt->rowCount() > 0) {
			$result = $stmt->fetchAll();
			return $result;
		} 
	}

	public function get_course_number() {
		$date = date("Y");
		$sql = "SELECT MAX(course_num) AS num FROM course_number WHERE course_year = ?";
		$stmt = $this->db->run($sql, [$date]);
		$result = $stmt->fetch();
		if ($result == NULL) {
			return $result["num"];
		} else{
			return $result["num"];
		}
	}

	public function get_table($name) {
		$name = strtolower(trim($name));
			$sql = "SHOW TABLES LIKE '".$name."%'";
			$stmt = $this->db->run($sql);
			$result = $stmt->fetchAll(PDO::FETCH_NUM);
			$b = "";
			foreach ($result as $value) {
				$b =$value[0];
			}

			return $b;
	}

	public function get_c_q_cord($name, $id, $co_no, $cat) {
		$table = $this->get_table($name);
		// $num = $this->get_course_number();
		$year = date("Y");
		$sql = "SELECT * FROM $table WHERE course_id = ? AND year = ? AND  course_no = ? AND category = ?";
		$stmt = $this->db->run($sql, [$id, $year, $co_no, $cat]);
		if ($stmt->rowCount() > 0) {
			return $stmt->fetchAll();
		} else {
			return "No Active Question";	
		}	
	}


	public function get_review($name, $id) {
		$table = $this->get_table($name);
		// $num = $this->get_course_number();
		$year = date("Y");
		$sql = "SELECT * FROM $table WHERE course_id = ? GROUP BY year, course_no, category ORDER BY year, course_no DESC";
		$stmt = $this->db->run($sql, [$id]);
		if ($stmt->rowCount() > 0) {
			return $stmt->fetchAll();
		} else {
			return 0;	
		}	
	}

	// get all questions irrespective of the status for the lecturer

	public function get_questions($name, $id) {
		$table = $this->get_table($name);
		$sql = "SELECT * FROM $table WHERE lecturer_id = ? GROUP BY year, course_no, status, category ORDER BY year, course_no DESC";
		$stmt = $this->db->run($sql, [$id]);
		return $stmt->fetchAll();
	}

	//get all question for the staff to edit
	public function get_set_questions($name, $id, $co_no, $year, $stat, $cat) {
		$table = $this->get_table($name);
		$sql = "SELECT * FROM $table WHERE lecturer_id = ? AND course_no = ? AND year = ? AND status = ? AND category = ?";
		$stmt = $this->db->run($sql, [$id, $co_no, $year, $stat, $cat]);
		return $stmt->fetchAll();
	}

	public function abc($key, $value) {
		$this->msg["title"] = $key;
		$this->msg["lecturer"] = $value;
		return $this->msg;
	}


	public function message($key, $value){
        $this->msg["status"] = $key;
		$this->msg["message"] = $value;
	}


}