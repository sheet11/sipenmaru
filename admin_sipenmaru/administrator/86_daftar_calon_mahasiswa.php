<?php include"01_nav.php";?>

<?php
// BACK OFFICE

error_reporting(0);
// super user
if($_SESSION['level'] == "administrator"){ ?>
<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
            <tr class="info">
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru 2 Pilihan Mandiri</b></h4></td>   

			<tr>
				<td><a href="85_cetak_ruang_ujian_keseluruhan.php" class="btn btn-primary">Cetak Keseluruhan Data </a></td> 
				<td align="right"> Jumlah <a class="btn btn-danger" >
				<?php
                     require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir4 where status='Sudah Membayar' and tanggal_ujian='2023-06-22' and sesi_ujian='Sesi 6 Pukul 13:00 WIB' order by username asc");
                                                        $jumlah = mysqli_num_rows ($query); ?>
                                                        <?php echo $jumlah; ?> </td>
                        </tr></a></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>

		<table style="width:100%;" class="table table-bordered">	
		  	<tr class="info">
				<th width="5">No.</th>
				<th>ID</th>
				<th>Nama Lengkap</th>
				<th>Prodi 1</th>
				<th>Prodi 2</th>
				<th>Tanggal</th>
				<th>Tempat</th>
				<th>Ruang</th>
				<th>Sesi</th>
				<th width="100">Aksi</th>
			</tr>
			<?php 
							
					$query=mysqli_query($kon,"select * from tb_formulir4 where status='Sudah Membayar' and tanggal_ujian='2023-06-22' and sesi_ujian='Sesi 6 Pukul 13:00 WIB' order by username asc");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td style='font-size:12;text-transform:uppercase;'>$a[nama_lengkap]</td>
					<td>$a[pilihan_prodi]</td>
					<td>$a[pilihan_prodi2]</td>
					<td>$a[tanggal_ujian]</td>
					<td>$a[tempat_ujian]</td>
					<td>$a[ruang_ujian]</td>
					<td>$a[sesi_ujian]</td>
					<td>
						<a href='84_cetak_ruang_ujian.php?user_id=$a[username]' class='btn btn-danger btn-sm'>Cetak	</a>  
					</td>
				</tr>";
				$i++;
			}
			
}
			?>
		
	 
	</div>
</div>			



