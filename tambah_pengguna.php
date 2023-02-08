<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body>
	<body style="background-color:red;">
	</body>
	<b>FORM TAMBAH DATA</b>
	<ul>
			<td width="30%">
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul>
				<li>
					<a href="beranda.html">
					Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Tambah Pengguna</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Hapus Pengguna</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Edit Pengguna</a>
				</li>
			</ul>
	<form action="proses_tambah_data.php" method="POST">
	<table border="1">
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="nama" TYPE="TEXT" PLACEHOLDER="nama anda">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="boleeeh" TYPE="PASSWORD" PLACEHOLDER="password anda">
			</td>
		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Kirim Data">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>