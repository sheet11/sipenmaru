<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Cetak Kartu Pendaftaran</h2>   
	    
		<hr></hr>
		<div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th>
                        <th>Nama Lengkap </th>
                        <th>Prodi</th>
                        <th>formulir</th>
                        <th>Pernyataan</th>
                        <th width="25%">Aksi</th>
					</tr>
				</thead>
			<?php 
					$query=mysqli_query($kon,"select * from tb_formulir5 where username='$_SESSION[username]' ");
				
					$i =  +1;		
				while($a=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?=$i?></td>
					<td><?=$a["nama_lengkap"]?></td>
					<td><?=$a["pilihan_prodi"]?></td>
					<td><?php 
                    if($a['nama_foto'] == null){ ?>
                        <a class='btn btn-sm btn-danger'><b>Belum Lengkap</b></a>
                    <?php }else{ ?>
                        <a alt='Image description' class='btn btn-sm btn-success'><b>Sudah Lengkap</b>
                    <?php } ?>
                    </td>
                    <td><?php 
                    if($a['photo5'] == null || $a['photo4'] == null){ ?>
                        <a class='btn btn-sm btn-danger'><b>Belum Lengkap</b></a>
                    <?php }else{ ?>
                        <a alt='Image description' class='btn btn-sm btn-success'><b>Sudah Lengkap</b>
                    <?php } ?>
                    </td>
					<td>
						<?php if($a['nama_foto'] == null || $a['photo5'] == null || $a['photo4'] == null){?>
                            <a class='btn btn-sm btn-danger'><b>Lengkapi Berkas untuk mencetak Kartu</b></a>
                        <?php }else{ ?>                                
                            <a href='01_cetak_formulir.php?id_formulir=<?=$a["id_formulir"]?>' class='btn btn-info'><b>Cetak</b></a> 
                        <?php } ?>
				    </td>
					</tr>
					</table>

			<?php }
			?>
			<tr>
				<td><b>Catatan</b><br>
				1. Lengkapi dahulu form-form yang tertera untuk mencetak kartu pendaftaran</br>
				2. Pastikan kembali berkas-berkas yang sudah d upload</br>
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>




