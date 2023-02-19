<?php
include '../include/koneksi.php';

$id = $_GET['id'];
$sql = "delete from divisi where id = '$id'";
$proses = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	if ($proses) {
		header('location:../divisi?hapus='.base64_encode('data divisi telah dihapus'));
	} else { echo "Data belum dapat di hapus!!";
	}
?>