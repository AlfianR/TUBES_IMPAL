<?php
include "db_tanah.php";

	class Tanah{

		public $db;

		public function __construct(){
			$this->db = new mysqli("localhost", "root","", "tanah_oop");

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** PROSES INPUT DATA***/
		public function reg_tanah($lokasi_tanah, $luas_tanah){
			$sql1="INSERT INTO inventanah SET lokasi_tanah='$lokasi_tanah', luas_tanah='$luas_tanah'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        	return $result;
			}
		}

?>