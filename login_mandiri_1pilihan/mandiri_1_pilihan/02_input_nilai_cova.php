<?php 	
	include"01_nav.php";
	include"../assets/js/date.php";
	error_reporting(0); 
?>

<div id="page-wrapper">
    <div class="container-fluid" style="margin:30px;">
		<form method="post" action="" enctype="multipart/form-data">	
			<table width="100%" class="table table-bordered">
				<tr>
					<td colspan="9" class="success"><b><h5>Tambah Data Nilai</b></h5></td>
				</tr>
				<tr>
					<th colspan="4">Matakuliah Perguruan Asal</th>
					<th colspan="5">Matakuliah Prodi Poltekkes</th>
				</tr>

				<tr>
					<th>Kode</th>	
					<th>Matakuliah</th>	
					<th>SKS</th>	
					<th>Nilai</th>	
					<th>Kode</th>	
					<th>Matakuliah</th>	
					<th>SKS</th>
					<th>Status</th>		
					<th>Nilai</th>

				</tr>

				<tr>
					<td><input type="text" name="kodematkul_1"  class="form-control"></td>
					<td><input type="text" name="namamatkul_1"  class="form-control"></td>
					<td><input type="text" name="sks_1"  class="form-control"></td>
					<td><select name="nilai_1" class="form-control" required>
							<option value="0"<?php if($a['nilai_1']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_1']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_1']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_1']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.101</td>
					<td>Pendidikan Agama</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_2"  class="form-control"></td>
					<td><input type="text" name="namamatkul_2"  class="form-control"></td>
					<td><input type="text" name="sks_2"  class="form-control"></td>
					<td><select name="nilai_2" class="form-control" required>
							<option value="0"<?php if($a['nilai_2']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_2']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_2']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_2']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.102</td>
					<td>Kewarganegaraan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_3"  class="form-control"></td>
					<td><input type="text" name="namamatkul_3"  class="form-control"></td>
					<td><input type="text" name="sks_3"  class="form-control"></td>
					<td><select name="nilai_3" class="form-control" required>
							<option value="0"<?php if($a['nilai_3']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_3']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_3']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_3']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.201</td>
					<td>Pengantar Pratik Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_4"  class="form-control"></td>
					<td><input type="text" name="namamatkul_4"  class="form-control"></td>
					<td><input type="text" name="sks_4"  class="form-control"></td>
					<td><select name="nilai_4" class="form-control" required>
							<option value="0"<?php if($a['nilai_4']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_4']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_4']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_4']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.202</td>
					<td>Asuhan Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_5"  class="form-control"></td>
					<td><input type="text" name="namamatkul_5"  class="form-control"></td>
					<td><input type="text" name="sks_5"  class="form-control"></td>
					<td><select name="nilai_5" class="form-control" required>
							<option value="0"<?php if($a['nilai_5']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_5']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_5']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_5']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.203</td>
					<td>Etika dan Hukum Kesehatan</td>			
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_6"  class="form-control"></td>
					<td><input type="text" name="namamatkul_6"  class="form-control"></td>
					<td><input type="text" name="sks_6"  class="form-control"></td>
					<td><select name="nilai_6" class="form-control" required>
							<option value="0"<?php if($a['nilai_6']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_6']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_6']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_6']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.204</td>
					<td>Anatomi dan Fisiologi Manusia</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_7"  class="form-control"></td>
					<td><input type="text" name="namamatkul_7"  class="form-control"></td>
					<td><input type="text" name="sks_7"  class="form-control"></td>
					<td><select name="nilai_7" class="form-control" required>
							<option value="0"<?php if($a['nilai_7']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_7']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_7']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_7']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.205</td>
					<td>Biologi Reproduksi</td>			
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_8"  class="form-control"></td>
					<td><input type="text" name="namamatkul_8"  class="form-control"></td>
					<td><input type="text" name="sks_8"  class="form-control"></td>
					<td><select name="nilai_8" class="form-control" required>
							<option value="0"<?php if($a['nilai_8']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_8']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_8']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_8']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.206</td>
					<td>Mikrobiologi dan Parasitologi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_9"  class="form-control"></td>
					<td><input type="text" name="namamatkul_9"  class="form-control"></td>
					<td><input type="text" name="sks_9"  class="form-control"></td>
					<td><select name="nilai_9" class="form-control" required>
							<option value="0"<?php if($a['nilai_9']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_9']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_9']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_9']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.103</td>
					<td>Pancasila</td>	
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_10"  class="form-control"></td>
					<td><input type="text" name="namamatkul_10"  class="form-control"></td>
					<td><input type="text" name="sks_10"  class="form-control"></td>
					<td><select name="nilai_10" class="form-control" required>
							<option value="0"<?php if($a['nilai_10']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_10']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_10']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_10']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.104</td>
					<td>Bahasa Indonesia</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_11"  class="form-control"></td>
					<td><input type="text" name="namamatkul_11"  class="form-control"></td>
					<td><input type="text" name="sks_11"  class="form-control"></td>
					<td><select name="nilai_11" class="form-control" required>
							<option value="0"<?php if($a['nilai_11']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_11']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_11']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_11']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.207</td>
					<td>Fisika  Kesehatan  dan  Biokimia  dalam Praktik Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_12"  class="form-control"></td>
					<td><input type="text" name="namamatkul_12"  class="form-control"></td>
					<td><input type="text" name="sks_12"  class="form-control"></td>
					<td><select name="nilai_12" class="form-control" required>
							<option value="0"<?php if($a['nilai_12']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_12']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_12']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_12']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.101</td>
					<td>Farmakologi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_13"  class="form-control"></td>
					<td><input type="text" name="namamatkul_13"  class="form-control"></td>
					<td><input type="text" name="sks_13"  class="form-control"></td>
					<td><select name="nilai_13" class="form-control" required>
							<option value="0"<?php if($a['nilai_13']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_13']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_13']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_13']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.101</td>
					<td>Fisiologi  Kehamilan,  Persalinan  Nifas dan BBL</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_14"  class="form-control"></td>
					<td><input type="text" name="namamatkul_14"  class="form-control"></td>
					<td><input type="text" name="sks_14"  class="form-control"></td>
					<td><select name="nilai_14" class="form-control" required>
							<option value="0"<?php if($a['nilai_14']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_14']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_14']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_14']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.210</td>
					<td>Psikologi Kehamilan, Persalinan, Nifas</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_15"  class="form-control"></td>
					<td><input type="text" name="namamatkul_15"  class="form-control"></td>
					<td><input type="text" name="sks_15"  class="form-control"></td>
					<td><select name="nilai_15" class="form-control" required>
							<option value="0"<?php if($a['nilai_15']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_15']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_15']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_15']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.401</td>
					<td>Gizi Reproduksi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_16"  class="form-control"></td>
					<td><input type="text" name="namamatkul_16"  class="form-control"></td>
					<td><input type="text" name="sks_16"  class="form-control"></td>
					<td><select name="nilai_16" class="form-control" required>
							<option value="0"<?php if($a['nilai_16']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_16']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_16']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_16']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.402</td>
					<td>Sosio Antropologi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_17"  class="form-control"></td>
					<td><input type="text" name="namamatkul_17"  class="form-control"></td>
					<td><input type="text" name="sks_17"  class="form-control"></td>
					<td><select name="nilai_17" class="form-control" required>
							<option value="0"<?php if($a['nilai_17']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_17']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_17']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_17']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.211</td>
					<td>Komunikasi Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_18"  class="form-control"></td>
					<td><input type="text" name="namamatkul_18"  class="form-control"></td>
					<td><input type="text" name="sks_18"  class="form-control"></td>
					<td><select name="nilai_18" class="form-control" required>
							<option value="0"<?php if($a['nilai_18']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_18']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_18']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_18']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.212</td>
					<td>Keterampilan Dasar Praktik Kebidanan I</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_19"  class="form-control"></td>
					<td><input type="text" name="namamatkul_19"  class="form-control"></td>
					<td><input type="text" name="sks_19"  class="form-control"></td>
					<td><select name="nilai_19" class="form-control" required>
							<option value="0"<?php if($a['nilai_19']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_19']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_19']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_19']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.216</td>
					<td>Psikologi dalam Pratik Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_20"  class="form-control"></td>
					<td><input type="text" name="namamatkul_20"  class="form-control"></td>
					<td><input type="text" name="sks_20"  class="form-control"></td>
					<td><select name="nilai_20" class="form-control" required>
							<option value="0"<?php if($a['nilai_20']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_20']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_20']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_20']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.214</td>
					<td>Profesionalisme Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_21"  class="form-control"></td>
					<td><input type="text" name="namamatkul_21"  class="form-control"></td>
					<td><input type="text" name="sks_21"  class="form-control"></td>
					<td><select name="nilai_21" class="form-control" required>
							<option value="0"<?php if($a['nilai_21']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_21']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_21']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_21']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.403</td>
					<td>Ilmu Kesehatan Masyarakat</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_22"  class="form-control"></td>
					<td><input type="text" name="namamatkul_22"  class="form-control"></td>
					<td><input type="text" name="sks_22"  class="form-control"></td>
					<td><select name="nilai_22" class="form-control" required>
							<option value="0"<?php if($a['nilai_22']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_22']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_22']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_22']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.405</td>
					<td>Dokumentasi Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_23"  class="form-control"></td>
					<td><input type="text" name="namamatkul_23"  class="form-control"></td>
					<td><input type="text" name="sks_23"  class="form-control"></td>
					<td><select name="nilai_23" class="form-control" required>
							<option value="0"<?php if($a['nilai_23']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_23']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_23']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_23']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.406</td>
					<td>Pendidikan Budaya Anti Korupsi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_24"  class="form-control"></td>
					<td><input type="text" name="namamatkul_24"  class="form-control"></td>
					<td><input type="text" name="sks_24"  class="form-control"></td>
					<td><select name="nilai_24" class="form-control" required>
							<option value="0"<?php if($a['nilai_24']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_24']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_24']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_24']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.215</td>
					<td>Evidence Based Dalam Praktik Kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_25"  class="form-control"></td>
					<td><input type="text" name="namamatkul_25"  class="form-control"></td>
					<td><input type="text" name="sks_25"  class="form-control"></td>
					<td><select name="nilai_25" class="form-control" required>
							<option value="0"<?php if($a['nilai_25']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_25']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_25']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_25']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.213</td>
					<td>Keterampilan Dasar Praktik Kebidanan II( Pemeriksaan Fisik Ibu dan Anak)</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_26"  class="form-control"></td>
					<td><input type="text" name="namamatkul_26"  class="form-control"></td>
					<td><input type="text" name="sks_26"  class="form-control"></td>
					<td><select name="nilai_26" class="form-control" required>
							<option value="0"<?php if($a['nilai_26']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_26']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_26']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_26']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.301</td>
					<td>Asuhan  Kebidanan  Pada  Remaja  dan Perimenopause</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_27"  class="form-control"></td>
					<td><input type="text" name="namamatkul_27"  class="form-control"></td>
					<td><input type="text" name="sks_27"  class="form-control"></td>
					<td><select name="nilai_27" class="form-control" required>
							<option value="0"<?php if($a['nilai_27']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_27']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_27']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_27']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.302</td>
					<td>Asuhan  Kebidanan  pada  Pranikah  dan Prakonsepsi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_28"  class="form-control"></td>
					<td><input type="text" name="namamatkul_28"  class="form-control"></td>
					<td><input type="text" name="sks_28"  class="form-control"></td>
					<td><select name="nilai_28" class="form-control" required>
							<option value="0"<?php if($a['nilai_28']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_28']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_28']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_28']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.303</td>
					<td>KB dan Pelayanan Kontrasepsi</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_29"  class="form-control"></td>
					<td><input type="text" name="namamatkul_29"  class="form-control"></td>
					<td><input type="text" name="sks_29"  class="form-control"></td>
					<td><select name="nilai_29" class="form-control" required>
							<option value="0"<?php if($a['nilai_29']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_29']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_29']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_29']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.604</td>
					<td>Ilmu Kesehatan Keluarga</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>

				<tr>
					<td><input type="text" name="kodematkul_30"  class="form-control"></td>
					<td><input type="text" name="namamatkul_30"  class="form-control"></td>
					<td><input type="text" name="sks_30"  class="form-control"></td>
					<td><select name="nilai_30" class="form-control" required>
							<option value="0"<?php if($a['nilai_30']=='0'){echo "selected";} ?>>Nilai</option>
							<option value="A"<?php if($a['nilai_30']=='A'){echo "selected";} ?>>A</option>
							<option value="B"<?php if($a['nilai_30']=='B'){echo "selected";} ?>>B</option>
							<option value="C"<?php if($a['nilai_30']=='C'){echo "selected";} ?>>C</option>
						</select></td>
					<td>Bd.6.221</td>
					<td>Critical Analysis dalam pratik kebidanan</td>		
					<td><input type="text" name="prak_agama"  value="2" class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
					<td><input type="text" name="prak_agama"  class="form-control" disabled></td>
				</tr>


				
				<tr>
					<td>&nbsp;</td>
					<td colspan="8"><input type="submit" name="submit" value="Simpan" class="btn btn-danger">
						<input type="reset" name="submit" value="Hapus" class="btn btn-success"></td>
				</tr>

		</table>      
	</form>

	</div>
</div>

		<?php
			include"../config/koneksi.php";
	
				if(isset($_POST['submit']))
				{
						$query=mysqli_query($kon,"insert into tb_konversi(
											kodematkul_1, namamatkul_1, sks_1, nilai_1,
											kodematkul_2, namamatkul_2, sks_2, nilai_2,
											kodematkul_3, namamatkul_3, sks_3, nilai_3,
											kodematkul_4, namamatkul_4, sks_4, nilai_4,
											kodematkul_5, namamatkul_5, sks_5, nilai_5,
											kodematkul_6, namamatkul_6, sks_6, nilai_6,
											kodematkul_7, namamatkul_7, sks_7, nilai_7,
											kodematkul_8, namamatkul_8, sks_8, nilai_8,
											kodematkul_9, namamatkul_9, sks_9, nilai_9,
											kodematkul_10, namamatkul_10, sks_10, nilai_10,
											kodematkul_11, namamatkul_11, sks_11, nilai_11,
											kodematkul_12, namamatkul_12, sks_12, nilai_12,
											kodematkul_13, namamatkul_13, sks_13, nilai_13,
											kodematkul_14, namamatkul_14, sks_14, nilai_14,
											kodematkul_15, namamatkul_15, sks_15, nilai_15,
											kodematkul_16, namamatkul_16, sks_16, nilai_16,
											kodematkul_17, namamatkul_17, sks_17, nilai_17,
											kodematkul_18, namamatkul_18, sks_18, nilai_18,
											kodematkul_19, namamatkul_19, sks_19, nilai_19,
											kodematkul_20, namamatkul_20, sks_20, nilai_20,
											kodematkul_21, namamatkul_21, sks_21, nilai_21,
											kodematkul_22, namamatkul_22, sks_22, nilai_22,
											kodematkul_23, namamatkul_23, sks_23, nilai_23,
											kodematkul_24, namamatkul_24, sks_24, nilai_24,
											kodematkul_25, namamatkul_25, sks_25, nilai_25,
											kodematkul_26, namamatkul_26, sks_26, nilai_26,
											kodematkul_27, namamatkul_27, sks_27, nilai_27,
											kodematkul_28, namamatkul_28, sks_28, nilai_28,
											kodematkul_29, namamatkul_29, sks_29, nilai_29,
											kodematkul_30, namamatkul_30, sks_30, nilai_30,

							
							username)
							values('$_POST[kodematkul_1]','$_POST[namamatkul_1]','$_POST[sks_1]','$_POST[nilai_1]',
									'$_POST[kodematkul_2]','$_POST[namamatkul_2]','$_POST[sks_2]','$_POST[nilai_2]',
									'$_POST[kodematkul_3]','$_POST[namamatkul_3]','$_POST[sks_3]','$_POST[nilai_3]',
									'$_POST[kodematkul_4]','$_POST[namamatkul_4]','$_POST[sks_4]','$_POST[nilai_4]',
									'$_POST[kodematkul_5]','$_POST[namamatkul_5]','$_POST[sks_5]','$_POST[nilai_5]',
									'$_POST[kodematkul_6]','$_POST[namamatkul_6]','$_POST[sks_6]','$_POST[nilai_6]',
									'$_POST[kodematkul_7]','$_POST[namamatkul_7]','$_POST[sks_7]','$_POST[nilai_7]',
									'$_POST[kodematkul_8]','$_POST[namamatkul_8]','$_POST[sks_8]','$_POST[nilai_8]',
									'$_POST[kodematkul_9]','$_POST[namamatkul_9]','$_POST[sks_9]','$_POST[nilai_9]',
									'$_POST[kodematkul_10]','$_POST[namamatkul_10]','$_POST[sks_10]','$_POST[nilai_10]',
									'$_POST[kodematkul_11]','$_POST[namamatkul_11]','$_POST[sks_11]','$_POST[nilai_11]',
									'$_POST[kodematkul_12]','$_POST[namamatkul_12]','$_POST[sks_12]','$_POST[nilai_12]',
									'$_POST[kodematkul_13]','$_POST[namamatkul_13]','$_POST[sks_13]','$_POST[nilai_13]',
									'$_POST[kodematkul_14]','$_POST[namamatkul_14]','$_POST[sks_14]','$_POST[nilai_14]',
									'$_POST[kodematkul_15]','$_POST[namamatkul_15]','$_POST[sks_15]','$_POST[nilai_15]',
									'$_POST[kodematkul_16]','$_POST[namamatkul_16]','$_POST[sks_16]','$_POST[nilai_16]',
									'$_POST[kodematkul_17]','$_POST[namamatkul_17]','$_POST[sks_17]','$_POST[nilai_17]',
									'$_POST[kodematkul_18]','$_POST[namamatkul_18]','$_POST[sks_18]','$_POST[nilai_18]',
									'$_POST[kodematkul_19]','$_POST[namamatkul_19]','$_POST[sks_19]','$_POST[nilai_19]',
									'$_POST[kodematkul_20]','$_POST[namamatkul_20]','$_POST[sks_20]','$_POST[nilai_20]',
									'$_POST[kodematkul_21]','$_POST[namamatkul_21]','$_POST[sks_21]','$_POST[nilai_21]',
									'$_POST[kodematkul_22]','$_POST[namamatkul_22]','$_POST[sks_22]','$_POST[nilai_22]',
									'$_POST[kodematkul_23]','$_POST[namamatkul_23]','$_POST[sks_23]','$_POST[nilai_23]',
									'$_POST[kodematkul_24]','$_POST[namamatkul_24]','$_POST[sks_24]','$_POST[nilai_24]',
									'$_POST[kodematkul_25]','$_POST[namamatkul_25]','$_POST[sks_25]','$_POST[nilai_25]',
									'$_POST[kodematkul_26]','$_POST[namamatkul_26]','$_POST[sks_26]','$_POST[nilai_26]',
									'$_POST[kodematkul_27]','$_POST[namamatkul_27]','$_POST[sks_27]','$_POST[nilai_27]',
									'$_POST[kodematkul_28]','$_POST[namamatkul_28]','$_POST[sks_28]','$_POST[nilai_28]',
									'$_POST[kodematkul_29]','$_POST[namamatkul_29]','$_POST[sks_29]','$_POST[nilai_29]',
									'$_POST[kodematkul_30]','$_POST[namamatkul_30]','$_POST[sks_30]','$_POST[nilai_30]',
									'$_SESSION[username]')");
						if($query)
							{
								echo"<script>alert('Data Berhasil di Simpan');window.location='02_lihat_nilai.php'</script>";
							}

						else
							{
								echo"<script>alert('Data Gagal di Simpan');window.location='02_lihat_nilai.php'</script>";
							}
				}				
		?> 	
	</body>
</html>
