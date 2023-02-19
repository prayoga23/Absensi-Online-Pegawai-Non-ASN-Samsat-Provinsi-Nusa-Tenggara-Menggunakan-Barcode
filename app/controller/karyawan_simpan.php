<?php
include '../include/koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$divisi = $_POST['divisi'];

$photo =  "file_" . date("YmdHis") . "." . basename($_FILES['file']['name']); //ubah nama file
$target = "../images/$photo"; //Tempat file

//This code writes the photo to the server//
//--------------------------------Photo 1----------------------------
move_uploaded_file($_FILES['file']['tmp_name'], $target);
//identitas file asli


$s_pelanggan = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan where nik='$nik'");
$cek = mysqli_num_rows($s_pelanggan);

if ($cek == 0) {
	$s_p = "INSERT into karyawan (nik,nama,no_telp, jenis_kelamin, agama, alamat, divisi,foto) VALUES('$nik','$nama','$no_telp', '$jenis_kelamin','$agama','$alamat', '$divisi', '$photo')";
	$proses = mysqli_query($GLOBALS["___mysqli_ston"], $s_p);
	if ($proses) {
		header('location:../karyawan?sukses=' . base64_encode('data karyawan dengan nik ' . $nik . ' telah tersimpan, Terimakasih'));
	} else {
		echo "Data belum dapat di simpan!!";
	}
} else {

	header('location:../karyawan?error=' . base64_encode('data karyawan dengan nik ' . $nik . ' sebelumnya sudah ada, Terimakasih'));
}
