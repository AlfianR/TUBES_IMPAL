<?php
include "db_barang.php";

	class Barang{

		public $db;

		public function __construct(){
			$this->db = new mysqli("localhost", "root","", "barang_oop");

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		/*** PROSES INPUT DATA***/
		public function reg_barang($nama_barang, $status_barang){
			$sql1="INSERT INTO invenbarang SET nama_barang='$nama_barang', status_barang='$status_barang'";
			$result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
        	return $result;
			}
		}

?>