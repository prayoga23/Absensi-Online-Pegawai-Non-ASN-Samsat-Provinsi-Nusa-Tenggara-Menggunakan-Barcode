<?php
include '../include/koneksi.php';

$kode = $_POST['kode'];
$alamat = $_POST['alamat'];

$s_pelanggan= mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from alamat where kode='$kode'");
$cek = mysqli_num_rows($s_pelanggan);

if ($cek==0){
$s_p ="INSERT into alamat (kode, alamat)VALUES('$kode','$alamat')";
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $s_p);
	if ($proses) {
		header('location:../alamat?sukses='.base64_encode('data alamat dengan kode '.$kode.' telah tersimpan, Terimakasih'));
	} else { echo "Data belum dapat di simpan!!";
	}
} else {

		header('location:../alamat?error='.base64_encode('data alamat dengan kode '.$kode.' sebelumnya sudah ada, Terimakasih'));
	}

?>