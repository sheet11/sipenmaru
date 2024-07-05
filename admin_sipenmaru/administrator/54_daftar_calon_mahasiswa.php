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
				<td align="left" colspan="6"><b><h4>Ruang Auditorium Blok 2</b></h4></td>   
			</tr>

			<tr>
				<td><a href="56_cetak_ruang_ujian_keseluruhan.php" class="btn btn-primary">Cetak Keseluruhan Data </a></td> <td align="right"> Jumlah <a class="btn btn-danger" ><?php
                                                        require_once("../config/koneksi.php");
                                                        $query = mysqli_query ($kon,"SELECT * from tb_pendaftaran_3 where status_aktif='Sudah Mengisi' and ruang_ujian='Auditorium Blok 2' ");
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
				<th>No.</th><th>No Pendaftaran</th><th>Nama Lengkap</th><th>Ruang Ujian</th><th width="100">Aksi</th>
			</tr>
			<?php 
				if(isset($_POST['submit'])){
					$cariid = $_POST['cariid'];
					$cari = $_POST['cari'];
					$query=mysqli_query($kon,"select * tb_pendaftaran_3 where status_aktif='Sudah Mengisi' where $cariid = '$cari' 
																								   or $cariid = '0'");
																								   $i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){
			echo"
				<tr>
					<td>$i</td>
					<td>$a[user_id]</td>
					<td>$a[namalengkap]</td>
					<td>$a[ruang_ujian]</td>
					<td>
						<a href='55_cetak_ruang_ujian.php?user_id=$a[user_id]' class='btn btn-danger btn-sm'>Cetak	</a>  
					</td>
				</tr>";
				$i++;
			}
				}else{
					$p      = new Paging;
					$batas  = 10;
					$posisi = $p->cariPosisi($batas);				
					$query=mysqli_query($kon,"select * from tb_pendaftaran_3 where status_aktif='Sudah Mengisi' and ruang_ujian='Auditorium Blok 2' order by user_id  desc LIMIT $posisi,$batas");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[user_id]</td>
					<td>$a[namalengkap]</td>
					<td>$a[ruang_ujian]</td>
					<td>
						<a href='55_cetak_ruang_ujian.php?user_id=$a[user_id]' class='btn btn-danger btn-sm'>Cetak	</a>  
					</td>
				</tr>";
				$i++;
			}
			

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_pendaftaran_3 where status_aktif='Sudah Mengisi'"));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
			?>
		
	 
	</div>
</div>			
<?php
}




