<!DOCTYPE html>
<html>
<head>
	<title>TA5</title>

</head>
<body>
	<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" maxlength="10" name="nim" title="Inputan nim harus 10 karakter"><br></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="25" name="nama" title="Inputan nama max 25 karakter"><br></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jk"option value="Laki-Laki">Laki-Laki</option></td>
				<td><input type="radio" name="jk"option value="Perempuan">Perempuan</option></td>
				
			</tr>

			<tr>

			<td>Hobi<td>
				<td>
					<input type="checkbox" name="Hobi[]" value="Menulis">Menggambar<br>
					<input type="checkbox" name="Hobi[]" value="Membaca">Membaca<br>
					<input type="checkbox" name="Hobi[]" value="Basket">Basket<br>
					<input type="checkbox" name="Hobi[]" value="Badminton">Lari<br>
					<input type="checkbox" name="Hobi[]" value="Berenang">Berenang

					
				</td>
			<tr>

    <td>Fakultas</td>
    <td>:</td>
     <td> <select class="" name="fk" required>
        <option value="">-- Fakultas --</option>
        <option value="FIF">FIF</option>
        <option value="FIT">FIT</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FEB">FEB</option>
       
       
      </select>
  </td>

  			<tr>

    <td>Jurusan</td>
    <td>:</td>
     <td> <select class="" name="jurusan" required>
        <option value="">-- Jurusan --</option>
        <option value="If">Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="mbti">Manajemen Bisnis Telekomunikasi Informatika</option>
        <option value="TT">Teknik Telekomunikasi</option>
        <option value="DI">Desain Interior</option>
        <option value="F">Fisika</option>
        <option value="SM">Sistem Multimedia</option>
       
       
      </select>
  </td>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="Email" name="email" placeholder="@gmail.com"><br></td>
			</tr>

			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="text" name="komentar"><br></td>
			</tr>

<tr>
<td colspan="3"><input type="file" name="file"></td>
</tr>

			<tr>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
		</table>
	</form>
</body>
</html>