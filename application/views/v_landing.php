<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- SEO Meta Tags -->
	<meta name="description"
		content="Sistem Pendukung Keputusan Penentuan Lokasi Embung dengan Menggunakan Metode Fuzzy Analytical Hierarchy Process (FAHP).">
	<meta name="author" content="Inovatik">

	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->


	<!-- Website Title -->
	<!-- <title>Evolo - StartUp HTML Landing Page Template</title> -->
	<title><?php echo SITE_NAME ." : Halaman Awal" ?></title>

	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
		rel="stylesheet">
	<link href="<?php echo base_url('assets_landing/css/bootstrap.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets_landing/css/fontawesome-all.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets_landing/css/swiper.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets_landing/css/magnific-popup.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets_landing/css/styles.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')?>"
		rel="stylesheet">


	<!-- Favicon  -->
	<link rel="icon" href="<?php echo base_url('assets/images/web-icon.png') ?>">
</head>

<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->


	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
		<!-- Text Logo - Use this if you don't have a graphic logo -->
		<!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

		<!-- Image Logo -->
		<a class="navbar-brand logo-image" href="<?php echo base_url(''); ?>">
      <img src="<?php echo base_url('assets/images/landing_logo.png') ?>" height="30" alt="wrapkit">
		</a>

		<!-- Mobile Menu Toggle Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
			aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-awesome fas fa-bars"></span>
			<span class="navbar-toggler-awesome fas fa-times"></span>
		</button>
		<!-- end of mobile menu toggle button -->

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#header">Beranda <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#metode">Metode</a>
				</li>
				<li class="nav-item">
					<a class="nav-link page-scroll" href="#fitur">Fitur</a>
				</li>

				<!-- Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Data
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item page-scroll" href="#lokasi">
							<span class="item-text">Peta Lokasi</span>
						</a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item page-scroll" href="#data">
							<span class="item-text">Data Kriteria</span>
						</a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item page-scroll" href="#data">
							<span class="item-text">Data Alternatif</span>
						</a>
						<div class="dropdown-items-divide-hr"></div>
						<a class="dropdown-item page-scroll" href="#ranking">
							<span class="item-text">Hasil Ranking </span>
						</a>
					</div>
				</li>
				<!-- end of dropdown menu -->

				<li class="nav-item">
					<a class="btn-custom-login" href="<?php echo base_url('login'); ?>">Login</a>
				</li>

				<!-- <span class="nav-item social-icons">
					<span class="fa-stack">
						<a href="<?php echo base_url('login'); ?>">
							<i class="fas fa-circle fa-stack-2x lock"></i>
							<i class="fas fa-lock fa-stack-1x"></i>
						</a>
					</span>
				</span> -->
			</ul>
		</div>
	</nav>
	<!-- end of navigation -->

	<!-- Header -->
	<header id="header" class="header">
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h1><span class="turquoise">Sistem Pendukung Keputusan</h1>
							<h5>Metode Fuzzy Analytic Hierarchy Process</h5>
							<h4 class="p-large">Dirancang untuk Menentukan Embung Terbaik di Kabupaten Semarang</h4>
							<a class="btn-solid-lg page-scroll" href="#metode">DISCOVER</a>
						</div> <!-- end of text-container -->
					</div> <!-- end of col -->
					<div class="col-lg-6">
						<div class="image-container">
							<img class="img-fluid" src="<?php echo base_url('assets_landing/images/header-teamwork.svg') ?>"
								alt="alternative">
						</div> <!-- end of image-container -->
					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of header-content -->
	</header>
	<!-- end of header -->

	<!-- Metode -->
	<div id="metode" class="basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="text-container">
						<h2>Fuzzy Analytic Hierarchy Process (FAHP)</h2>
						<p>Metode Fuzzy Analytic Hierarchy Process (FAHP) pertama kali diusulkan oleh seorang peneliti
							bernama Chang dan
							merupakan perpanjangan langsung dari metode Analytic Hierarchy Process (AHP) yang
							diciptakan
							oleh Saaty yang terdiri
							dari unsur-unsur matriks yang diwakili oleh bilangan fuzzy.
							<br><br>
							Metode FAHP menggunakan rasio fuzzy yang disebut Triangular Fuzzy Number (TFN) dan digunakan
							dalam proses fuzzifikasi.
							TFN terdiri dari tiga fungsi keanggotaan, yaitu nilai lower (l), nilai middle (m), dan
							nilai
							upper (u).
							<br><br>
							Referensi :
							<br>
							Faisol, Ahmad, M. Aziz Muslim & Hadi Suyono, 2014, "Komparasi Fuzzy AHP dengan AHP pada
							Sistem
							Pendukung Keputusan
							Investasi Properti", Jurnal EECCIS Vol. 8, No. 2.</p>
					</div> <!-- end of text-container -->
				</div> <!-- end of col -->
				<div class="col-lg-6" style="margin-top:100px">
					<div class="image-container">
						<img class="img-fluid" src="<?php echo base_url('assets_landing/images/details-1-office-worker.svg') ?>"
							alt="alternative">
					</div> <!-- end of image-container -->
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div>
	<!-- end of Metode 1 -->

	<!-- Metode 2 -->
	<div class="basic-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="image-container">
						<img class="img-fluid" src="<?php echo base_url('assets_landing/images/details-2-office-team-work.svg') ?>"
							alt="alternative">
					</div> <!-- end of image-container -->
				</div> <!-- end of col -->
				<div class="col-lg-6">
					<div class="text-container">
						<h2>Langkah - Langkah dalam Penentuan Bobot</h2>
						<ul class="list-unstyled li-space-lg">
							<li class="media">
								<i class="fas fa-check"></i>
								<div class="media-body">Menentukan Nilai Fuzzy Synthetic Extent (Si)</div>
							</li>
							<li class="media">
								<i class="fas fa-check"></i>
								<div class="media-body">Menghitung Nilai Vektor Derajat Kemungkinan (V)</div>
							</li>
							<li class="media">
								<i class="fas fa-check"></i>
								<div class="media-body">Identifikasi Nilai Ordinat (d')</div>
							</li>
							<li class="media">
								<i class="fas fa-check"></i>
								<div class="media-body">Transformasi Nilai Ordinat menjadi Vektor Bobot (W’)</div>
							</li>
							<li class="media">
								<i class="fas fa-check"></i>
								<div class="media-body">Menormalisasi Nilai Vektor Bobot (W’) menjadi Vektor Bobot Ternormalisasi (W)</div>
							</li>
						</ul>
					</div> <!-- end of text-container -->
				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div>
	<!-- end of Metode 2 -->

	<!-- Fitur -->
	<div id="fitur" class="cards-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Fitur Aplikasi</h2>
					<p class="p-heading p-large">Dalam membantu seorang operator untuk mencari alternatif terbaik, maka
						aplikasi ini dilengkapi dengan beberapa fitur berikut ini.</p>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
			<div class="row">
				<div class="col-lg-12">

					<!-- Card -->
					<div class="card">
						<img class="card-image" src="<?php echo base_url('assets_landing/images/services-icon-1.svg') ?>"
							alt="alternative">
						<div class="card-body">
							<h4 class="card-title">CRUD Data</h4>
							<p>Membantu operator dalam mengolah data sehingga lebih mudah dalam menentukan alternatif
								terbaik.</p>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<img class="card-image" src="<?php echo base_url('assets_landing/images/services-icon-2.svg') ?>"
							alt="alternative">
						<div class="card-body">
							<h4 class="card-title">Data Dinamis</h4>
							<p>Aplikasi mampu menampung jumlah data kriteria maupun
								alternatif secara dinamis tidak terikat pada suatu jumlah yang statis, selama alur pengisian
								data
								dilakukan dengan benar.</p>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<img class="card-image" src="<?php echo base_url('assets_landing/images/services-icon-3.svg') ?>"
							alt="alternative">
						<div class="card-body">
							<h4 class="card-title">Carto Map</h4>
							<p>Dalam menampilkan lokasi dari setiap alternatif yang terdaftar, digunakanlah Carto untuk
								menampilkan visualisasinya.</p>
						</div>
					</div>
					<!-- end of card -->

				</div> <!-- end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div>
	<!-- end of Fitur -->

	<!-- Lokasi -->
	<div id="lokasi" class="cards-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Lokasi Alternatif</h2>
					<p class="p-heading p-large">Berikut lokasi dari alternatif yang digunakan ditampilkan menggunakan
						Carto.</p>
				</div> <!-- end of col -->
			</div> <!-- end of row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-12 align-content-center">
						<div class="box">
							<iframe src="https://arindhoni.carto.com/builder/50e20ff7-1903-4ab4-904b-714d60984acd/embed"
								allowfullscreen="" width="100%" height="600" frameborder="0">
							</iframe>
						</div>
					</div>
				</div>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div>
	<!-- endof Lokasi -->

	<!-- Data -->
	<div id="data" class="cards-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Data yang Digunakan</h2>
					<p class="p-heading p-large">Berikut ditampilkan Data Kriteria, Data Alternatif, dan Hasil Akhir Perankingan
					</p>
				</div> <!-- end of col -->
			</div>
			<div class="row">
				<div id="alternatif" class="col-lg-4">
					<h4 class="card-title">Daftar Data Alternatif</h4>
					<div class="table-responsive">
						<table id="example" class="table table-striped">
							<thead class="bg-info text-white text-center">
								<tr>
									<th>Kode</th>
									<th>Lokasi</th>
									<th>Kecamatan</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php foreach ($tbl_alternatif as $alternatif): ?>
								<tr>
									<td><?php echo $alternatif->kode_alternatif ?></td>
									<td><?php echo $alternatif->nama_alternatif ?></td>
									<td><?php echo $alternatif->kec_alternatif ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div id="kriteria" class="col-lg-8">
					<h4 class="card-title">Daftar Data Kriteria</h4>
					<div class="table-responsive">
						<table id="example2" class="table table-striped">
							<thead class="bg-info text-white text-center">
								<tr>
									<th>Kode</th>
									<th>Nama Kriteria</th>
									<th>Lower (l)</th>
									<th>Middle (m)</th>
									<th>Upper (u)</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php foreach ($tbl_kriteria as $kriteria): ?>
								<tr>
									<td><?php echo $kriteria->kode_kriteria ?></td>
									<td><?php echo $kriteria->nama_kriteria ?></td>
									<td><?php echo $kriteria->nilai_l ?></td>
									<td><?php echo $kriteria->nilai_m ?></td>
									<td><?php echo $kriteria->nilai_u ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div id="ranking" class="row">
				<div class="col-lg-12">
					<h4 class="card-title">Daftar Data Hasil Ranking</h4>
					<div class="table-responsive">
						<table id="example3" class="table table-striped">
							<thead class="bg-info text-white text-center">
								<?php
									$i=0;
									foreach($tbl_nilaiakhir as $row)
									{ 
										$kode[$i] = $row->kode_alternatif;    
										$arr_nilai[$i] = (explode (',', $row->nilai));
										$i++;
									}
								?>
								<?php
									$j=0;
									foreach($tbl_bobot as $row)
									{ 
										$kode_w[$j] = $row->id_w; 
										$nil_w[$j] = $row->nilai_w;
										$j++;
									}
								?>
								<?php
									$k=0;
									foreach($tbl_alternatif as $row)
									{ 
										$nama_alt[$k] = $row->nama_alternatif;
										$k++;
									}
								?>
								<tr>
									<th>Kode Alternatif</th>
									<th>Nama Alternatif</th>
									<th>Bobot Akhir</th>
								</tr>
							</thead>
							<tbody class="text-center">
								<?php
								$x=0;
								// $nb = array(); diperlukan jika dilakukan return
								while($x<COUNT($arr_nilai))
								{
									// $kod_alt[$x] = 'A'.($x+1).'';
									$kode[$x];
										$y=0;
										$nb[$x] = 0;
										while($y<COUNT($arr_nilai[0]))
										{
											$nb[$x] += $arr_nilai[$x][$y]*$nil_w[$y];
											$y++;
										}
									echo '<tr>';
									// echo '<td>'.$kod_alt[$x].'</td>';
									echo '<td>'.$kode[$x].'</td>';
									echo '<td>'.$nama_alt[$x].'</td>';
									echo '<td>'.$nb[$x].'</td>';
									echo '</tr>';
									$x++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of Data -->

	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-col">
						<h4>Tentang SPK FAHP</h4>
						<p>Sistem Pendukung Keputusan (SPK) berikut dirancang untuk menentukan embung terbaik di
							Kabupaten
							Semarang.</p>
						<p>SPK berikut memiliki fitur CRUD (Create, Read, Update, & Delete) dan pengolahan data
							yang menggunakan metode Fuzzy Analytic Hierarchy Process (FAHP).</p>
					</div>
				</div> <!-- end of col -->
				<div class="col-md-4">
					<div class="footer-col middle">
						<h4>Kontak Author</h4>
						<ul class="list-unstyled li-space-lg">
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Email : <a class="turquoise" href="#">rindhoni12@gmail.com</a></div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Whatsapp : <a class="turquoise" href="#">+62 895415067674</a></div>
							</li>
							<li class="media">
								<i class="fas fa-square"></i>
								<div class="media-body">Line id : <a class="turquoise" href="#">rindhoniahmad</a></div>
							</li>
						</ul>
					</div>
				</div> <!-- end of col -->
				<div class="col-md-4">
					<div class="footer-col">
						<h4>Tentang Author</h4>
						<p>Perkenalkan nama saya Ahmad Rindhoni. Lahir di Pati pada tanggal 31 Mei 1998. Saat ini sedang menempuh
							pendidikan di Universitas Diponegoro Jurusan Teknik Komputer.s</p>
							
						<p>Author membuat aplikasi ini sebagai Tugas Akhir guna menyelesaikan masa studi sebagai mahasiswa dan mendapat gelar sarjana.</p>
						<!-- <p>dibuat untuk memudahkan instansi dalam mengambil keputusan untuk menentukan Alternatif Embung
							terbaik dari beberapa Alternatif Embung yang ada di Kabupaten Semarang. Metode yang digunakan dalam adalah metode Fuzzy Analitycal Hierarchial Process.</p> -->
					</div>
				</div> <!-- end of col -->
				<!-- <div class="col-md-4">
					<div class="footer-col last">
						<h4>Social Media</h4>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-facebook-f fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-twitter fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-google-plus-g fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-instagram fa-stack-1x"></i>
							</a>
						</span>
						<span class="fa-stack">
							<a href="#your-link">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-linkedin-in fa-stack-1x"></i>
							</a>
						</span>
					</div>
				</div> end of col -->
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div>
	<!-- end of footer -->

	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="p-small">Copyright © <?php echo SITE_NAME ." ". Date('Y') ?>. All Rights Reserved by <a
							href="https://inovatik.com">Inovatik</a>.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end of copyright -->

	<!-- Scripts -->
	<script src="<?php echo base_url('assets_landing/js/jquery.min.js') ?>"></script>
	<!-- jQuery for Bootstrap's JavaScript plugins -->
	<script src="<?php echo base_url('assets_landing/js/popper.min.js') ?>"></script>
	<!-- Popper tooltip library for Bootstrap -->
	<script src="<?php echo base_url('assets_landing/js/bootstrap.min.js') ?>"></script> <!-- Bootstrap framework -->
	<script src="<?php echo base_url('assets_landing/js/jquery.easing.min.js') ?>"></script>
	<!-- jQuery Easing for smooth scrolling between anchors -->
	<script src="<?php echo base_url('assets_landing/js/swiper.min.js') ?>"></script>
	<!-- Swiper for image and text sliders -->
	<script src="<?php echo base_url('assets_landing/js/validator.min.js') ?>"></script>
	<!-- Validator.js - Bootstrap plugin that validates forms -->
	<script src="<?php echo base_url('assets_landing/js/scripts.js') ?>"></script> <!-- Custom scripts -->
	<script src="<?php echo base_url('assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('dist/js/pages/datatable/datatable-basic.init.js') ?>"></script>
	<script>
		$(document).ready(function () {
			$('#example').DataTable({
				"ordering": false,
				"paging": false,
				"searching": false,
				"info": false
			});
		});

	</script>
	<script>
		$(document).ready(function () {
			$('#example2').DataTable({
				"ordering": false,
				"paging": false,
				"searching": false,
				"info": false
			});
		});

	</script>
	<script>
		$(document).ready(function () {
			$('#example3').DataTable({
				"order": [
					[2, "desc"]
				],
				"columnDefs": [{
					"orderable": false,
					"targets": [0, 1, 2]
				}],
				"paging": false,
				"searching": false,
				"info": false
			});
		});

	</script>
</body>

</html>
