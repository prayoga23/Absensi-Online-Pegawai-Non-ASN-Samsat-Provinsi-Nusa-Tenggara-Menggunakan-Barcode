<div class="container-fluid">
	<?php $detail=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan where nik='$_GET[nik]'")); ?>
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
			 <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEGAWAI
                            </h2>
                        </div>
                        <div class="body">

											<form action="controller/karyawan_edit" class="form-horizontal" method="POST" enctype="multipart/form-data">
												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="email_address_2">NIK</label>
													</div>
													<div class="col-sm-3">
														<div class="form-group">
															<div class="form-line">
																<input type="text" id="nik" name="nik" readonly="readonly" class="form-control" value="<?= $detail['nik'];?>" placeholder="Masukkan NIK" required>
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
																<input type="text"  name="nama" id="nama" class="form-control" value="<?= $detail['nama'];?>" placeholder="Nama Lengkap" required>
															</div>
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="password_2">Divisi</label>
													</div>
													<div class="col-sm-8">
														<div class="form-group">
															<select name="divisi" class="form-control show-tick" required>
															<option value="">-- Pilih Divisi --</option>
															<?php
															$jt = $detail['divisi'];
															$sql_jt = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM divisi");
															while($d_jt = mysqli_fetch_assoc($sql_jt)){
															if($jt == $d_jt['divisi']){
															echo '<option value="'.$d_jt['divisi'].'" selected>'.$d_jt['divisi'].'</option>';
																	} else{
															echo '<option value="'.$d_jt['divisi'].'" >'.$d_jt['divisi'].'</option>';
																	}
																}
															?>
															</select>
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="password_2">Pekerjaan</label>
													</div>
													<div class="col-sm-4 ">
														<div class="form-group">
																	<select name="jenis_kelamin" id="jk"  required>
																		<option value="">-- Pilih Jenis Kelamin --</option>
																		<option value="Laki-Laki" <?php if (!(strcmp("Laki-Laki", htmlentities($detail['jenis_kelamin'])))) {echo "selected=\"selected\"";} ?>>Laki-Laki</option>
																		<option value="Perempuan" <?php if (!(strcmp("Perempuan", htmlentities($detail['jenis_kelamin'])))) {echo "selected=\"selected\"";} ?>>Perempuan</option>

																	</select>
														</div>
													</div>
												</div>


												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="password_2">Nomor Telp</label>
													</div>
													<div class="col-sm-5">
														<div class="form-group">
															<div class="form-line">
																<input type="text"  name="no_telp" id="no_telp" value="<?= $detail['no_telp'];?>" class="form-control" placeholder="Nomor Telpon" required>
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
																	<select name="agama" id="agama" class="form-control show-tick" required>
																		<option value="">-- Pilih Agama --</option>
																		<option value="Islam" <?php if (!(strcmp("Islam", htmlentities($detail['agama'])))) {echo "selected=\"selected\"";} ?>>Islam</option>-->
																		<option value="Hindu" <?php if (!(strcmp("Hindu", htmlentities($detail['agama'])))) {echo "selected=\"selected\"";} ?>>Hindu</option>
																		<option value="Budha" <?php if (!(strcmp("Budha", htmlentities($detail['agama'])))) {echo "selected=\"selected\"";} ?>>Budha</option>
																		</option>
																		<option value="Kristen" <?php if (!(strcmp("Kristen", htmlentities($detail['agama'])))) {echo "selected=\"selected\"";} ?>>Kristen</option>

																	</select>
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="password_2">Alamat</label>
													</div>
													<div class="col-sm-4 ">
														<div class="form-group">
															<select name="alamat" id="alamat" class="form-control show-tick" required>
															<option value="">-- Pilih alamat --</option>
															<?php
															$lok = $detail['alamat'];
															$sql_l = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alamat");
															while($d_l = mysqli_fetch_assoc($sql_l)){
																if($lok == $d_l['alamat']){
															echo '<option value="'.$d_l['alamat'].'" selected>'.$d_l['alamat'].'</option>';
																	} else {
															echo '<option value="'.$d_l['alamat'].'" >'.$d_l['alamat'].'</option>';
																	}
																}
															?>
															</select>

														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="password_2">Start Date</label>
													</div>
													<div class="col-sm-3 col-xs-7">
														<div class="form-group">
															<div class="form-line">
																<input type="text" id="date" name="start_date" class="datepicker form-control" value="<?= $detail['start_date'];?>" data-date-format="yyyy/mm/dd" placeholder="Start Date" required>
															</div>
														</div>
													</div>
												</div>
												<div class="row clearfix">
													<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
														<label for="password_2">End Date</label>
													</div>
													<div class="col-sm-3 col-xs-7">
														<div class="form-group">
															<div class="form-line">
																<input type="text" id="date2" name="end_date" class="datepicker form-control" value="<?= $detail['end_date'];?>" data-date-format="yyyy/mm/dd" placeholder="End Date" required>
															</div>
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
																<input type="file" id="foto" name="file"  class="form-control" >
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
