<?php include"01_nav.php";?>
<?php error_reporting(0); ?>

<?php
	require_once("../config/koneksi.php");
	include "../assets/js/date.php";
	$query=mysqli_query($kon,"select * from tb_pendaftaran_2 where user_id='$_GET[user_id]'");
	$a=mysqli_fetch_array($query);
	
?>
	
<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="08_proseslogin_calon_mahasiswa.php" enctype="multipart/form-data">	
		<table width="100%" border="0" class="table table-hover">
			<input type="hidden" name="user_id" value="<?php echo "$a[user_id]"; ?>">
		<tr>
			<td align="left" colspan="3"><b><h4>Aktivasi Data Calon Mahasiswa</b></h4></td> 
		</tr>

		<tr>
			<td colspan="3">No Pendaftaran</td> 
		</tr>
		<tr>
			<td colspan="3"><input type="text" placeholder="No Pendaftaran" name="user_id" required="yes" class="form-control" value="<?php echo "$a[user_id]"; ?>"></td> 
		</tr>

        <tr>
            <td colspan="3">Password</td> 
        </tr>
        <tr>
            <td colspan="3"><input type="text" placeholder="Password" name="username" required="yes" class="form-control" value="<?php echo "$a[username]"; ?>"></td> 
        </tr>

        <tr>
            <td colspan="3">ID Aktivasi </td> 
        </tr>
        <tr>
            <td colspan="3"><input type="text" placeholder="ID Aktivasi" name="password" required="yes" class="form-control" value="<?php echo "$a[password]"; ?>"></td> 
        </tr>

		<tr>
			<td colspan="3">Nama Lengkap</td>
		</tr>
		<tr>
			<td colspan="3"><input type="text" placeholder="Nama Lengkap "  name="namalengkap" class="form-control" value="<?php echo "$a[namalengkap]"; ?>"></td> 
		</tr>
		<tr>
			<td colspan="3">Ruang Ujian</td>
		</tr>
		<tr>
        	<td colspan="3">
        	<select name='ruang_ujian' class='form-control' >";
        	<option value="<?php echo $a['ruang_ujian']; ?>"><?php echo $a['ruang_ujian']; ?></option>
            <?php include "../config/koneksi.php";
        	$query = mysqli_query($kon,"SELECT * FROM tb_ruang_ujian");
        	while ($row = mysqli_fetch_array($query)) {
       		 echo"
        	<option value='$row[nama_ruang_ujian]'>$row[nama_ruang_ujian]</option>
        	";
       		 }
        	?>
        	echo"</select>
       		 </td>
 	 	</tr>

		<tr>	
			<td>
				<input type="submit" name="submit" value="Simpan" class="btn btn-danger">
				<input type="reset" name="submit" value="Hapus" class="btn btn-success"></td>
		</tr>
		</table>
	</form>
	</div>
</div>
