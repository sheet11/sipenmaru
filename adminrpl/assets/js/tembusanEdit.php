	<?php 
				$query2=mysqli_query($kon,"select * from form_izin_iujp where id_pemohon='$_GET[id_pemohon]'");
				while($vT=mysqli_fetch_array($query2)){		
				
						$buah[] = "$vT[t1]"; 
						$buah[] = "$vT[t2]"; 
						$buah[] = "$vT[t3]"; 
						$buah[] = "$vT[t4]"; 
						$buah[] = "$vT[t5]"; 
						$buah[] = "$vT[t6]"; 
						$buah[] = "$vT[t7]"; 
						$buah[] = "$vT[t8]"; 
						
						//echo $buah[1]; 
						//Hasilnya Rambutan 
						echo "<p>"; 
						for($i=0;$i<count($buah);$i++)
						{ 
								$connection = mysqli_connect("localhost","root","") or die(mysqli_error());
								mysqli_select_db("perizinan") or die(mysqli_error());
								$query=mysqli_query($kon,"select * from tembusan");							
							echo"
							<select name=t1 class=form-control >
							<option value=$buah[$i]>$buah[$i]</option>";
								while($a=mysqli_fetch_array($query)){
								$id = $a['id_tembusan'];
								$nama = $a['nama_tembusan'];
								echo"
								<option value=$id>$nama</option>";
								}
							echo"</select>";
							
						//echo "buah #$i: ".$buah[$i]."<br>";
						} 
				}
			
			?>