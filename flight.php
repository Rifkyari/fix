<?php
	$connect = new mysqli("localhost","root","","db_wisata");
	
	$qflight   = "SELECT * FROM tb_flight ";
	$qflight  .= "WHERE ";
	$qflight  .= "flight_type LIKE  '".$_GET['flight_type']."' AND ";
	$qflight  .= "flight_tgl_pergi LIKE  '".$_GET['pergi']."'  ";
	
	$rstflight = $connect->query($qflight);
 ?>

<html>
	<head>
		<title>Dinas Pariwisata Yogyakarta</title>
		<link rel="stylesheet" href="css/grid.css"></link>
		<link rel="stylesheet" href="css/style.css"></link>
		<link rel="stylesheet" href="css/slide.css"></link>
		<link rel="stylesheet" href="css/modal.css"></link>
	</head>
	<body>
		<header class="solid">
			<div class="g1 col"></div>
			<div class="g10 col nomarg">
				<div class="g6 col">
					<div class="g2 col center">
						<img src="img/icon/logo.png" width="70%"/>
					</div>
					<div class="g10 col">
						<h2>Dinas Pariwisata</h2>
						<h1>Yogyakarta</h1>
					</div>
				</div>
				<div class="g6 col">
					<ul>
						<li><a>Agenda</a></li>
						<li><a>Destinasi</a></li>
						<li><a>Beranda</a></li>
					</ul>
				</div>
			</div>
			<div class="g1 col"></div>
		</header>
		<div class="g12plus nomarg ">
			<div class="content shadow">
				<div class="g1 col"></div>
				<div class="g10 col center">
					<h1 class="title">Jadwal Penerbangan</h1>
					<div class="g12plus">
						<table>
							<thead>
								<td>Maskapai</td>
								<td>Kode</td>
								<td>Tanggal Pergi</td>
								<td>Tanggal Pulang</td>
								<td>Pergi</td>
								<td>Tiba</td>
								<td>Harga</td>
								<td>Opsi</td>
							</thead>
							<tbody>
								<?php
									while ($row_f = $rstflight->fetch_assoc()) {
										echo"<tr>";
										echo"<td>".$row_f['flight_nama']."</td>";
										echo"<td>".$row_f['flight_kode']."</td>";
										echo"<td>".$row_f['flight_tgl_pergi']."</td>";
										echo"<td>".$row_f['flight_tgl_pulang']."</td>";
										echo"<td>".$row_f['flight_pergi']."</td>";
										echo"<td>".$row_f['flight_tiba']."</td>";
										echo"<td>IDR ".$row_f['flight_harga']."</td>";
										echo"<td><a href=''>Pesan</a></td>";
										echo"</tr>";
									} 
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="g1 col"></div>
			</div>
		</div>
		<div class="g12plus nomarg ">
			<div class="footer ">
				<div class="g3 col nomarg">
					<div class="icon center">
						<img src="img/icon/map.png" width="80%"/>
					</div>
					<div class="desc">
						<a>Jl. Malioboro No.56, Suryatmajan </a>
					</div>
				</div>
				<div class="g3 col nomarg">
					<div class="icon center">
						<img src="img/icon/email.png" width="80%"/>
					</div>
					<div class="desc">
						<a>Dinaspariwisata@yogyakarta.go.id </a>
					</div>
				</div>
				<div class="g3 col nomarg">
					<div class="icon center">
						<img src="img/icon/telp.png" width="80%"/>
					</div>
					<div class="desc">
						<a>+62 274 587486 </a>
					</div>
				</div>
				<div class="g3 col nomarg">
					<div class="desc">
						<a>Copyright &copy;2016 , WDS-Squad</a>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- modal -->
		<div id="modal" class="modal">
			<div class="modal-con">
				<div class="modal-top">
					<a onclick="closereverse()"  class="close">&times;</a>
				</div>
				<div class="modal-content">
					<h1 class="title">Reservasi Tiket Pesawat </h1>
					<p>Dengan penerbangan harian maskapai ternama dari berbagai kota di Indonesia, pergi ke Jogja kini menjadi lebih mudah dan lebih nyaman.</p>
					<div class="g12plus">
						<div class="g2 col"></div>
						<div class="g8 col">
								<form action="flight.php" method="GET">
									<input type="radio" name="flight" value="Sekali Jalan"/><span>Sekali jalan</span>
									<input type="radio" name="flight" value="Pulang Pergi"/><span>Pulang pergi</span><br />
									<div class="g12plus">
										<div class="g6 col">
											<span>Dari</span><br />
											<select name="asal">
												<option>Bandung (BDO)</option>
												<option>Batam (BTH)</option>
												<option>Jakarta (CGK)</option>
											</select>
										</div>
										<div class="g6 col">
											<span>Ke</span><br />
											<select name="tujuan">
												<option>Yogyakarta (JOG)</option>
											</select>
										</div>
									</div>
									<div class="g12plus">
										<div class="g6 col">
											<span>Pergi</span><br />
											<input name="pergi" type="date" placeholder="YYYY-MM-DD"/>
										</div>
										<div class="g6 col">
											<span>Pulang (Bila Pulang Pergi)</span><br />
											<input name="pulang" type="date" placeholder="YYYY-MM-DD"/>
										</div>
									</div>
									<div class="g12plus col center">
										<input class="green" type="submit" value="Cari"/>
									</div>
								</form>
							</div>
						<div class="g2 col"></div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		<script>
			function showreverse() {
				document.getElementById("modal").style.display ="block";
			}
			
			function closereverse() {
				document.getElementById("modal").style.display ="none";
			}
		</script>
	</body>
</html>