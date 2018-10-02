<?php
if (isset($_POST['submit'])) {
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$fk = $_POST['fk'];
	$jurusan = $_POST['jurusan'];
	$email=$_POST['email'];
	$komentar=$_POST['komentar'];
	$hitung = count(explode(" ", $komentar));
	echo "<br><br> NIM           : $nim";
	echo "<br><br> Nama 		 : $nama";
	echo "<br><br> Jenis Kelamin : $jk";
	echo "<br><br> Fakultas 	 : $fk";
	echo "<br><br> Jurusan	     : $jurusan";
	echo "<br><br> Email         : $email";
	echo "<br><br> Jumlah kata   : $hitung";
	if ($hitung < 5){
		echo "<br><br>Maaf Jumlah kata harus lebih dari 5 ";
	}else{
		echo "<br><br>$komentar";
	}

	$file = $_FILES['file'];
	$nama_file =$file['name'];
	$nama_tmp = $file['tmp_name'];
	$gambarterupload ="Gambar/";
	$GambarUpload = move_uploaded_file($nama_tmp, $gambarterupload.$nama_file);
	if ($GambarUpload){
		echo "<br>Gambar Berhasil di Upload<br>";
		echo "<img src='".$gambarterupload.$nama_file."'>";
	}else{
		echo "file gagal di upload";
	}

}
?>