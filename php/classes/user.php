<?php
/**
 * @author     David Hopson <http://frontierlabs.co.uk>
 * @license    As long as you reference the author, you can do what you want with this code
 * @version    1
 */

class User {
  
    private $DB         = $GLOBALS['DB'];
    private $TBL_USERS  = $GLOBALS['TBL_USERS'];
    private $PRIVATEKEY = $GLOBALS['PRIVATEKEY'];
  
	function getUser($query,$condition="id") {

		$user_datapoints = $DB->row(array("table" => $TBL_USERS, "condition" => "$condition = $query"));
		unset($user_datapoints['password']);
        unset($user_datapoints['access']);
        unset($user_datapoints['email']);
      
        foreach($user_datapoints as $field => $value) {
          $this->$field = $value;
        }

		return $user_datapoints;
	}

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