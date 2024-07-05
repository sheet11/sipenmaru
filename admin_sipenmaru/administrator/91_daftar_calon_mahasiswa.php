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
            <td align="left" colspan="6"><b><h4>Daftar Calon Mahasiswa Baru 1 Pilihan Mandiri</b></h4></td>   

			<tr>
				<td><a href="91_cetak_ruang_ujian_keseluruhan.php" class="btn btn-primary">Cetak </a></td> 
				<td align="right"> Jumlah <a class="btn btn-danger" ><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir5 where status='Sudah Membayar' and tanggal_ujian='2023-06-22' and sesi_ujian='Sesi 4 Pukul 08:00 WIB' order by pilihan_prodi asc");
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
				<th>Pil.Prodi</th>
				<th>Tanggal</th>
				<th>Tempat</th>
				<th>Ruang</th>
				<th>Sesi</th>
			</tr>
			<?php 
							
					$query=mysqli_query($kon,"select * from tb_formulir5 where status='Sudah Membayar'and  tanggal_ujian='2023-06-22' and sesi_ujian='Sesi 4 Pukul 08:00 WIB' order by pilihan_prodi asc");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[pilihan_prodi]</td>
					<td>$a[tanggal_ujian]</td>
					<td>$a[tempat_ujian]</td>
					<td>$a[ruang_ujian]</td>
					<td>$a[sesi_ujian]</td>
					
				</tr>";
				$i++;
			}
			
}
			?>
		
	 
	</div>
</div>			



