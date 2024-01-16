<?php  
include "koneksi.php";

$sql = mysqli_query($konek, "select * from data where kode = '$_GET[kodea]'");
$data = mysqli_fetch_array($sql);

?>

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
	<div class="container mb-5">
        <div class="mt-5">
			<div class="my-5 text-center">
				<h3 class="fw-bold text-uppercase">Edit Data Peresepan Obat Pasien</h3>
			</div>
            <div class="col-lg-8 mx-auto">
                <form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
					<label for="kode"><b>Kode:</b></label>
						<input type="text" name="kode" id="kode" class="form-control col-md-9" placeholder="Masukkan Kode" value="<?php echo $data['kode'] ?>">
					</div><br>
					
					<div class="form-group">
						<label for="nama"><b>Nama Lengkap:</b></label>
						<input type="text" name="nama" id="nama" class="form-control col-md-9" placeholder="Masukkan Nama Lengkap" value="<?php echo $data['nama'] ?>">
					</div><br>
					
					<div class="form-group">
						<label for="kategori"><b>Penyakit:</b></label>
						<input type="text" name="kategori" id="kategori" class="form-control col-md-9" placeholder="Masukkan Penyakit" value="<?php echo $data['kategori'] ?>">
					</div><br>
					
					<div class="form-group">
						<label for="dokter"><b>Nama Dokter:</b></label>
						<select name="dokter" id="dokter" value="<?php echo $data['dokter'] ?>" class="form-control col-md-9">
							<option value="">--Pilih Nama Dokter--</option>
							<option value="Jamilatul Aisyiah">Jamilatul Aisyiah</option>
							<option value="Bambang Priyambodo">Bambang Priyambodo</option>
							<option value="Bilqis Faridah">Bilqis Faridah</option>
							<option value="Arisa Yanuarima">Arisa Yanuarima</option>
							<option value="Galih Gumelar S.K.P">Galih Gumelar S.K.P</option>
							<option value="Ria Alfina">Ria Alfina</option>
						</select>	
					</div><br>
					
					<div class="form-group">
						<label for="tanggal"><b>Tanggal:</b></label>
						<input type="text" name="tanggal" id="tanggal" class="form-control col-md-9" placeholder="Masukkan Tanggal" value="<?php echo $data['tanggal'] ?>">
					</div><br>
					
					<div class="form-group">
						<label for="umur"><b>Umur:</b></label>
						<input type="text" name="umur" id="umur" class="form-control col-md-9" placeholder="Masukkan Umur" value="<?php echo $data['umur'] ?>">
					</div><br>

					<label><b>Foto:</b></label><br>
					<input type="file" name="NamaFile"><br><br>
					
					<div class="form-group">
						<label for="obat"><b>Kode Obat:</b></label>
						<input type="text" name="obat" id="obat" class="form-control col-md-9" placeholder="Masukkan Kode Obat" value="<?php echo $data['obat'] ?>">
					</div><br>
					
					<div class="form-group">
						<label for="kunci"><b>Kode Kunci:</b></label>
						<input type="text" name="kunci" id="kunci" class="form-control col-md-9" placeholder="Masukkan Kode Kunci" value="<?php echo $data['kunci'] ?>">
					</div><br>

					<td><input type="submit" name="update" value="Update"></td>
					<button type="reset" value = "Reset" >Reset</button>
				</form>
            </div>
        </div>
    </div>
	</div>
<?php  

include "koneksi.php";	


if (isset($_POST['update'])) {
	// code...
	$direktor="foto/";
	$img_name = $_FILES['NamaFile']['name'];
	move_uploaded_file($_FILES['NamaFile']['tmp_name'], $direktor.$img_name);

	mysqli_query($konek, "update data set
		nama = '$_POST[nama]',
		kategori = '$_POST[kategori]',
		dokter = '$_POST[dokter]',
		tanggal = '$_POST[tanggal]',
		umur = '$_POST[umur]',
		foto = '$img_name',
		obat = '$_POST[obat]',
		kunci = '$_POST[kunci]'
		where kode = '$_POST[kode]'
		");

	echo "<meta http-equiv=refresh content=2;URL='resep.php'>";

	// echo "Data berhasil disimpan";
}
?>
	
    <footer class="text-center py-3 bg-light">
        <div class="container">
            <p class="m-0 small">© 2023 Kelompok 4. All Rights Reserved. Tugas ini kami merasa terpaksa</p>
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