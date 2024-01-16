

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 4 - Vigenere Chiper</title>
	<link rel="stylesheet" href="style_resep.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">KJK - Vigenere Chiper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Home</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="resep.php">Data Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="enkripsi_dekripsi.php">Enkripsi & Dekripsi</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="div1">
	<h3><center>Data Peresepan Obat Pasien</center></h3>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
		<table style="width:100%" class="table1">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Penyakit</th>
			<th>Dokter</th>
			<th>Tanggal</th>
			<th>Umur</th>
			<th>Foto</th>
			<th>Enkripsi Obat</th>
			<th>Kunci</th>
			<th colspan=3>Opsi</th>
		</tr>
	
<?php  

include "koneksi.php";

$no = 1;
$take = mysqli_query($konek, "select * from data");
while ($show = mysqli_fetch_array($take)) {
	// code...
	echo "
	";
?>

	<tr>
		<td><center><?= $no++ ?></center></td>
		<td><center><?= $show['kode']; ?></center></td>
		<td><center><?= $show['nama']; ?></center></td>
		<td><center><?= $show['kategori']; ?></center></td>
		<td><center><?= $show['dokter']; ?></center></td>
		<td><center><?= $show['tanggal']; ?></center></td>
		<td><center><?= $show['umur']; ?></center></td>
		<td><center>
			<?= "<img src='foto/$show[foto]' width='70' height='90' />"; ?>
		</center></td>
		<td><center><?= $show['obat']; ?></center></td>
		<td><center><?= $show['kunci']; ?></center></td>
		
		

<?php
echo"
<td align=right width=70px><center><a href='edit.php?kodea=$show[kode]'>Edit</a></center></td>
<td align=right width=70px><center><a href='?kodea=$show[kode]'>Hapus</a></center></td>
<td align=right width=70px><center><a href='cetak.php?koded=$show[kode]'>Cetak</a></center></td>
	</tr>";
	}


?>



</table>
</div>

	<div class="mb-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h6 class="text-center mb-3"></h6>
            </div>
        </div>
        <hr>
    </div>
	
    <footer class="text-center py-3 bg-light">
        <div class="container">
            <p class="m-0 small">© 2023 Kelompok 6. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function btnReset() {
            document.location = 'index.php';
        }
    </script>
</body>
</html>

<?php  

if (isset($_GET['kodea'])) {
		mysqli_query($konek,"delete from data where kode = '$_GET[kodea]'");
		echo "data terhapus";
		echo "<meta http-equiv=refresh content=2;URL='resep.php'>";
		// code...
	}

?>