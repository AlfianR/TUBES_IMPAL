<?php
include "configuser.php";

	class User{

		public $db;

		public function __construct(){
			$this->db = new mysqli("localhost", "root","", "datauser");

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** PROSES REGISTRASI***/
		public function reg_user($username, $password,$name){

			$password = md5($password);
			$sql="SELECT * FROM userfakultas WHERE uname='$username'";
			
			//VALIDASI USERNAME
			if ($count_row == 0){
				$sql1="INSERT INTO userfakultas SET username='$username', password='$password', name='$name', fakultas='$nama_fakultas'";
				$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			}
			else { return false;}
		}

		/*** PROSES LOGIN ***/
		public function check_login($username, $password){

        	$password = md5($password);
			$sql2="SELECT uid from users WHERE username='$username', password='$password', name='$name', fakultas='$nama_fakultas'";

			//VALIDASI USERNAME
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;

	        if ($count_row == 1) {
	            $_SESSION['login'] = true;
	            $_SESSION['id'] = $user_data['id'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}
    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }

	    public function user_logout() {
	        $_SESSION['login'] = FALSE;
	        session_destroy();
	    }

	}

?>