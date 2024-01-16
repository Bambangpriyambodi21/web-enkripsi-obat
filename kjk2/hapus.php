<?php
include "koneksi.php";

$result = mysqli_query("DELETE FROM data WHERE kode");

header("Location:resep.php");
?>