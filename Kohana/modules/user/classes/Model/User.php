<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Useradmin_User {

	// This class can be replaced or extended
	public function change_password($password_array){
		if($password_array['password']==$password_array['password_confirm']){
			$this->password = $password_array['password'];
			return $this->save();
		} else {
			return false;
		}
	}

} // End User Model