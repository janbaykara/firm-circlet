<?php

class User extends DatabaseObject {

	function register($data) {
		$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT, ['cost'=>10]);
		unset($data['confirm']);
		unset($data['submit']);

		//$details = $DB->row(array("table" => $TBL_USERS, "condition" => "email = '$data[email]'"));
      
        $q = $this->PDO->query("DESCRIBE users");
      
		if ($this->PDO->query("SELECT email FROM users WHERE email = '$data[email]'")->fetchAll(PDO::FETCH_ASSOC)) {
          echo "Account already exists.";
		} else {
          echo "Account successfully registered!";
        }
	}

	function login($email,$password) {
	
      $hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>10]);
      
      $details = $this->PDO->query("SELECT * FROM users WHERE email = '$email'")->fetchAll(PDO::FETCH_ASSOC);
      $thisRecord = $details[0];

      if ($details === null) {
          //return false;
          header('HTTP/1.0 401 Unauthorized');
          echo "No such user";
      } elseif (password_verify($thisRecord['password'], $hash) && $email = $thisRecord['email']) {
          $_SESSION['logged'] = true; #Replace with Session class
          $_SESSION['user_id'] = $thisRecord['id'];
          $_SESSION['userdata'] = $thisRecord;
          //return true;
          echo "Success";
          header('HTTP/1.0 202 Accepted');
          //header("Location: http://www.yahoo.com?t=" . $test);
      } else {
          echo "Wrong pw/em";
          //return false;
          header('HTTP/1.0 401 Unauthorized');
      }
	}
  
    function logout() {
      session_destroy(); #Replace with Session class
      return;
    }
}