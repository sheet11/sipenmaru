<?php 
	include "01_nav.php";
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
				<?php
                include "../config/koneksi.php";
                $query = mysqli_query($kon,"Select 'username' from tb_rpl where username='$_SESSION[username]'");
                $cek= mysqli_fetch_array($query);
                if($cek){ ?>
				<td>&nbsp;</td>
				<?php }else{ ?>
				<td><a href='02_input_nilai2.php' class='btn btn-lg btn-success'>Isi Form Asesmen</a></td>
				<?php } ?>
			</tr>
		</table> 
		<br>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th><th>username</th><th>Nama Lengkap</th><th>Pilihan Prodi</th><th width="25%">Aksi</th>
					</tr>
				</thead>
				<?php 
				$i=1;
						$query=mysqli_query($kon,"SELECT username,nama_lengkap,pilihan_prodi FROM `tb_formulir5` WHERE username=$_SESSION[username]");
					while($a=mysqli_fetch_array($query))
					{
						echo"
						<tr>
							<td>$i</td>
							<td>$a[username]</td>
							<td>$a[nama_lengkap]</td>
							<td>$a[pilihan_prodi]</td>
							<td>";
									if($cek){
									echo "
											<a href='02_edit_nilai2.php?username=$a[username]' class='btn btn-danger'><b>Edit</b></a>";
										}else{
											echo "Silahkan Isi Form Terlebihdahulu";
										}
						echo"	</td>
							</tr>";


						$i++;
					}
				?>

			</table>

				<b>Catatan</b><br>
				 
	</div>
</div>




