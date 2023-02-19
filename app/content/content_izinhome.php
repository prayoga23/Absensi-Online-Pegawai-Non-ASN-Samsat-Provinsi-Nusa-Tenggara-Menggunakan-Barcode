<div class="container-fluid">
    <div class="row clearfix">
        <div class="block-header">
            <div class="images">
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
									echo $dayList[$day].", ".$tanggal;?>
                    <img src="images/logobappenda3.png" width="300px" style="margin-right:10px;" alt="User" />
                    <img src="../images/samsat2.jpeg" width="170px" alt="User" /></h2>
            </div>

        </div>

    </div>
    <div class="container-fluid">
        <div class="album py-5 bg-light">
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-8 col-md-9 mx-auto">
                        <h1 class="fw-light">Selamat Datang Di Aplikasi Sistem Izin Pegawai Non ASN Samsat Provinsi Nusa
                            Tenggara Barat</h1>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
