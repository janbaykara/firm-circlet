<?php

class User extends DatabaseObject {

	function register($data) {
		$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT, ['cost'=>10]);
		unset($data['confirm']);
		unset($data['submit']);

		$details = $DB->row(array("table" => $TBL_USERS, "condition" => "email = '$data[email]'"));
      
		if (isset($details['name'])) {
            return false;
		} else {
          $DB->insert("users", $data);
		  return true;
        }
	}

	function login($email,$password) {
		$hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>10]);

		$details = $DB->row(array("table" => $TBL_USERS, "condition" => "email = '$email'"));
      
		if (!isset($details['name'])) {
            return false;
		} elseif (password_verify($password, $hash) && $email = $details['email']) {
			$_SESSION['logged'] = true; #Replace with Session class
            $_SESSION['access'] = $details['access'];
			$_SESSION['user_id'] = $details['id'];
            $_SESSION['userdata'] = $details;
			return true;
            echo "Success: $details[password] == $password $email = $details[email]";
		} else {
			return false;
            echo "Wrong pw/em: $details[password] == $password $email = $details[email]";
		}
	}
  
    function logout() {
      session_destroy(); #Replace with Session class
      return;
    }
}