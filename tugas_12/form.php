<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    .warning{color:#FF0000;}
</style>
</head>
<body>

<?php
$error_nama = "";
$error_email = "";
$error_tempat_lahir = "";
$error_tanggal = "";
$error_bulan = "";
$error_tahun = "";
$error_jkel = "";
$error_agama = "";
$error_alamat = "";
$error_telp = "";
$error_saudara = "";
$error_warga_negara = "";
$error_penyakit = "";
$error_tinggi = "";
$error_berat = "";
$error_prestasi = "";
$error_hobi = "";
$error_nama_a = "";
$error_pendidikan_a = "";
$error_pekerjaan_a = "";
$error_telp_a = "";
$error_nama_i = "";
$error_pendidikan_i = "";
$error_pekerjaan_i = "";
$error_telp_i = "";

$nama = "";
$email = "";
$tempat_lahir = "";
$tanggal = "";
$bulan = "";
$tahun = "";
$jkel = "";
$agama = "";
$alamat = "";
$telp = "";
$saudara = "";
$warga_negara = "";
$penyakit = "";
$tinggi = "";
$berat = "";
$prestasi = "";
$hobi = "";
$nama_a = "";
$pendidikan_a = "";
$pekerjaan_a = "";
$telp_a = "";
$nama_i = "";
$pendidikan_i = "";
$pekerjaan_i = "";
$telp_i = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["nama"])) 
    {
        $error_nama = "Nama tidak boleh kosong";
    }
    else
    {
        $nama = cek_input($_POST["nama"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
        {
            $error_nama = "Inputan hanya boleh huruf dan spasi";
        }
    }

    if (empty($_POST["email"])) 
    {
        $error_email = "Email tidak boleh kosong";
    }
    else 
    {
        $email = cek_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $error_email = "Format email invalid";
        }   
    }

    if (empty($_POST["tempat_lahir"])) 
    {
        $error_tempat_lahir = "Tempat kelahiran tidak boleh kosong";
    }
    else
    {
        $tempat_lahir = cek_input($_POST["tempat_lahir"]);
    }


        if (empty($_POST["tanggal"])) 
    {
        $error_tanggal = "Tanggal tidak boleh kosong";
    }
    else
    {
        $tanggal = cek_input($_POST["tanggal"]);
    }


    if (empty($_POST["bulan"])) 
    {
        $error_bulan = "Bulan tidak boleh kosong";
    }
    else
    {
        $bulan = cek_input($_POST["bulan"]);
    }


    if (empty($_POST["tahun"])) 
    {
        $error_tahun = "Tahun tidak boleh kosong";
    }
    else
    {
        $tahun = cek_input($_POST["tahun"]);
    }


        if (empty($_POST["jkel"])) 
    {
        $error_jkel = "Jenis kelamin tidak boleh kosong";
    }
    else
    {
        $jkel = cek_input($_POST["jkel"]);
    }


        if (empty($_POST["agama"])) 
    {
        $error_agama = "Agama tidak boleh kosong";
    }
    else
    {
        $agama = cek_input($_POST["agama"]);
    }


        if (empty($_POST["alamat"])) 
    {
        $error_alamat = "Alamat tidak boleh kosong";
    }
    else
    {
        $alamat = cek_input($_POST["alamat"]);
    }




    if (empty($_POST["telp"])) 
    {
        $error_telp = "Telepon tidak boleh kosong";
    }
    else
    {
        $telp = cek_input($_POST["telp"]);

        if (!is_numeric($telp)) 
        {
            $error_telp = 'Nomor HP hanya boleh angka';
        }
    }


        if (empty($_POST["saudara"])) 
    {
        $error_saudara = "Saudara tidak boleh kosong";
    }
    else
    {
        $saudara = cek_input($_POST["saudara"]);
    }


        if (empty($_POST["warga_negara"])) 
    {
        $error_warga_negara = "Warga Negara tidak boleh kosong";
    }
    else
    {
        $warga_negara = cek_input($_POST["warga_negara"]);
    }


        if (empty($_POST["penyakit"])) 
    {
        $error_penyakit = "Penyakit yang diderita tidak boleh kosong";
    }
    else
    {
        $penyakit = cek_input($_POST["penyakit"]);
    }


        if (empty($_POST["tinggi"])) 
    {
        $error_tinggi = "Tinggi badan tidak boleh kosong";
    }
    else
    {
        $tinggi = cek_input($_POST["tinggi"]);
    }


        if (empty($_POST["berat"])) 
    {
        $error_berat = "Berat badan tidak boleh kosong";
    }
    else
    {
        $berat = cek_input($_POST["berat"]);
    }


        if (empty($_POST["prestasi"])) 
    {
        $error_prestasi = "Prestasi yang pernah diraih tidak boleh kosong";
    }
    else
    {
        $prestasi = cek_input($_POST["prestasi"]);
    }


        if (empty($_POST["hobi"])) 
    {
        $error_hobi = "Hobi tidak boleh kosong";
    }
    else
    {
        $hobi = cek_input($_POST["hobi"]);
    }


        if (empty($_POST["nama_a"])) 
    {
        $error_nama_a = "Nama ayah tidak boleh kosong";
    }
    else
    {
        $nama_a = cek_input($_POST["nama_a"]);
    }


        if (empty($_POST["pendidikan_a"])) 
    {
        $error_pendidikan_a = "Pendidikan ayah tidak boleh kosong";
    }
    else
    {
        $pendidikan_a = cek_input($_POST["pendidikan_a"]);
    }


        if (empty($_POST["pekerjaan_a"])) 
    {
        $error_pekerjaan_a = "Pekerjaan ayah tidak boleh kosong";
    }
    else
    {
        $pekerjaan_a = cek_input($_POST["pekerjaan_a"]);
    }

        if (empty($_POST["telp_a"])) 
    {
        $error_telp_a = "Telepon ayah tidak boleh kosong";
    }
    else
    {
        $telp_a = cek_input($_POST["telp_a"]);
    }


        if (empty($_POST["nama_i"])) 
    {
        $error_nama_i = "Nama ibu tidak boleh kosong";
    }
    else
    {
        $nama_i = cek_input($_POST["nama_i"]);
    }


        if (empty($_POST["pendidikan_i"])) 
    {
        $error_pendidikan_i = "Pendidikan ibu tidak boleh kosong";
    }
    else
    {
        $pendidikan_i = cek_input($_POST["pendidikan_i"]);
    }


        if (empty($_POST["pekerjaan_i"])) 
    {
        $error_pekerjaan_i = "Pekerjaan ibu tidak boleh kosong";
    }
    else
    {
        $pekerjaan_i = cek_input($_POST["pekerjaan_i"]);
    }

        if (empty($_POST["telp_i"])) 
    {
        $error_telp_i = "Telepon ibu tidak boleh kosong";
    }
    else
    {
        $telp_i = cek_input($_POST["telp_i"]);
    }            
    }

    function cek_input($data){
        $data = trim($data);
        $data   = stripslashes($data);
        $data   =htmlspecialchars(  $data);
        return $data    ;   
    }
    
    ?>

<div class="row">
<div class="col-md-6">
<div class="card">
    <div class="card-header">
        <center>Formulir Pendaftaran Siswa Baru</center>
    </div>
    <div class="card-body">
    <form method="POST" action="proses.php"> <div class="form-group row">    
    <label for="nama" class="col-sm-2 col-form-label"> Nama </label>
    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="nama" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama;?></span>
    </div>
</div>
    
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : "");?>" id="email" placeholder="email" value="<?php echo $email;?>"><span class="warning"><?php echo $error_email;?></span>
    </div>
</div>
    
    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Kelahiran</label>
        <div class="col-sm-10">
        <input type="text" name="tempat_lahir" class="form-control <?php echo ($error_tempat_lahir !="" ? "is-invalid" : "");?>" id="tempat_lahir" placeholder="tempat kelahiran" value="<?php echo $tempat_lahir;?>"><span class="warning"><?php echo $error_tempat_lahir;?></span>
    </div>
</div>  

    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Kelahiran</label>
        <div class="col-sm-10">
        <select name="tanggal" class="form-control <?php echo ($error_tanggal !="" ? "is-invalid" : "");?>" id="tanggal" placeholder="tanggal kelahiran" value="<?php echo $tanggal;?>"><span class="warning"><?php echo $error_tanggal;?></span>>
        <?php 
           for($tanggal = 1; $tanggal <= 31; $tanggal++) {
               if($tanggal < 10) {
                   echo '<option value="0'. $tanggal .'">0'. $tanggal .'</option>';
               }
               else {
                   echo '<option value="'. $tanggal .'">'. $tanggal .'</option>';
               }
            }
         ?>
         </select>
    </div>
</div>

    <div class="form-group row">
        <label for="bulan" class="col-sm-2 col-form-label">Bulan Kelahiran</label>
        <div class="col-sm-10">
        <select name="bulan" class="form-control <?php echo ($error_bulan !="" ? "is-invalid" : "");?>" id="bulan" placeholder="bulan kelahiran" value="<?php echo $bulan;?>"><span class="warning"><?php echo $error_bulan;?></span>>
        <?php 
            for($bulan = 1; $bulan <= 12; $bulan++) {
                if($bulan < 10) {
                    echo '<option value="0'. $bulan .'">0'. $bulan .'</option>';
                }
                else {
                    echo '<option value="'. $bulan .'">'. $bulan .'</option>';
                }
            }
        ?>
        </select>
    </div>
</div>

    <div class="form-group row">
        <label for="tahun" class="col-sm-2 col-form-label">Tahun Kelahiran</label>
        <div class="col-sm-10">
        <select name="tahun" class="form-control <?php echo ($error_tahun !="" ? "is-invalid" : "");?>" id="tahun" placeholder="tahun kelahiran" value="<?php echo $tahun;?>"><span class="warning"><?php echo $error_tahun;?></span>>
        <?php 
            for($tahun = date('Y'); $tahun >= 1980; $tahun--) {
                echo '<option value="'. $tahun .'">'. $tahun .'</option>';
            }
        ?>
        </select>
    </div>
</div>

<div class="form-group row">
        <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin </label>
        <div class="col-sm-10">
        <input type="radio" name="jkel" value="laki-laki">Laki-laki
        <input type="radio" name="jkel" value="perempuan">Perempuan
        <span class="error"> <?php echo $error_jkel;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
        <select name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : "");?>" id="agama" placeholder="agama" value="<?php echo $agama;?>"><span class="warning"><?php echo $error_agama;?></span>>  
             <option>Islam</option>  
             <option>Kristen</option>
             <option>Katolik</option>  
             <option>Hindu</option>  
             <option>Budha</option>  
             <option>Kong Hu Cu</option>  
           </select>
    </div>
</div>

    <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : "");?>" id="alamat" placeholder="alamat" value="<?php echo $alamat;?>"><span class="warning"><?php echo $error_alamat;?></span>
    </div>
</div> 

    <div class="form-group row">
        <label for="telp" class="col-sm-2 col-form-label">Telp</label>
        <div class="col-sm-10">
        <input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : "");?>" id="telp" placeholder="telp" value="<?php echo $telp;?>"><span class="warning"><?php echo $error_telp;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="saudara" class="col-sm-2 col-form-label">Saudara yang dimiliki</label>
        <div class="col-sm-10">
        <input type="text" name="saudara" class="form-control <?php echo ($error_saudara !="" ? "is-invalid" : "");?>" id="saudara" placeholder="saudara yang dimiliki" value="<?php echo $saudara;?>"><span class="warning"><?php echo $error_saudara;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara</label>
        <div class="col-sm-10">
        <input type="text" name="warga_negara" class="form-control <?php echo ($error_warga_negara !="" ? "is-invalid" : "");?>" id="warga_negara" placeholder="warga negara" value="<?php echo $warga_negara;?>"><span class="warning"><?php echo $error_warga_negara;?></span>
    </div>
</div> 

    <div class="form-group row">
        <label for="penyakit" class="col-sm-2 col-form-label">Sakit yang dimiliki</label>
        <div class="col-sm-10">
        <input type="text" name="penyakit" class="form-control <?php echo ($error_penyakit !="" ? "is-invalid" : "");?>" id="penyakit" placeholder="sakit yang dimiliki" value="<?php echo $penyakit;?>"><span class="warning"><?php echo $error_penyakit;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="tinggi" class="col-sm-2 col-form-label">Tinggi Badan</label>
        <div class="col-sm-10">
        <input type="text" name="tinggi" class="form-control <?php echo ($error_tinggi !="" ? "is-invalid" : "");?>" id="tinggi" placeholder="tinggi badan dalam satuan cm" value="<?php echo $tinggi;?>"><span class="warning"><?php echo $error_tinggi;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="berat" class="col-sm-2 col-form-label">Berat Badan</label>
        <div class="col-sm-10">
        <input type="text" name="berat" class="form-control <?php echo ($error_berat !="" ? "is-invalid" : "");?>" id="berat" placeholder="berat badan dalam satuan kg" value="<?php echo $berat;?>"><span class="warning"><?php echo $error_berat;?></span>
    </div>
</div> 

    <div class="form-group row">
        <label for="prestasi" class="col-sm-2 col-form-label">Prestasi</label>
        <div class="col-sm-10">
        <input type="text" name="prestasi" class="form-control <?php echo ($error_prestasi !="" ? "is-invalid" : "");?>" id="prestasi" placeholder="prestasi yang pernah diraih" value="<?php echo $prestasi;?>"><span class="warning"><?php echo $error_prestasi;?></span>
    </div>
</div> 

    <div class="form-group row">
        <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
        <div class="col-sm-10">
        <input type="text" name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid" : "");?>" id="hobi" placeholder="hobi" value="<?php echo $hobi;?>"><span class="warning"><?php echo $error_hobi;?></span>
    </div>
</div>

<br>
<hr>

    <div class="form-group row">
        <label for="nama_a" class="col-sm-2 col-form-label">Nama ayah</label>
        <div class="col-sm-10">
        <input type="text" name="nama_a" class="form-control <?php echo ($error_nama_a !="" ? "is-invalid" : "");?>" id="nama_a" placeholder="nama ayah" value="<?php echo $nama_a;?>"><span class="warning"><?php echo $error_nama_a;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="pendidikan_a" class="col-sm-2 col-form-label">Pendidikan ayah</label>
        <div class="col-sm-10">
        <input type="text" name="pendidikan_a" class="form-control <?php echo ($error_pendidikan_a !="" ? "is-invalid" : "");?>" id="pendidikan_a" placeholder="pendidikan ayah" value="<?php echo $pendidikan_a;?>"><span class="warning"><?php echo $error_pendidikan_a;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="pekerjaan_a" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
        <div class="col-sm-10">
        <input type="text" name="pekerjaan_a" class="form-control <?php echo ($error_pekerjaan_a !="" ? "is-invalid" : "");?>" id="pekerjaan_a" placeholder="pekerjaan ayah" value="<?php echo $pekerjaan_a;?>"><span class="warning"><?php echo $error_pekerjaan_a;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="telp_a" class="col-sm-2 col-form-label">Telp ayah</label>
        <div class="col-sm-10">
        <input type="text" name="telp_a" class="form-control <?php echo ($error_telp_a !="" ? "is-invalid" : "");?>" id="telp_a" placeholder="telepon ayah" value="<?php echo $telp_a;?>"><span class="warning"><?php echo $error_telp_a;?></span>
    </div>
</div>

<br>
<hr>

    <div class="form-group row">
        <label for="nama_i" class="col-sm-2 col-form-label">Nama ibu</label>
        <div class="col-sm-10">
        <input type="text" name="nama_i" class="form-control <?php echo ($error_nama_i !="" ? "is-invalid" : "");?>" id="nama_i" placeholder="nama ibu" value="<?php echo $nama_i;?>"><span class="warning"><?php echo $error_nama_i;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="pendidikan_i" class="col-sm-2 col-form-label">Pendidikan ibu</label>
        <div class="col-sm-10">
        <input type="text" name="pendidikan_i" class="form-control <?php echo ($error_pendidikan_i !="" ? "is-invalid" : "");?>" id="pendidikan_i" placeholder="pendidikan ibu" value="<?php echo $pendidikan_i;?>"><span class="warning"><?php echo $error_pendidikan_i;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="pekerjaan_i" class="col-sm-2 col-form-label">Pekerjaan ibu</label>
        <div class="col-sm-10">
        <input type="text" name="pekerjaan_i" class="form-control <?php echo ($error_pekerjaan_i !="" ? "is-invalid" : "");?>" id="pekerjaan_i" placeholder="pekerjaan ibu" value="<?php echo $pekerjaan_i;?>"><span class="warning"><?php echo $error_pekerjaan_i;?></span>
    </div>
</div>

    <div class="form-group row">
        <label for="telp_i" class="col-sm-2 col-form-label">Telp ibu</label>
        <div class="col-sm-10">
        <input type="text" name="telp_i" class="form-control <?php echo ($error_telp_i !="" ? "is-invalid" : "");?>" id="telp_i" placeholder="telepon ibu" value="<?php echo $telp_i;?>"><span class="warning"><?php echo $error_telp_i;?></span>
    </div>
</div>

<br>

    <div class="form-group row">
    <div class="col-sm-10">
        <center><button type="submit" name="simpan" class="btn btn-primary"> Simpan</button></center>

    </div>  
</div>
</form>
</div></div></div></div>

<div class="row">
<div class="col-md-6">
<div class="card">
    <div class="card-body">
    <form method="POST" action="reportdataexcel.php"> <div class="form-group row"> 
        <div class="form-group row">
        <div class="col-sm-10">
        <center><button type="submit" name="excel" class="btn btn-primary"> Download Excel</button></center>
    </div>
</form>
</div></div></div></div>   

<div class="row">
<div class="col-md-6">
<div class="card">
    <div class="card-body">
    <form method="POST" action="report.php"> <div class="form-group row"> 
        <div class="form-group row">
        <div class="col-sm-10">
        <center><button type="submit" name="pdf" class="btn btn-primary"> Download Pdf</button></center>

    </div>
</form>
</div></div></div></div> 


</body>
</html>