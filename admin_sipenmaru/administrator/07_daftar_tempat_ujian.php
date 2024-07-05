<?php 
	include"01_nav.php";
	error_reporting(0)
?>
<?php
// super user
if($_SESSION['level'] == "administrator"){ ?>
<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
        <table style="width:100%;">
    	<tr class="info">
			<td align="left" colspan="6"><b><h4>DAFTAR Tempat Ujian</b></h4></td> 
		</tr>
		<tr>
			<td width="20%"><label>Pencarian Berdasarkan</label></td>				
			<form method="post" action="" enctype="multipart/form-data">					
			<td width="25%">
							<select name="cariid" class="form-control">
								<option value="id_tempat_ujian">ID Tempat Ujian</option>
								<option value="tempat_ujian">Nama Tempat Ujian</option>
								
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
					<a href="07_daftar_tb_tempat_ujian.php" class="btn btn-primary">ALL</a>
				</td>					
			</tr>
			<tr>
				<td><a href="07_formulir_tempat_ujian.php" class="btn btn-primary">Tambah Data + </a></td>
			</tr>
			<tr>
				<td>&nbsp;
				</td></tr>
		</table>

		<table style="width:100%;" class="table table-bordered">	
		  	<tr class="info">
				<th width="10">No.</th><th>Tempat Ujian</th><th width="150">Aksi</th>
			</tr>
			<?php 
				if(isset($_POST['submit'])){
					$cariid = $_POST['cariid'];
					$cari = $_POST['cari'];
					$query=mysqli_query($kon,"select * from tb_tempat_ujian where $cariid = '$cari' 
																								   or $cariid = '0'");
																								   $i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){
			echo"
				<tr>
					<td>$i</td>
					<td>$a[tempat_ujian]</td>
					<td>
						<a href='07_edit_tempat_ujian.php?id_tempat_ujian=$a[id_tempat_ujian]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='07_delete_tempat_ujian.php?id_tempat_ujian=$a[id_tempat_ujian]' onclick='return confirm(\"Anda yakin akan menghapus $a[tempat_ujian] ?\")'>
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
					$query=mysqli_query($kon,"select * from tb_tempat_ujian order by tempat_ujian asc LIMIT $posisi,$batas");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[tempat_ujian]</td>
					<td>
						<a href='07_edit_tempat_ujian.php?id_tempat_ujian=$a[id_tempat_ujian]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='07_delete_tempat_ujian.php?id_tempat_ujian=$a[id_tempat_ujian]' onclick='return confirm(\"Anda yakin akan menghapus $a[tempat_ujian] ?\")'>
							<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
						</a>
					</td>
				</tr>";
				$i++;
			}
			

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM tb_tempat_ujian"));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
			?>
		
	 
	</div>
</div>			
<?php
}




