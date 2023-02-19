<?php
include '../include/koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode'];
$alamat =$_POST['alamat'];

$s_p ="UPDATE alamat set kode='$kode', alamat='$alamat' WHERE id='$id'";
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $s_p);
	if ($proses) {
		header('location:../alamat?sukses='.base64_encode('data alamat dengan kode '.$kode.' telah diedit, Terimakasih'));
	} else { echo "Data belum dapat di simpan!!";
	}


?>