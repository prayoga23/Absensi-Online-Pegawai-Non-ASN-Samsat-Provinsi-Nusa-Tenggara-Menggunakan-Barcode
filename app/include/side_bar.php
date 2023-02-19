<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
              <?php
$d_app = mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * from aplikasi"));
?>
                <div class="image" >
                    <img src="./images/<?= $d_app['logo'] ?>" width="70" height="70" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['nama'];?></div>
                    <div class="email"></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                           <li><a href="../controllers/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->

            <div class="menu">

                <ul class="list">
                <?php if ($_SESSION['level'] == "superadmin") {
                if ($_SESSION['level'] == "superadmin") { ?>
                    <li  class="active">
                        <a href="home">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>

                        <a href="karyawan">
                            <i class="material-icons">supervisor_account</i>
                            <span>Data Pegawai</span>
                        </a>
                    </li>
                    <li >
                        <a href="absensi">
                            <i class="material-icons">access_alarms</i>
                            <span>Absensi Masuk Dan Pulang</span>
                        </a>
                    </li>
					<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">date_range</i>
                            <span>Proses Ijin, Off, Libur</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="ijin">Izin</a>
                            </li>
                            <li>
                                <a href="off">Off</a>
                            </li>
                            <li>
                                <a href="libur">Libur</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
  <?php if ($_SESSION['level'] == "karyawan") {
                if ($_SESSION['level'] == "karyawan") { ?>
                 <li  class="active">
                        <a href="izin_home">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
            <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">date_range</i>
                            <span>Proses Izin, Off, Libur</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="izin">Izin</a>
                            </li>
                            <li>
                                <a href="off">Off</a>
                            </li>
                            <li>
                                <a href="libur">Libur</a>
                            </li>
                        </ul>
                    </li>
                    <?php
                }
            }
            ?>
                  <?php if ($_SESSION['level'] == "superadmin") {
                if ($_SESSION['level'] == "superadmin") { ?>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="absensi_all">Absensi Keseluruhan</a>
                            </li>
                            <li>
                                <a href="absensi_ijin">Pegawai Izin</a>
                            </li>
                        </ul>
                    </li>

					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">cloud</i>
                            <span>Master Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="lokasi">Alamat</a>
                            </li>
                            <li>
                                <a href="divisi">Divisi</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="setting">
                            <i class="material-icons">settings</i>
                            <span>Setting</span>
                        </a>
                    </li>
            <?php
                }
            }
            ?>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                  <?= date('Y') ?> © <?= $d_aplikasi['nama_perusahaan'];?>
                </div>

            </div>
            <!-- #Footer -->
        </aside>
