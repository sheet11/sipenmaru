<?php 
	include"01_nav.php";
	error_reporting(0);
	include "../config/koneksi.php"; 
?>

<div id="page-wrapper">
	<div id="page-inner">
		<h2>Selamat Datang</h2>   
	    <h5>Di Halaman Sistem Informasi Pendaftaran Mahasiswa Baru Online</h5>
		<div>
			<hr>
			<div class="table-responsive">
				 <?php 
				// $jqt=mysqli_num_rows(mysqli_query($kon,"select * from tb_prestasi where username='$_SESSION[username]' order by tingkat asc"));
				// if($jqt==0)
				// {
				// 	?>
					<a class="btn btn-success btn-sm" href="04_input_prestasi.php"><i class="fa fa-plus"></i> Tambah Prestasi</a>
				 	<?php
				// }
				// ?>
				
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<th>No.</th>
						<th>Nama Prestasi</th>
						<th>Tingkat</th>
						<th>Bukti</th>
						<th>Tanggal Sertifikat</th>
						<th>Aksi</th>
					</thead>
					<?php 
					$no=1;
					$qt=mysqli_query($kon,"select * from tb_prestasi where juz is not null and username='$_SESSION[username]' order by tingkat asc");
					while($q=mysqli_fetch_array($qt))
					{
						?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $q['nama'];?></td>
							<td><?php 
							if($q['tingkat']==1)
                    {
                        $nprestasi='Internasional';
                    }
                    elseif($q['tingkat']==2)
                    {
                        $nprestasi='Nasional';
                    }
                    elseif($q['tingkat']==3)
                    {
                        $nprestasi='Regional';
                    }
                    elseif($q['tingkat']==4)
                    {
                        $nprestasi='Provinsi';
                    }
                    elseif($q['tingkat']==5)
                    {
                        $nprestasi='Kabupaten/Kota';
                    }
                    elseif($q['tingkat']==6)
                    {
                        $nprestasi='Sekolah';
                    }echo $nprestasi;?></td>
							<td><a href="prestasi/<?php echo $q['bukti_n'];?>" target="_blank">
								<img src="prestasi/<?php echo $q['bukti_n'];?>" width="200"></a></td>
							<td><?php echo $q['tgl'];?></td>
							<td><?php echo $q['ket'];?></td>
							<td><a href="04_delete_prestasi.php?id=<?php echo $q['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a></td>
						</tr>

						<?php
						$no++;
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>