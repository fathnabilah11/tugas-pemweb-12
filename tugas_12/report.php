<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from peserta");
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Email</th>
 <th>Tempat Kelahiran</th>
 <th>Tanggal Kelahiran</th>
 <th>Bulan Kelahiran</th>
 <th>Tahun Kelahiran</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Alamat</th>
 <th>No Telepon</th>
 <th>Saudara</th>
 <th>Warga Negara</th>
 <th>Sakit yang diderita</th>
 <th>Tinggi Badan</th>
 <th>Berat Badan</th>
 <th>Prestasi</th>
 <th>Hobi</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['email']."</td>
 <td>".$row['tempat_lahir']."</td>
 <td>".$row['tanggal']."</td>
 <td>".$row['bulan']."</td>
 <td>".$row['tahun']."</td>
 <td>".$row['jkel']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['telp']."</td>
 <td>".$row['saudara']."</td>
 <td>".$row['warga_negara']."</td>
 <td>".$row['penyakit']."</td>
 <td>".$row['tinggi']."</td>
 <td>".$row['berat']."</td>
 <td>".$row['prestasi']."</td>
 <td>".$row['hobi']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A3', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>