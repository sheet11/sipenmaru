<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Selamat Datang</h2>   
	    <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<hr></hr>
		<div>
            
        <table style="width:100%;">
			<tr>
				<td><a href="02_input_nilai.php" class="btn btn-danger">Input Nilai +</a> | <a href="02_cetak_nilai.php" class="btn btn-primary">Cetak Nilai </a> </td>
			</tr>

			<tr>
				<td>&nbsp;</td>
			</tr>
		</table> 

            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>Semester</th><th width="25%">Aksi</th>
					</tr>
				</thead>
				<?php 
						$query=mysqli_query($kon,"select * from tb_nilai where username='$_SESSION[username]' order by semester asc");
					
						$i =  +1;		
					while($a=mysqli_fetch_array($query))
					{
						echo"
						<tr>
							<td>$i</td>
							<td>$a[semester]</td>
							<td>";

									echo "
											<a href='02_edit_nilai.php?id_nilai=$a[id_nilai]' class='btn btn-danger'><b>Edit</b></a> 
											<a href='02_delete_nilai.php?id_nilai=$a[id_nilai]' onclick='return confirm(\"Anda yakin akan menghapus $a[semester] ?\")' class='btn btn-primary'>Delete</a>";
						echo"	</td>
							</tr>";


						$i++;
					}
				?>

			</table>

				<b>Catatan</b><br>
				1. Jika nilai di raport cuma ada 1 nilai, maka nilai pengajaran dan praktek disamain, misalnya matematika pengajaran 80, jadi praktekny jg di isi 80 <br />
				2. Untuk Nilai Semester Kurikulum 13(K13) harus dikonversi ke nilai tunggal<br>
				4. Jika tidak memiliki nilai pada matakuliah yang tertera silahkan di isi dengan angka " 0 "<br>
				5. Setelah selesai input, Mohon untuk di cek kembali agar tidak ada duplikasi semester<br>
				6. Raport Asli dibawah pada saat mengumpulkan berkas	 
	</div>
</div>




