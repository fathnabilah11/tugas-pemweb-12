<?php

include("koneksi.php");


if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];;
    $email = $_POST['email'];;
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $jkel = $_POST['jkel'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $saudara = $_POST['saudara'];
    $warga_negara = $_POST['warga_negara'];
    $penyakit = $_POST['penyakit'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $prestasi = $_POST['prestasi'];
    $hobi = $_POST['hobi'];
    $nama_a = $_POST['nama_a'];
    $pendidikan_a = $_POST['pendidikan_a'];
    $pekerjaan_a = $_POST['pekerjaan_a'];
    $telp_a = $_POST['telp_a'];
    $nama_i = $_POST['nama_i'];
    $pendidikan_i = $_POST['pendidikan_i'];
    $pekerjaan_i = $_POST['pekerjaan_i'];
    $telp_i = $_POST['telp_i'];

    $sql = "INSERT INTO peserta VALUES ('','$nama', '$email', '$tempat_lahir', '$tanggal', '$bulan','$tahun', '$jkel', '$agama', '$alamat', '$telp','$saudara', '$warga_negara', '$penyakit', '$tinggi', '$berat','$prestasi', '$hobi', '$nama_a', '$pendidikan_a', '$pekerjaan_a', '$telp_a', '$nama_ii', '$pendidikan_i', '$pekerjaan_i', '$telp_i')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: form.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: form.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}


?>