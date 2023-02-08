<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
        a:link{
            text-decoration: none;
            color :white;
        }
	</style>
</head>
<body bgcolor="green" style="color:white;">
	<table  width="100%">
		<tr>
            <td colspan="2">
                <center>
                    <h1>WELCOME HOME</h1>
                </center>
            </td>
		</tr>
		<tr>
			<td width="25%">
                <h1> MENU KIRI</h1>
                <ul>
                    <li>
                        <a href="lihat_pengguna.php"><h1>Lihat penggguna</h1></a>
                    </li>
                    <li>
                        <a href="tambah_pengguna.php"><h1>Tambah Pengguna</h1></a>
                    </li>
                    <li>
                        <a href="hapus_pengguna.php"><h1>Hapus pengguna</h1></a>
                    </li><li>
                        <a href="edit_pengguna.php"><h1>Edit pengguna</h1></a>
                    </li>
                </ul>
			</td>
			<td>
                <h1>List Pengguna</h1>
                    <?php 
                    include "koneksi.php";
                    $kueri=mysqli_query($konek,'SELECT * FROM login1');
                    ?>
                    <table border="1">
                        
                        <tr>

                            <td>
                                <b>
                                No
                            </b>
                            </td>
                            <td>
                                <b>
                                Nama Pengguna
                            </b>
                            </td>
                            <td>
                                <b>
                                sandi pengguna
                            </b>
                            </td>
                                <td>
                                <b>
                                aksi
                            </td>
                            </b>
                            </center>
                            </td>
                        </tr>

                    <?php
                    while($row = mysqli_fetch_array($kueri)){
                        echo"<tr><td>";
                        echo $row['id_pengguna'];
                        echo"</td><td>";
                        echo $row['nama_pengguna'];
                        echo"</td><td>";
                        echo $row['sandi_pengguna'];
                        echo"</td>
                        <td>";
                        echo"
                            <a href='hapus.php?apanih=".$row['nama_pengguna']."'>Hapus</a>
                        ";

                        
                        echo "</td> <td>";
                        echo"
                            <a href='update_data.php?apanih=".$row['nama_pengguna']." &sandi=".$row['sandi_pengguna']."        '>Ubah</a>
                        ";
                    }
                ?>
                </table>
                <br>
                <button style="background-color: black;"><a href="tambah_pengguna.php">Tambah Pengguna</a></button>
			</td>
		</tr>
	</table>
</body>
</html>