<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Cetak Kartu Pendaftaran</h2>   
	    
		<hr></hr>
		<div>
            <table class="table table-bordered table-striped">
                <thead>			
		  			<tr class="info">
						<th width="5%">No.</th>
                        <th>ID </th>
                        <th>Nama Lengkap </th>
                        <th>Prodi</th>
                        <th>formulir</th>
                        <th>Input Nilai/Raport</th>
                        <th>Upload Nilai/Raport</th>
						<th>Prestasi</th>
                        <th width="25%">Aksi</th>
					</tr>
				</thead>
			<?php 
					$query=mysqli_query($kon,"select * from tb_formulir3 where username='$_SESSION[username]' ");
				
					$i =  +1;		
				while($a=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?=$i?></td>
					<td><?=$a["username"]?></td>
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
                    $data = mysqli_query($kon,"SELECT COUNT(*) as jumlah_baris FROM tb_nilai WHERE username='$_SESSION[username]'");
                    $cek = mysqli_fetch_array($data);
                    if($cek['jumlah_baris'] != 5){ ?>
                        <a class='btn btn-sm btn-danger'><b>Belum Lengkap</b></a>
                        <?php }else{ ?>
                            <a alt='Image description' class='btn btn-sm btn-success'><b>Sudah Lengkap</b>
                            <?php } ?>
                        </td>
                        <td>
                        <?php if($a['photo1'] == null ||$a['photo2'] == null || $a['photo3'] == null || $a['photo4'] == null || $a['photo5'] == null){?>
                            <a class='btn btn-sm btn-danger'><b>Belum Lengkap</b></a>
                        <?php }else{ ?>                                
                            <a alt='Image description' class='btn btn-sm btn-success'><b>Sudah Lengkap</b>
                        <?php } ?>
                        </td>
						<td><?php 
                    $prestasi = mysqli_query($kon,"SELECT COUNT(*) as jumlah_prestasi FROM tb_prestasi WHERE username='$_SESSION[username]'");
                    $cek_prestasi = mysqli_fetch_array($prestasi);
                    if($cek_prestasi['jumlah_prestasi'] == 0){ ?>
                        <a class='btn btn-sm btn-danger'><b>Belum input Prestasi</b></a>
                        <?php }else{ ?>
                            <a class='btn btn-sm btn-success'><b>Sudah Lengkap</b></a>
                        <?php } ?>
                    </td>
					<td>

						<?php if($a['nama_foto'] == null || $cek['jumlah_baris'] != 5 || $a['photo1'] == null || $a['photo2'] == null || $a['photo3'] == null || $a['photo4'] == null || $a['photo5'] == null || $cek_prestasi['jumlah_prestasi'] == 0){?>
                            <a class='btn btn-sm btn-danger'><b>Belum Lengkap, Kartu Belum bisa di cetak</b></a>
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
				1. Lengkapi dahulu form-form untuk mencetak kartu pendaftaran</br>
				2. Input Nilai berisikan 5 Semester tidak boleh lebih atau kurang</br>
				3. Pastikan kembali Upload nilai sudah lengkap</br>
				</td>
			</tr>
			</table>
		
	 
	</div>
</div>




