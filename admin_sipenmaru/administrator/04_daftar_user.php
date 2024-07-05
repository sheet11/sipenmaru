<?php 
	include"01_nav.php";
	error_reporting(0);
?>



<?php
// BACK OFFICE


// super user
if($_SESSION['level'] == "administrator"){ ?>
<aside class="right-side">
    <section class="content-header">
        <div class="container-fluid" style="margin:10px;">  
			<table style="width:100%;">
				<tr class="info">
					<td colspan="6"><b><h4>DAFTAR USER</b></h4></td> 
				</tr>
				<tr>
					<td width="20%"><label>Pencarian Berdasarkan</label></td>				
					<form method="post" action="" enctype="multipart/form-data">					
					<td width="25%">
									<select name="cariid" class="form-control">
										<option value="username">Username</option>								
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
							<a href="04_daftar_user.php" class="btn btn-primary">ALL</a>
						</td>					
					</tr>
			<tr>
				<td><a href="04_formulir_user.php" class="btn btn-primary">Tambah Data + </a></td>
			</tr>
		</table>

		<table style="width:100%;" class="table table-bordered">	
		  	<tr class="info">
				<th width="10">No.</th><th>Username</th><th>Password</th><th>Nama Lengkap</th><th>level</th><th width="150">Aksi</th>
			</tr>
			<?php 
				if(isset($_POST['submit'])){
					$cariid = $_POST['cariid'];
					$cari = $_POST['cari'];
					$query=mysqli_query($kon,"select username, password, nama_lengkap, level from tb_user where $cariid = '$cari' 
																								   or $cariid = '0'");
																								   $i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){
			echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[password]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[level]</td>
					<td>
						<a href='04_edit_user.php?username=$a[username]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='04_delete_user.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")'>
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
					$query=mysqli_query($kon,"select username, password, nama_lengkap, level from tb_user order by username asc LIMIT $posisi,$batas");
				
					$i = $posisi+1;		
				while($a=mysqli_fetch_array($query)){

				echo"
				<tr>
					<td>$i</td>
					<td>$a[username]</td>
					<td>$a[password]</td>
					<td>$a[nama_lengkap]</td>
					<td>$a[level]</td>
					<td>
						<a href='04_edit_user.php?username=$a[username]'>
							<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
						</a> 
						<a href='04_delete_user.php?username=$a[username]' onclick='return confirm(\"Anda yakin akan menghapus $a[nama_lengkap] ?\")'>
							<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>
						</a>
					</td>
				</tr>";
				$i++;
			}
			

    $jmldata = mysqli_num_rows(mysqli_query($kon,"SELECT * FROM user"));
      
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "</table><div class=\"paginationw\">$linkHalaman</div>";
}
			?>
		
	 
	</div>
</div>			
<?php
}




