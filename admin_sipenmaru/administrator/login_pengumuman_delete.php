<?php
include "../config/koneksi.php";

if (isset($_GET['id_periode'])) {
	$id_periode = $_GET['id_periode'];

	// Prepare the SQL statement
	$stmt = $kon->prepare("DELETE FROM periode WHERE id_periode = ?");
	$stmt->bind_param("i", $id_periode);

	// Execute the statement
	if ($stmt->execute()) {
		echo "<script>alert('Data berhasil dihapus');window.location='login_pengumuman.php'</script>";
	} else {
		echo "<script>alert('Gagal menghapus data');window.location='login_pengumuman.php'</script>";
	}

	// Close the statement
	$stmt->close();
} else {
	echo "<script>alert('ID periode tidak ditemukan');window.location='login_pengumuman.php'</script>";
}

// Close the database connection
$kon->close();
