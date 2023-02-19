<div class="container-fluid">
	<div class="row clearfix">
		<?php $detail = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan where nik='$_GET[nik]'")); ?>
		<div id="detail">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>
							<p align="center"> <img src="../images/samsat2.jpeg" width="60%"></img> <small></small>
						</h2>
					</div>
					<div class="body">
						<p align="center"><img align="center" src="images/<?= $detail['foto']; ?>" width="40%"></img></p><br />

					</div>
					<div class="footer">
						<h1>
							<p align="center"><b><?= $detail['nama']; ?></b></p>
						</h1>
						<h2>
							<p align="center"><b><?= $detail['divisi']; ?></b></p>
						</h2>

						<p align="center"><img align="center" src="controller/barcode.php?text=<?= $_GET['nik']; ?>&print=true" width="80%" alt="<?= $_GET['nik']; ?>" />
						</p>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				<div class="card">
					<div class="header bg-blue">
						<h1>
							<?= $detail['nama']; ?>
							<br>
							<small><?= $detail['divisi']; ?></small>
						</h1>

					</div>
					<div class="body">
						<ul align="left">
							<li>NIK Pegawai: <?= $detail['nik']; ?></li>
							<li>Nama Pegawai : <?= $detail['nama']; ?></li>
							<li>Divisi : <?= $detail['divisi']; ?></li>
							<li>Nomor Telp. : <?= $detail['no_telp']; ?></li>
							<li>Agama : <?= $detail['agama']; ?></li>
							<li>Jenis Kelamin : <?= $detail['jenis_kelamin']; ?></li>
							<li>alamat : <?= $detail['alamat']; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
			<script>
				function printContent(el) {
					var restorepage = document.body.innerHTML;
					var printcontent = document.getElementById(el).innerHTML;
					document.body.innerHTML = printcontent;
					window.print();
					document.body.innerHTML = restorepage;
				}
			</script>
			<a onClick="printContent('detail')" target="_new" class="btn btn-success"> <i class="material-icons">print</i>
				<span>PRINT</span></a>
		</div>
	</div>
</div>
