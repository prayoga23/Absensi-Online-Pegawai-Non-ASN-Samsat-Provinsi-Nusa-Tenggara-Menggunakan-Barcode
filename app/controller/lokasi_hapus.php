<?php
include '../include/koneksi.php';

$id = $_GET['id'];
$sql = "delete from alamat where id = '$id'";
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	if ($proses) {
		header('location:../alamat?hapus='.base64_encode('data alamat telah dihapus'));
	} else { echo "Data belum dapat di hapus!!";
	}
?>