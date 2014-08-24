<?php

class User {

	function register($data) {
		$data['password'] = hash_hmac("sha512",$data['password'],$PRIVATEKEY);
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
		$password = hash_hmac("sha512",$password,$PRIVATEKEY);

		$details = $DB->row(array("table" => $TBL_USERS, "condition" => "email = '$email'"));
      
		if (!isset($details['name'])) {
            return false;
		} elseif ($details['password'] == $password && $email = $details['email']) {
			$_SESSION['logged'] = true;
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
      session_destroy();
      return;
    }
}