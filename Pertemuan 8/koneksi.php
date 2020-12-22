<?php
	$host = "localhost"; //Mendeklarasikan variabel host yang berisikan "localhost"
	$user = "root"; // Mendeklarasikan variabel host yang berisikan "root"
	$pass = ""; //Mendeklarasikan variabel pass yang berisi kosong
	$dbname = "php_crud"; // Mendeklarasikan variabel dbname yang berisikan php_crud

	$conn = new mysqli($host, $user, $pass, $dbname);

	if($conn->connect_error){
		die('Koneksi Gagal : '. $conn->connect_error);
	}
?>