<?php include"01_nav.php";?>



<?php
// BACK OFFICE

error_reporting(0);
// super user
if($_SESSION['level'] == "administrator"){ ?>
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">	
    	<table style="width:100%;">
    		<tr class="info">
				<td align="left" colspan="6"><b><h4>Gedung Bersama 10</b></h4></td>   
			</tr>

			<tr>
				<td><a href="79_cetak_ruang_ujian_keseluruhan.php" class="btn btn-primary">Cetak Keseluruhan Data </a></td> <td align="right"> Jumlah <a class="btn btn-danger" ><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 10' ");
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
				<th>No.</th><th>No Pendaftaran</th><th>Nama Lengkap</th><th>Ruang Ujian</th><th>Tempat Ujian</th><th>Jurusan</th><th width="100">Aksi</th>
			</tr>
			<?php 
							
					$query=mysqli_query($kon,"select * from tb_pendaftaran_2 where ruang_ujian='Gedung Bersama 10' order by user_id asc");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[user_id]</td>
					<td>$a[namalengkap]</td>
					<td>$a[ruang_ujian]</td>
					<td>$a[tempatujian]</td>
					<td>$a[pilihanjurusan]</td>
					<td>
						<a href='79_cetak_ruang_ujian.php?user_id=$a[user_id]' class='btn btn-danger btn-sm'>Cetak	</a>  
					</td>
				</tr>";
				$i++;
			}
			
}
			?>
		
	 
	</div>
</div>			




