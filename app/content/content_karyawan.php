<div class="container-fluid">
	<div class="row clearfix">
		<div class="block-header">
			<h2><?php $tanggal = date('d M Y');
				$day = date('D', strtotime($tanggal));
				$dayList = array(
					'Sun' => 'Minggu',
					'Mon' => 'Senin',
					'Tue' => 'Selasa',
					'Wed' => 'Rabu',
					'Thu' => 'Kamis',
					'Fri' => 'Jumat',
					'Sat' => 'Sabtu'
				);
				echo $dayList[$day] . ", " . $tanggal; ?></h2>
		</div>
		<div class="body">
			<?php if (1 == 1) { ?>
				<div class="icon-and-text-button-demo">
					<button type="button" class="btn btn-primary waves-effect" data-color="indigo" data-toggle="modal" data-target="#largeModal">
						<i class="material-icons">add_box</i>
						<span>TAMBAH</span>
					</button>
					<!-- Large Size -->

					<button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#smallModal">
						<i class="material-icons">file_upload</i>
						<span>IMPORT EXCEL</span>
					</button>
					<a href="karyawan_print"><button type="button" class="btn btn-danger waves-effect">
							<i class="material-icons">print</i>
							<span>PRINT BARCODE</span>
						</button></a>

				</div>
			<?php
			} else {
				echo '';
			} ?>
		</div>
	</div>

	<div class="row clearfix">
		<div class="card">
			<div class="header">
				<h2>
					DATA KARYAWAN
				</h2>
			</div>
			<div class="body">
				<div class="table-responsive">
					<p>Export/Download :</p>
					<table class="table table-bordered table-striped table-hover dataTable js-exportable">
						<thead>
							<tr>
								<th>Aksi</th>

								<th>NIK</th>
								<th>Nama</th>
								<th>Pekerjaan</th>
								<th>alamat</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$s_karyawan = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM karyawan");
							while ($d_karyawan = mysqli_fetch_array($s_karyawan)) {
							?>
								<tr>
									<td>
										<?php
										$a = $d_karyawan['divisi'];
										if (1 == 1) {
										?>
											<div class="btn-group">
												<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="karyawan_edit?nik=<?= $d_karyawan['nik']; ?>">Edit</a></li>
													<li><a href="karyawan_detail?nik=<?= $d_karyawan['nik']; ?>">Detail</a></li>
													<li><a href="controller/karyawan_hapus?id=<?= $d_karyawan['id']; ?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik']; ?> akan dihapus ?')">Hapus</a></li>
												</ul>
											</div>
										<?php
										} else if (1 == 1) {
										?>
										<?php
										} else {
											echo '';
										}
										?>
									</td>


									<td><?= $d_karyawan['nik']; ?></td>
									<td><?= $d_karyawan['nama']; ?></td>
									<td><?= $d_karyawan['divisi']; ?></td>
									<td><?= $d_karyawan['alamat']; ?></td>

								</tr>
							<?php
							} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="largeModalLabel">Tambah Karyawan</h4>
			</div>
			<div class="modal-body">

				<form action="controller/karyawan_simpan" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="email_address_2">NIK</label>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nik" class="form-control" placeholder="NIK Pegawai" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Nama</label>
						</div>
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Divisi Pekerjaan</label>
						</div>
						<div class="col-sm-6 ">
							<div class="form-group">
								<select name="divisi" class="form-control show-tick" required>
									<option value="">-- Pilih Divisi --</option>
									<?php
									$sql_jt = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM divisi");
									if (mysqli_num_rows($sql_jt) != 0) {
										while ($d_jt = mysqli_fetch_assoc($sql_jt)) {
											echo '<option value="' . $d_jt['divisi'] . '">' . $d_jt['divisi'] . '</option>';
										}
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Jenis Kelamin</label>
						</div>
						<div class="col-sm-4 "><?php // FIXME:
												?>
							<div class="form-group">
								<select name="jenis_kelamin" class="form-control show-tick" required>
									<option value="">-- Pilih Jenis Kelamin --</option>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Nomor Telp.</label>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="no_telp" class="form-control" placeholder="Nomor Telpon" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Agama</label>
						</div>
						<div class="col-sm-4 ">
							<div class="form-group">
								<select name="agama" class="form-control show-tick" required>
									<option value="">-- Pilih Agama --</option>
									<option value="Islam">Islam</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Kristen">Kristen</option>

								</select>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">alamat</label>
						</div>
						<div class="col-sm-4 ">
							<div class="form-group">
								<select name="alamat" class="form-control show-tick" name="alamat" required>
									<option value="">-- Pilih alamat --</option>
									<?php
									$sql_l = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alamat");
									if (mysqli_num_rows($sql_l) != 0) {
										while ($d_l = mysqli_fetch_assoc($sql_l)) {
											echo '<option value="' . $d_l['alamat'] . '">' . $d_l['alamat'] . '</option>';
										}
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
							<label for="password_2">Photo</label>
						</div>
						<div class="col-sm5 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="file" name="file" class="form-control" required>
								</div>
							</div>
						</div>
					</div>

			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success waves-effect">SAVE CHANGES</button>
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- Small Size -->
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="smallModalLabel">Import Data</h4>
			</div>
			<div class="modal-body">
				<form name="myForm" id="myForm" onSubmit="return validateForm2()" action="controller/karyawan_import.php" method="post" enctype="multipart/form-data">
					<div class="row clearfix">
						<div class="col-sm12 col-xs-12">
							<div class="form-group">
								<div class="form-line">
									<input type="file" id="filekaryawan" name="filekaryawan" class="form-control" required>
								</div>

							</div>
							<small>*masukkan file .xls (excel 2003)</small><br />
							<br />
							<input type="checkbox" name="drop" value="1" id="basic_checkbox_1"></input><label for="basic_checkbox_1"><u>Kosongkan tabel pegawai terlebih dahulu.</u> </label>

						</div>
					</div>
			</div>
			<div class="modal-footer">
				<input type="submit" name="submit" class="btn btn-success waves-effect" value="Import" />
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
			</form>
			<script type="text/javascript">
				//    validasi form (hanya file .xls yang diijinkan)
				function validateForm2() {
					function hasExtension(inputID, exts) {
						var fileName = document.getElementById(inputID).value;
						return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
					}

					if (!hasExtension('filekaryawan', ['.xls'])) {
						alert("Hanya file XLS (Excel 2003) yang diijinkan.");
						return false;
					}
				}
			</script>
		</div>
	</div>
</div>