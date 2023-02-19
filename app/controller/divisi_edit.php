<?php
include '../include/koneksi.php';

$id_divisi = $_POST['id_divisi'];
$kode_divisi = $_POST['kode_divisi'];
$divisi =$_POST['divisi'];

$s_p ="UPDATE divisi set kode_divisi='$kode_divisi', divisi='$divisi' WHERE id='$id_divisi'";
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $s_p);
	if ($proses) {
		header('location:../divisi?sukses='.base64_encode('data divisi dengan kode '.$kode_divisi.' telah diedit, Terimakasih'));
	} else { echo "Data belum dapat di simpan!!";
	}


?>
