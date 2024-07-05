<?php 
include"../config/koneksi.php";
?>

<form method="post">
		<input type="number" name="mandiri" placeholder="mandiri">
		<input type="number" name="hari" placeholder="hari">
		<input type="number" name="sesi" placeholder="sesi">
		<button name="cari">Cari</button>
</form>
<table border="1">
	<th>username</th>
	<th>firstname</th>
	<th>lastname</th>
	<th>email</th>
	<th>password</th>
	<th>cohort1</th>

<?php 
if(isset($_POST['cari']))
{
	$mandiri=$_POST['mandiri'];
	$hari=$_POST['hari'];
	$sesi=$_POST['sesi'];

	if($mandiri==1)
	{
		$pq=mysqli_query($kon,"select * from tb_formulir5 where hari='$hari' and sesi='$sesi' order by pc asc") or die(mysqli_error($kon));
	}
	elseif($mandiri==2)
	{
		$pq=mysqli_query($kon,"select * from tb_formulir4 where hari='$hari' and sesi='$sesi' order by pc asc") or die(mysqli_error($kon));
	}

	echo "Jumlah Peserta : ".mysqli_num_rows($pq);
	
	while($p=mysqli_fetch_array($pq))
	{
		?>
		<tr>
		<td><?=$p['username'];?></td>
		<td><?=$p['nama_lengkap'];?></td>
		<td><?=$p['pilihan_prodi'];?></td>
		<td><?=$p['username'];?>@simami.poltekkesbengkulu.ac.id</td>
		<td><?=$p['password'];?></td>
		<?php 
		$cohort='M'.$mandiri.'H'.$hari.'S'.$sesi;
		?>
		<td><?=$cohort;?></td>
	</tr>
		<?php
	}

}
?>
</table>