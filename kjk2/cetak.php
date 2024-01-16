<?php  
include "koneksi.php";

$sql = mysqli_query($konek, "select * from data where kode = '$_GET[koded]'");
$data = mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<div class="div1">
	<h3><center>Data Peresepan Obat Pasien</center></h3>
		<table style="width:100%" class="table1" rules="all" border="1">
		<tr>
			<th>Kode</th>
			<th>Nama</th>
			<th>Penyakit</th>
			<th>Dokter</th>
			<th>Tanggal</th>
			<th>Umur</th>
			<th>Foto</th>
			<th>Enkripsi Obat</th>
			<th>Kunci</th>
		</tr>
	
<?php  

include "koneksi.php";

$no = 1;
$take = mysqli_query($konek, "select * from data where kode='$_GET[koded]'");
while ($show = mysqli_fetch_array($take)) {
	// code...
	echo "
	";
?>

	<tr>
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
	</tr>";
	}


?>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>