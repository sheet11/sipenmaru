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
				<td><a href="83_cetak_ruang_ujian_keseluruhan.php" class="btn btn-primary">Cetak Keseluruhan Data </a></td> 
				<td><a href="82_cetak_ruang_ujian.php" class="btn btn-primary">Cetak Password </a></td> 
				<td align="right"> Jumlah <a class="btn btn-danger" ><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_formulir5 where status='Sudah Membayar' and hari='2' and sesi='3' order by sesi asc, hari asc, pc asc");
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
				<th>Hari</th>
				<th>Sesi</th>
				<th>PC</th>
				<th width="100">Aksi</th>
			</tr>
			<?php 
							
					$query=mysqli_query($kon,"select * from tb_formulir5 where status='Sudah Membayar' and hari='2' and sesi='3' order by sesi asc, hari asc, pc asc");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[hari]</td>
					<td>$a[sesi]</td>
					<td>$a[pc]</td>
					<td>
						<a href='83_cetak_ruang_ujian.php?user_id=$a[username]' class='btn btn-danger btn-sm'>Cetak	</a>  
					</td>
				</tr>";
				$i++;
			}
			
}
			?>
		
	 
	</div>
</div>			



