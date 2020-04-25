<?php
	$server = "localhost:3307";
	$user = "root";
	$password = "";
	$nama_database = "tugas_10";

	$koneksi = mysqli_connect($server, $user, $password, $nama_database);

	if( !$koneksi ){
		die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}else{
	echo "(Tersambung)";
	}
?>