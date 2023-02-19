<?php
include '../include/koneksi.php';

$kode_divisi = $_POST['kode_divisi'];
$divisi = $_POST['divisi'];

$s_pelanggan= mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from divisi where kode_divisi='$kode_divisi'");
$cek = mysqli_num_rows($s_pelanggan);

if ($cek==0){
$s_p ="INSERT into divisi (kode_divisi, divisi)VALUES('$kode_divisi','$divisi')";
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $s_p);
	if ($proses) {
		header('location:../divisi?sukses='.base64_encode('data divisi dengan kode '.$kode_divisi.' telah tersimpan, Terimakasih'));
	} else { echo "Data belum dapat di simpan!!";
	}
} else {

		header('location:../divisi?error='.base64_encode('data divisi dengan kode '.$kode_divisi.' sebelumnya sudah ada, Terimakasih'));
	}

?>