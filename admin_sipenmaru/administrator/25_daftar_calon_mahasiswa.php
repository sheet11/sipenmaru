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
			<td align="left" colspan="6"><b><h4>DAFTAR CALON MAHASISWA</b></h4></td>   
		</tr>
		  	<tr>
				<td width="20%"><label>Pencarian Berdasarkan</label></td>				
					<form method="post" action="" enctype="multipart/form-data">					
						<td width="25%">
							<select name="cariid" class="form-control">
								<option value="user_id">No Pendaftaran</option>
							</select>
						</td>
						<td width="15%"></td>
						<td>
							<div class="form-group input-group" style="margin-top:15px;">
							<span class="input-group-btn">
								<input type="text" name="cari" placeholder="Input ID/Scanner Barcode" class="form-control">
								<button class="btn btn-default" type="submit" name="submit"><i class="fa fa-search"></i></button>
							</span>
							</div>	
						</td>
						<td width="5%">
						</td>	
					</form>
				
				<td>
					<a href="23_daftar_calon_mahasiswa.php" class="btn btn-primary">ALL</a>
				</td>					
			</tr>
			
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>

		<table style="width:100%;" class="table table-bordered">	
		  	<tr class="info">
				<th>No.</th><th>No Pendaftaran</th><th>Nama Lengkap</th><th>Status Formulir</th><th width="100">Aksi</th>
			</tr>
			<?php 
				if(isset($_POST['submit'])){
					$cariid = $_POST['cariid'];
					$cari = $_POST['cari'];
					$query=mysqli_query($kon,"select * tb_pendaftaran_3  where $cariid = '$cari' 
																								   or $cariid = '0'");
																								   $i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){
			echo"
				<tr>
					<td>$i</td>
					<td>$a[user_id]</td>
					<td>$a[namalengkap]</td>
					<td>$a[status_aktif]</td>
					<td>
						<a href='09_cetak_calon_mahasiswa_pmdp.php?user_id=$a[user_id]'>
							<span class='glyphicon glyphicon-leaf' aria-hidden='true'></span>
						</a> 
						<a href='09_edit_calon_mahasiswa_pmdp.php?user_id=$a[user_id]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='09_delete_calon_mahasiswa_pmdp.php?user_id=$a[user_id]' onclick='return confirm(\"Anda yakin akan menghapus $a[username] ?\")'>
							<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
						</a>
					</td>
				</tr>";
				$i++;
			}
				}else{
					$p      = new Paging;
					$batas  = 10;
					$posisi = $p->cariPosisi($batas);				
					$query=mysqli_query($kon,"select * from tb_pendaftaran_3 where status_aktif='Belum Mengisi' order by user_id  desc LIMIT $posisi,$batas");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[user_id]</td>
					<td>$a[namalengkap]</td>
					<td>$a[status_aktif]</td>
					<td>
						<a href='09_cetak_calon_mahasiswa_pmdp.php?user_id=$a[user_id]'>
							<span class='glyphicon glyphicon-leaf' aria-hidden='true'></span>
						</a> 
						<a href='09_edit_calon_mahasiswa_pmdp.php?user_id=$a[user_id]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='09_delete_calon_mahasiswa_pmdp.php?user_id=$a[user_id]' onclick='return confirm(\"Anda yakin akan menghapus $a[username] ?\")'>
							<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
						</a>
					</td>
				</tr>";
				$i++;
			}
			

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_pendaftaran_3 "));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
			?>
		
	 
	</div>
</div>			
<?php
}




