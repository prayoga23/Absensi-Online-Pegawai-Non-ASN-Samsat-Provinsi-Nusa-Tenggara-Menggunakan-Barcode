<div class="container-fluid">
	<div class="row">
	    <div class="card col-md-8">
            <div class="body">
			<form method="get">
				<div class="col-sm-3 ">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="date" name="start_date" value="<?= $_GET['start_date']?>" class="datepicker form-control" data-date-format="yyyy/mm/dd" placeholder="Start Date" required>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<div class="form-line">
							<input type="text" id="date2" name="end_date" value="<?= $_GET['end_date']?>" class="datepicker form-control" data-date-format="yyyy/mm/dd" placeholder="End Date" required>
						</div>
					</div>
				</div>
				<div class="col-sm-4 ">
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
            <div class="row clearfix">
			 <div class="card">
                        <div class="header">
                            <h2>
                                DATA ABSENSI
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
											<th>NIK Pegawai</th>
                                            <th>Nama</th>
                                            <th>alamat</th>
											<th>Divisi</th>
                                            <th>Absen</th>
                                            <th>Waktu Masuk</th>
                                            <th>Waktu Pulang</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>

                                    <tbody>
									<?php
										$s_absen = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM absensi,karyawan where absensi.nik=karyawan.nik AND tanggal between '$_GET[start_date]' AND '$_GET[end_date]' AND karyawan.divisi LIKE '%$_GET[divisi]' GROUP BY karyawan.nik");
										while ($d_absen=mysqli_fetch_array($s_absen)){
									?>
									<tr>
                                            <td><?= $d_absen['nik'];?></td>
                                            <td><?= $d_absen['nama'];?></td>
                                            <td><?= $d_absen['alamat'];?></td>
											<td><?= $d_absen['divisi'];?></td>
                    						<td>Masuk</td>
										<?php
											$date = $_GET['start_date'];
											while ($date <= $_GET['end_date'])
											{ ?>
											<td><?php
											$s_masuk = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM absensi where nik='$d_absen[nik]' AND tanggal='$date' GROUP by nik");
											$d_masuk=mysqli_fetch_array($s_masuk);
											echo $d_masuk['masuk'];
											?> </td>
											<?php $date = date('Y-m-d', strtotime($date . ' +1 day')); }
											 ?>
											<?php
											$date = $_GET['start_date'];
											while ($date <= $_GET['end_date'])
											{ ?>
											<td><?php
											$s_pulang = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM absensi where nik='$d_absen[nik]' AND tanggal='$date' GROUP by nik");
											$d_pulang=mysqli_fetch_array($s_pulang);
											echo $d_pulang['pulang'];
											?> </td>
											<?php $date = date('Y-m-d', strtotime($date . ' +1 day')); }
											 ?>
											 <?php
											$date = $_GET['start_date'];
											while ($date <= $_GET['end_date'])
											{ ?>
											<th><?= $date;?> </th>
											<?php $date = date('Y-m-d', strtotime($date . ' +1 day')); }
											 ?>
                                        </tr>
    								<?php ;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
			</div>
</div>
