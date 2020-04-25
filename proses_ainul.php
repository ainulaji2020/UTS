<?php if(!empty($_GET)){ ?>
	<center>
		<p>Data Pemantaun Covid19 wilayah <?php echo $_GET['nama_wilayah'];?></p>
		<p>Per <?php echo date("d F Y H:i:s");?> (Waktu dan Jam Sekarang)</p>
		<p><?php echo $_GET['nama_operator'];?>/<?php echo $_GET['nim_mahasiswa'];?></p>
		<table border="1" cellpadding="20">
			<tr>
				<td>Positif</td>
				<td>Dirawat</td>
				<td>Sembuh</td>
				<td>Meninggal</td>
			</tr>
			<tr>
				<td><?php echo $_GET['jumlah_positif'];?></td>
				<td><?php echo $_GET['jumlah_dirawat'];?></td>
				<td><?php echo $_GET['jumlah_sembuh'];?></td>
				<td><?php echo $_GET['jumlah_meninggal'];?></td>
			</tr>
		</table>
	</center>
<?php } else { ?>
	<p>Error Proses Input</p>
<?php } ?>