<?php
$servername = "localhost:3307";
$username = "root";
$dbname = "tugas_10";

include "koneksi.php";

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','No');
$sheet->setCellValue('B1','Nama');
$sheet->setCellValue('C1','Email');
$sheet->setCellValue('D1','Tempat Kelahiran');
$sheet->setCellValue('E1','Tanggal Kelahiran');
$sheet->setCellValue('F1','Bulan Kelahiran');
$sheet->setCellValue('G1','Tahun Kelahiran');
$sheet->setCellValue('H1','Jenis Kelamin');
$sheet->setCellValue('I1','Agama');
$sheet->setCellValue('J1','Alamat');
$sheet->setCellValue('K1','No Telepon');
$sheet->setCellValue('L1','Saudara');
$sheet->setCellValue('M1','Warga Negara');
$sheet->setCellValue('N1','Sakit yang diderita');
$sheet->setCellValue('O1','Tinggi Badan');
$sheet->setCellValue('P1','Berat Badan');
$sheet->setCellValue('Q1','Prestasi');
$sheet->setCellValue('R1','Hobi');
$sheet->setCellValue('S1','Nama Ayah');
$sheet->setCellValue('T1','Pendidikan Ayah');
$sheet->setCellValue('U1','Pekerjaan Ayah');
$sheet->setCellValue('V1','Telepon Ayah');
$sheet->setCellValue('W1','Nama Ibu');
$sheet->setCellValue('X1','Pendidikan Ibu');
$sheet->setCellValue('Y1','Pekerjaan Ibu');
$sheet->setCellValue('Z1','Telepon Ibu');


$query = mysqli_query($koneksi,"SELECT * FROM peserta");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query)){

	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['email']);
	$sheet->setCellValue('D'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('E'.$i, $row['tanggal']);
	$sheet->setCellValue('F'.$i, $row['bulan']);
	$sheet->setCellValue('G'.$i, $row['tahun']);
	$sheet->setCellValue('H'.$i, $row['jkel']);
	$sheet->setCellValue('I'.$i, $row['agama']);
	$sheet->setCellValue('J'.$i, $row['alamat']);
	$sheet->setCellValue('K'.$i, $row['telp']);
	$sheet->setCellValue('L'.$i, $row['saudara']);
	$sheet->setCellValue('M'.$i, $row['warga_negara']);
	$sheet->setCellValue('N'.$i, $row['penyakit']);
	$sheet->setCellValue('O'.$i, $row['tinggi']);
	$sheet->setCellValue('P'.$i, $row['berat']);
	$sheet->setCellValue('Q'.$i, $row['prestasi']);
	$sheet->setCellValue('R'.$i, $row['hobi']);
	$sheet->setCellValue('S'.$i, $row['nama_a']);
	$sheet->setCellValue('T'.$i, $row['pendidikan_a']);
	$sheet->setCellValue('U'.$i, $row['pekerjaan_a']);
	$sheet->setCellValue('V'.$i, $row['telp_a']);
	$sheet->setCellValue('W'.$i, $row['nama_i']);
	$sheet->setCellValue('X'.$i, $row['pendidikan_i']);
	$sheet->setCellValue('Y'.$i, $row['pekerjaan_i']);
	$sheet->setCellValue('Z'.$i, $row['telp_i']);

	$i++;
}
	$styleArray = ['borders' => ['allBorders' => ['borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],],];
	$i = $i - 1;
	$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);
	$writer = new Xlsx($spreadsheet);
	$writer->save('Report Data Siswa.xlsx');
?>