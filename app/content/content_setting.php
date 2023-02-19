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
								echo $dayList[$day].", ".$tanggal;?></h2>
		</div>
		<div class="body">

		</div>
	</div>

	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						SETTING
					</h2>
				</div>
				<div class="body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs tab-nav-right" role="tablist">
						<li role="presentation" class="active">
							<a href="#profile_only_icon_title" data-toggle="tab">
								<i class="material-icons">face</i> USER
							</a>
						</li>
						<li role="presentation">
							<a href="#home_only_icon_title" data-toggle="tab">
								<i class="material-icons">desktop_mac</i> APLIKASI
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade" id="home_only_icon_title">
							<?php
								$d_app = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from aplikasi"));
								?>
							<div class="modal-body">

								<form action="controller/aplikasi_edit" class="form-horizontal" method="POST"
									enctype="multipart/form-data">

									<div class="row clearfix">
										<div class="col-sm-7">
											<div class="form-group">
												<div class="form-line">
													<input type="hidden" value="<?= $d_app['id'];?>" name="id">
													<input type="text" value="<?= $d_app['nama_aplikasi'];?>"
														name="nama_aplikasi" class="form-control"
														placeholder="Nama Aplikasi" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">

										<div class="col-sm-7">
											<div class="form-group">
												<div class="form-line">
													<input type="text" value="<?= $d_app['nama_perusahaan'];?>"
														name="nama_perusahaan" class="form-control"
														placeholder="Nama Perusahaan" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">

										<div class="col-sm-4">
											<div class="form-group">
												<img src="../app/images/<?= $d_app['logo'];?>" width="70%"></img>
												<div class="form-line">
													<input type="file" name="file" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="row clearfix">

										<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
											<div class="form-group">
												<div class="form-line">
													<input type="text" value="<?= $d_app['alamat'];?>" name="alamat"
														class="form-control" placeholder="Alamat" required>
												</div>
											</div>
										</div>
									</div>

							</div>
							<button type="submit" class="btn btn-success waves-effect">SAVE CHANGES</button>

							</form>
						</div>
						<div role="tabpanel" class="tab-pane fade in active" id="profile_only_icon_title">
							<div class="icon-and-text-button-demo">
								<button type="button" class="btn btn-primary waves-effect" data-color="indigo"
									data-toggle="modal" data-target="#largeModal">
									<i class="material-icons">add_box</i>
									<span>TAMBAH</span>
								</button>
							</div>
							<p>
								<table class="table table-bordered table-striped table-hover dataTable">
									<thead>
										<tr>
											<th></th>
											<th>Nama</th>
											<th>Level</th>
										</tr>
									</thead>

									<tbody>
										<?php
										$s_user = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user");
										while ($d_user=mysqli_fetch_array($s_user)){
									?>
										<tr>
											<td>

												<div class="btn-group">
													<button type="button" class="btn btn-danger dropdown-toggle"
														data-toggle="dropdown" aria-haspopup="true"
														aria-expanded="true">
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a class="pilih_user" href="" data-toggle="modal"
																data-target="#edituser" u1="<?= $d_user['id'];?>"
																u2="<?= $d_user['username'];?>"
																u3="<?= $d_user['password'];?>"
																u4="<?= $d_user['nama'];?>">Ganti Password</a></li>
														<li><a href="controller/user_hapus?id=<?= $d_user['id'];?>"
																onclick="return confirm('Apakah user <?= $d_user['nama'];?> akan dihapus ?')">Hapus</a>
														</li>
													</ul>
												</div>

											</td>

											<td><?= $d_user['nama'];?></td>
											<td><?= $d_user['level'];?></td>

										</tr>
										<?php ;} ?>
									</tbody>
								</table>
							</p>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="largeModalLabel">Tambah User</h4>
			</div>
			<div class="modal-body">
				<form action="controller/user_simpan" class="form-horizontal" method="POST"
					enctype="multipart/form-data">
					<div class="row clearfix">
						<div class="col-sm-10">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="username" class="form-control" placeholder="Username"
										required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-12 col-md-12 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="text" name="nama" class="form-control" placeholder="Nama" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="password" name="password" class="form-control" placeholder="Password"
										required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">

													<div class="col-sm-12 ">
														<div class="form-group">
															<select name="level" class="form-control show-tick" required>
															<option value="">-- Pilih Level --</option>
															<?php
															$sql_b = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM user_level");
															if(mysqli_num_rows($sql_b) != 0){
															while($d_b = mysqli_fetch_assoc($sql_b)){
															echo '<option value="'.$d_b['level'].'">'.$d_b['level'].'</option>';
																	}
																}
															?>
															</select>
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


<div class="modal fade" id="edituser" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="largeModalLabel">Ganti Password</h4>
			</div>
			<div class="modal-body">

				<form action="controller/user_edit" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="row clearfix">
						<div class="col-sm-7">
							<div class="form-group">
								<div class="form-line">
									<input type="hidden" id="id_user" name="id_user" class="form-control" required>
									<input type="text" id="username" name="username" readonly="readonly"
										class="form-control" placeholder="Username" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">

						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="text" id="nama_user" name="nama" readonly="readonly"
										class="form-control" placeholder="Nama" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">

						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
							<div class="form-group">
								<div class="form-line">
									<input type="password" id="password" name="password" class="form-control"
										placeholder="Nama" required>
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