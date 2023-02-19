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
            <div class="card col-md-8">
            <div class="body">
			<form method="get">
				<div class="col-sm-3 ">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="date" name="date" value="<?= $_GET['date']?>" class="datepicker form-control" data-date-format="yyyy/mm/dd" placeholder="Tanggal" required>
						</div>
					</div>
				</div>
				<div class="col-sm-6 ">
					<div class="form-group">
					<?php if(1 == 1) { ?>
						<select name="divisi" class="form-control show-tick">
							<option value="">-- Pilih divisi --</option>
								<?php
									$a=$_GET['divisi'];
									$sql_a = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM divisi");
									while($d_a = mysqli_fetch_assoc($sql_a)){
									if($a == $d_a['divisi']){
									echo '<option value="'.$d_a['divisi'].'" selected>'.$d_a['divisi'].'</option>';
										} else {
									echo '<option value="'.$d_a['divisi'].'">'.$d_a['divisi'].'</option>';
										}
									}
								?>

						</select>
						<?php ;} else {?>
						<select name="divisi" class="form-control show-tick">

								<?php
									$a=$_GET['divisi'];
									$sql_a = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM divisi where divisi='$_SESSION[divisi]'");
									while($d_a = mysqli_fetch_assoc($sql_a)){

									echo '<option value="'.$d_a['divisi'].'" selected>'.$d_a['divisi'].'</option>';

									}
								?>

						</select>
						<?php ;} ?>
					</div>
				</div>
				<button type="submit" class="btn btn-primary waves-effect">
                <i class="material-icons">search</i>
                <span>CARI</span>
                </button>

           </div>
        </div>
            </div>
			<?php
					if(isset($_GET['date']) && $_GET['date']){
					?>
            <div class="row clearfix">

			 <div class="card">
                        <div class="header">
                            <h2>
                                DATA PEGAWAI TIDAK MASUK <?php $skr = $_GET['date'] ;  echo $skr;?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
											<th></th>
                                            <th>NIK Pegawai</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
											<th>Pekerjaan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
									<?php

										$s_karyawan = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan where nik not in (SELECT nik from absensi where tanggal='$_GET[date]') AND divisi LIKE '%$_GET[divisi]'");
										while ($d_karyawan=mysqli_fetch_array($s_karyawan)){
									?>
                                        <tr>
											<td>
											<?php
											$a=$d_karyawan['divisi'];
												if(1 == 1){
											?>
											<div class="btn-group">
												<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
													 <span class="caret"></span> PROSES IJIN
												</button>
												<ul class="dropdown-menu">
													<li><a style="color:green" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=sakit&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> tidak masuk karena sakit?')"> Sakit</a></li>
													<li><a style="color:blue" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=ijin&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> ijin tidak masuk?')">Ijin</a></li>
													<li><a style="color:black" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=cuti&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> ijin cuti?')">Cuti</a></li>
													<li><a style="color:red" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=alpa&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> tidak masuk tanpa keterangan/ALPA?')">Alpa</a></li>
												</ul>
											</div>
											<?php
												;} else if(1 == 1){
											?>
											<div class="btn-group">
												<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
													 <span class="caret"></span> PROSES IJIN
												</button>
												<ul class="dropdown-menu">
													<li><a style="color:green" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=sakit&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> tidak masuk karena sakit?')"> Sakit</a></li>
													<li><a style="color:blue" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=ijin&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> ijin tidak masuk?')">Ijin</a></li>
													<li><a style="color:black" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=cuti&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> ijin cuti?')">Cuti</a></li>
													<li><a style="color:red" href="controller/ijin?nik=<?= $d_karyawan['nik'];?>&ijin=alpa&date=<?= $skr; ?>&divisi=<?= $d_karyawan['divisi'];?>" onclick="return confirm('Apakah NIK Anggota <?= $d_karyawan['nik'];?> tidak masuk tanpa keterangan/ALPA?')">Alpa</a></li>
												</ul>
											</div>

											<?php
												;} else{ echo'';}
											?></td>
                                            <td><?= $d_karyawan['nik'];?></td>
                                            <td><?= $d_karyawan['nama'];?></td>
                                          <td><?= $d_karyawan['divisi'];?></td>
                                            <td><?= $d_karyawan['alamat'];?></td>                                        </tr>
									<?php ;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
											</div>

			</div>
			<?php
			}else{ ?>
				<div class="col-md-9">

				</div>
						<?php
							}

						?>

</div>
