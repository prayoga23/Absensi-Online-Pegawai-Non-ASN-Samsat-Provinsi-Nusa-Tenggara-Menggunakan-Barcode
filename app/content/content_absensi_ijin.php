<div class="container-fluid">
			<div class="row clearfix">
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
				<div class="col-sm-4 ">
					<div class="form-group">
					<?php if($_SESSION['divisi']=='all') { ?>
						<select name="divisi" class="form-control show-tick">
							<option value="">-- Pilih divisi --</option>
								<?php
									$a=$_GET['divisi'];
									$sql_a = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM divisi");
									while($d_a = mysqli_fetch_assoc($sql_a)){
									if($a == $d_a['kode_divisi']){
									echo '<option value="'.$d_a['kode_divisi'].'" selected>'.$d_a['divisi'].'</option>';
										} else {
									echo '<option value="'.$d_a['kode_divisi'].'">'.$d_a['divisi'].'</option>';
										}
									}
								?>

						</select>
						<?php ;} else {?>
						<select name="divisi">

								<?php
									$a=$_GET['divisi'];
									$sql_a = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM divisi where kode_divisi='$_SESSION[divisi]'");
									while($d_a = mysqli_fetch_assoc($sql_a)){

									echo '<option value="'.$d_a['kode_divisi'].'" selected>'.$d_a['divisi'].'</option>';

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
                                            <th>NIK Pegawai</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th>Alamat Pegawai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
									<?php

										$s_karyawan = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from absensi,karyawan  where absensi.nik=karyawan.nik AND absensi.ijin is not NULL  AND absensi.tanggal='$_GET[date]' AND karyawan.divisi LIKE '%$_GET[divisi]'");
										while ($d_karyawan=mysqli_fetch_array($s_karyawan)){
									?>
                                        <tr>

                                            <td><?= $d_karyawan['nik'];?></td>
                                            <td><?= $d_karyawan['nama'];?></td>
                                            <td><?= $d_karyawan['divisi'];?></td>
                                            <td><?= $d_karyawan['alamat'];?></td>


                                            <td><span class="badge bg-red"><?= $d_karyawan['ijin'];?><span></td>

                                        </tr>
									<?php ;} ?>
                                    </tbody>
                                </table>
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
