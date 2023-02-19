<?php
include '../include/koneksi.php';
// memulai session

session_start();
error_reporting(0);
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if ( !isset($_SESSION['level'])) {

	header('location:../login');
	exit();
}
 ?>
<!DOCTYPE html>
<html>

<?php
include 'include/head.php'
?>

<body class="theme-blue">
  
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
	<?php
	include 'include/top_bar.php'
	?>
    <section>
        <!-- Left Sidebar -->
        <?php
		include 'include/side_bar.php'
		?>
        <!-- #END# Left Sidebar -->

    </section>

    <section class="content">
		<?php
		include 'content/content_divisi.php'
		?>
    </section>

    <?php
		include 'include/script.php'
		?>


</body>

</html>
