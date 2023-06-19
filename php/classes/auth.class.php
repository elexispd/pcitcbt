<?php 
/**
* 
*/

class Auth {

	private $db;

	function __construct($db) {
		$this->db = $db;
	}

	// admin login 
	public function admin_login(string $role, $password) {
		$role = "admin";
		if (empty($role) || empty($password)) {
			return "Fields cannot be empty";
		} else {
			$role = trim($role);
			$role = htmlspecialchars($role);

			$sql = "SELECT * FROM staff WHERE role = ?";
			$stmt = $this->db->run($sql, [$role]);
			if ($stmt->rowCount() > 0) {
				$result = $stmt->fetch();
				$decript = password_verify($password, $result['password']);
				if ($decript != false) {
					$_SESSION['admin'] = $result["role"];
					return "login successful";
					header("location:index.php");
				} else {
					return "incorrect password";
				}
			} else {
				return "incorrect login details";
			}
		}
	}

	// Cordinator login 
	public function cordinator_login(string $role, $password) {
		if (empty($role) OR empty($password)) {
			return "Fields cannot be empty";
		} else {
			$role = trim($role);
			$role = htmlspecialchars($role);
			if ($role == "cordinator") {
				$sql = "SELECT * FROM staff WHERE role = ?";
				$stmt = $this->db->run($sql, [$role]);
				if ($stmt->rowCount() > 0) {
					$result = $stmt->fetch();
					$decript = password_verify($password, $result['password']);
					if ($decript != false) {
						$_SESSION['cordinator'] = $result["role"];
						return "login successful";
					} else {return "invalid password";}
				}
			} else {
				return "incorrect login details";
			}

		}
	}

	// Lecturer login 
	public function staff_login(string $username, $password) {
		if (empty($username) OR empty($password)) {
			return "Fields cannot be empty";
		} else {
			$username = trim($username);
			$username = htmlspecialchars($username);

			$sql = "SELECT * FROM staff WHERE username = ?";
			$stmt = $this->db->run($sql, [$username]);
			if ($stmt->rowCount() > 0) {
				$result = $stmt->fetch();
				$decript = password_verify($password, $result['password']);
				if ($decript != false) {
					$_SESSION['lecturer'] = $result["username"];
					return "login successful";
				} else {
					return "incorrect login details";
				}
			} else {
				return "Invalid username";
			}
		}
	}

	// student login 
	public function student_login($ap_number, $password) {
		if (empty($ap_number) || empty($password)) {	
			return "Fields cannot be empty";
		} else {
			$role = trim($ap_number);
			$role = htmlspecialchars($ap_number);

			$sql = "SELECT * FROM students WHERE ap_number = ?";
			$stmt = $this->db->run($sql, [$ap_number]);
			if ($stmt->rowCount() > 0 ) {
				$result = $stmt->fetch();
				$decript = password_verify($password, $result['password']);
				if ($decript != false) {
					$_SESSION['student'] = $result["ap_number"];
					return "login successful";
				} else {
					return "incorrect password";
				}
			} else {
				return "incorrect login details";
			}
		}
	}

	// change password section

	// admin change password
	public function a_change_password($role) {}

	// course cordinator
	public function c_change_password($role) {}

	// staff
	public function s_change_password($username) {}

	// student
	public function st_change_password($username) {}

}

