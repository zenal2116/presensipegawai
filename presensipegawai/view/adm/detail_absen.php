<h3 class='page-header'>Detail Absensi Pegawai</h3>
	<div class='table-responsive'>
	<?php 
		if (isset($_GET['id_siswa'])) {
			if ($_GET['id_siswa']!=="") {
				$id_user=$_GET['id_siswa'];
				include './view/detail_absen.php';
			} else {
				header("location:absensi");
			}
		} else {
			$sql = "SELECT*FROM detail_user ORDER BY sklh_user ASC";
			$query = $conn->query($sql);
			if ($query->num_rows!==0) {
				echo "<table class='table table-striped' style='width:50%'>
					<thead>
						<tr>
							<th>No</th>
							<th>Nama LEngkap</th>
							<th>Jabatan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>";
				$no=0;
				while ($get_siswa = $query->fetch_assoc()) {
					$id_siswa = $get_siswa['id_user'];
					$name = $get_siswa['name_user'];
					$school = $get_siswa['sklh_user'];
					$no++;
					echo "<tr>
							<td>$no</td>
							<td>$name</td>
							<td>$school</td>
							<td><a href='absensi&id_siswa=$id_siswa' title='Absensi $name'>Lihat Absensi</a></td>
						</tr>";
				}
				echo "</tbody></table>";
				$conn->close();
			} else {
				echo "<div class='alert alert-danger'><strong>Tidak ada Siswa untuk ditampilkan</strong></div>";
			}
		}
	 ?>
</div><table>
	<tbody>
		<tr>
			<td id="right" width="5%"></td>
			<td id="left"><br>Mengetahui,<br>Atasan langsung<br><br><br><br><br><br>
				----------------------<br>NIP.</td>
			<td id="right" width="55%"></td>
			<td id="left">Karawang,_________2022<br>Kepala Madrasah<br><br><br><br><br><br>
				.......................<br>NIP.</td>
			
		</tr>

	</tbody>
	

	

</table>
<br><br><br>


<br>
<br>
<button id="noprint" class="button button2" onclick="window.print();">Cetak Pdf</button>
<!--<a href="./view/detail_absen_pdf.php">
			 <button id="noprint" class="button button2">Download</button></a>--></div>        </div>
      </div>
    </div>