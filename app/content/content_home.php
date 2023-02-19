<div class="container-fluid">
			<div class="row clearfix">
			<div class="block-header">
              	<div class="images">  <h2><?php $tanggal = date('d M Y');
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
									echo $dayList[$day].", ".$tanggal;?>
									<img src="images/logobappenda3.png" width="300px" style="margin-right:10px;" alt="User" />
									<img src="../images/samsat2.jpeg" width="170px" alt="User" /></h2>
									</div>

            </div>
                <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">JUMLAH PEGAWAI</div>
                            <div class="number count-to"><?php $s_karyawan = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan");
							$karyawan = mysqli_fetch_array($s_karyawan);
							$t_karyawan = mysqli_num_rows($s_karyawan);
							echo $t_karyawan;?></div>
                        </div>
                    </div>
							</div>
							  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">check_box</i>
                        </div>
                        <div class="content">
                            <div class="text">PEGAWAI MASUK</div>
                            <div class="number count-to"><?php
						$skr = date('Y-m-d');
						$s_absen = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from absensi where tanggal='$skr' and ijin is NULL order by masuk DESC");
						$t_absen = mysqli_num_rows($s_absen); echo $t_absen; ?></div>
                        </div>
                    </div>
									</div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">highlight_off</i>
                        </div>
                        <div class="content">
                            <div class="text-bold">PEGAWAI TIDAK MASUK</div>
                            <div class="number count-to"><?= $t_karyawan-$t_absen;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">home</i>
                        </div>
                        <div class="content">
                            <div class="text">PEGAWAI PULANG</div>
                            <div class="number count-to"><?php
						$s_pulang = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from absensi where tanggal='$skr' AND pulang !='0' order by pulang DESC");
						$t_pulang = mysqli_num_rows($s_pulang); echo $t_pulang; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row clearfix">
			 <div class="block-header ">
                <h2><?= $d_aplikasi['nama_perusahaan'];?></h2>
            </div>
			 <div class="row">
                <!-- Basic Examples -->

                <!-- #END# Basic Examples -->
                <!-- Badges -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                PEGAWAI MASUK
                            </h2>

                        </div>
                        <div class="body">
                            <ul class="list-group">
								<?php
								$s_divisi = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from divisi ");
									while ($d_divisi=mysqli_fetch_array($s_divisi)){
								?>
                                <li class="list-group-item"><?php echo $d_divisi['divisi'];?><span class="badge bg-green">
								<?php
								$d_masuk = mysqli_num_rows(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from absensi,karyawan where absensi.nik= karyawan.nik AND karyawan.divisi='$d_divisi[divisi]' AND absensi.tanggal='$skr' AND absensi.ijin is NULL"));
								echo $d_masuk;?> orang</span></li>
								<?php ;}
								?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Badges -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                PEGAWAI TIDAK MASUK
                            </h2>

                        </div>
                        <div class="body">
                            <ul class="list-group">
								<?php
								$s_divisi1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from divisi ");
									while ($d_divisi1=mysqli_fetch_array($s_divisi1)){
								?>
                                <li class="list-group-item"><?php echo $d_divisi1['divisi'];?><span class="badge bg-red">
								<?php
								$d_masuk1 = mysqli_num_rows(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from absensi,karyawan where absensi.nik= karyawan.nik AND karyawan.divisi='$d_divisi1[divisi]' AND absensi.tanggal='$skr' AND absensi.ijin is NULL"));
								$d_total = mysqli_num_rows(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from karyawan where divisi='$d_divisi1[divisi]'"));
								echo $d_total-$d_masuk1;?> orang</span></li>
								<?php ;}
								?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Badges -->
            </div>
			</div>
</div>
