<?php
include '../include/koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$divisi = $_POST['divisi'];
$photo =  $_FILES['file']['name']; //ubah nama file


if (empty($photo)) {
	$s_p = "UPDATE karyawan set nama ='$nama', no_telp ='$no_telp', jenis_kelamin ='$jenis_kelamin', agama='$agama', alamat='$alamat', divisi='$divisi' WHERE nik='$nik'";
} elseif (!empty($photo)) {
	$cek_foto = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT foto FROM karyawan WHERE nik ='$nik'")) or die(mysqli_error($GLOBALS["___mysqli_ston"]));
	$nama_foto = $cek_foto['foto'];
	$target_delete = "../images/$nama_foto"; //Tempat file
	$remove_small = unlink("$target_delete");

	$new_foto =  "file_" . date("YmdHis") . "." . basename($_FILES['file']['name']); //ubah nama file
	$target = "../images/$new_foto"; //Tempat file

	//This code writes the photo to the server//
	//--------------------------------Photo 1----------------------------
	move_uploaded_file($_FILES['file']['tmp_name'], $target);
	//identitas file asli
	$s_p = "UPDATE karyawan set nama ='$nama', no_telp ='$no_telp', jenis_kelamin ='$jenis_kelamin', agama='$agama', alamat='$alamat', divisi='$divisi', foto='$new_foto' WHERE nik='$nik'";
}
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $s_p);
if ($proses) {
	header('location:../karyawan?sukses=' . base64_encode('data karyawan dengan nik ' . $nik . ' telah tersimpan, Terimakasih'));
} else {
	echo "Data belum dapat di simpan!!";
}
