<?php include"01_nav.php";?>



<?php
// BACK OFFICE


// super user
if($_SESSION['level'] == "administrator"){ ?>
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">	
    	<table style="width:100%;">
    	<tr class="info">
			<td align="left" colspan="6"><b><h4>DAFTAR JUMLAH PRODI</b></h4></td> 
		</tr>
		<tr>
			<td width="20%"><label>Pencarian Berdasarkan</label></td>				
			<form method="post" action="" enctype="multipart/form-data">					
			<td width="25%">
							<select name="cariid" class="form-control">
								<option value="id_jumlah_prodi">ID Jumlah Prodi</option>
								<option value="jumlah_prodi">Nama Jumlah Prodi</option>
								
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
					<a href="13_daftar_jumlah_prodi.php" class="btn btn-primary">ALL</a>
				</td>					
			</tr>
			<tr>
				<td><a href="13_formulir_jumlah_prodi.php" class="btn btn-primary">Tambah Data + </a></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table>

		<table style="width:100%;" class="table table-bordered">	
		  	<tr class="info">
				<th width="10">No.</th><th>Nama Jumlah Prodi</th><th width="150">Aksi</th>
			</tr>
			<?php 
				if(isset($_POST['submit'])){
					$cariid = $_POST['cariid'];
					$cari = $_POST['cari'];
					$query=mysqli_query($kon,"select * from tb_jumlah_prodi where $cariid = '$cari' 
																								   or $cariid = '0'");
																								   $i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){
			echo"
				<tr>
					<td>$i</td>
					<td>$a[jumlah_prodi]</td>
					<td>
						<a href='13_edit_jumlah_prodi.php?id_jumlah_prodi=$a[id_jumlah_prodi]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='13_delete_jumlah_prodi.php?id_jumlah_prodi=$a[id_jumlah_prodi]' onclick='return confirm(\"Anda yakin akan menghapus $a[jumlah_prodi] ?\")'>
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
					$query=mysqli_query($kon,"select * from tb_jumlah_prodi order by jumlah_prodi asc LIMIT $posisi,$batas");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[jumlah_prodi]</td>
					<td>
						<a href='13_edit_jumlah_prodi.php?id_jumlah_prodi=$a[id_jumlah_prodi]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='13_delete_jumlah_prodi.php?id_jumlah_prodi=$a[id_jumlah_prodi]' onclick='return confirm(\"Anda yakin akan menghapus $a[jumlah_prodi] ?\")'>
							<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
						</a>
					</td>
				</tr>";
				$i++;
			}
			

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_jumlah_prodi"));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
			?>
		
	 
	</div>
</div>			
<?php
}




