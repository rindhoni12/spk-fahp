<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<?php $this->load->view("admin/_partials/v_navbar.php") ?>
		<?php $this->load->view("admin/_partials/v_sidebar.php") ?>

		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
							Peta Lokasi Alternatif
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
          </div>
          <div class="col-5 align-self-center">
						<div class="customize-input float-right">
              
              <!-- <button class="btn btn-info" type="button" style="margin-right: 2px">
                <i data-feather="map" class="feather-icon" style="margin-bottom: 2px"></i> Ubah Peta
              </button> -->

							<!-- <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#ubahPeta" aria-expanded="false" aria-controls="ubahPeta" 
							onclick="myVar = setInterval(myFunction, 1000)">
								<i data-feather="map" class="feather-icon" style="margin-bottom: 2px"></i>	Ubah Peta
							</button> -->

							<a class="btn btn-info" href="" data-toggle="modal" data-target="#redirectmodal" onclick="myVar = setInterval(myFunction, 1000)">
								<i data-feather="map" class="feather-icon" style="margin-bottom: 2px"></i> Ubah Peta
							</a>
							
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								<i data-feather="info" class="feather-icon" style="margin-bottom: 2px"></i>	Informasi
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-12">

            <!-- <div class="collapse" id="ubahPeta">
							<div class="card-header text-white bg-light">
								<a href="#"><i class="fas fa-map"></i>&nbsp Pengalihan</a>
							</div>
							<div class="card card-body">
								Untuk mengubah Peta Lokasi Alternatif yang digunakan, Anda akan diarahkan ke Carto.com dan mengubah Peta Lokasi Alternatif disana. -->
								<!-- <h1>Akan diarahkan ke Carto dalam waktu <span id="waktu">5</span> detik</h1> -->
								
								<!-- <button onclick="clearInterval(myVar)">Gak Jadi</button> -->

							<!-- <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#ubahPeta" aria-expanded="false" aria-controls="ubahPeta" 
							onclick="myStopFunction(myVar)">	Gak Jadi
							</button>
							</div>
						</div> -->

						<div class="collapse" id="collapseExample">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Informasi</a>
							</div>
							<div class="card card-body">
								Lokasi Alternatif yang digunakan ditampilkan pada peta berikut menggunakan Carto.
							</div>
						</div>

						<div class="card">
              <div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-map"></i>&nbsp Lokasi Alternatif</a>
							</div>
							<div class="card-body">
                <iframe
                  src="https://muhammadrefi11.carto.com/builder/34d16669-7763-4a4d-b67d-fffa07af4ac7/embed" allowfullscreen="" width="100%" height="600" frameborder="0">
                </iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_modal.php") ?>

<div class="modal fade" id="redirectmodal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" id="myCenterModalLabel">Akan Dialihkan...</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body text-center">
				<h3>Mengubah Peta yang digunakan, dapat dilakukan langsung dari Carto</h3>
				<h4>Untuk itu, dalam</h4>
				<br>
				<h1><span id="waktu">5</span></h1>
				<h1>Detik</h1>
				<br>
				<h3>Anda akan dialihkan menuju website Carto.com</h3>
				<br>
				<button class="btn btn-danger" type="button" data-dismiss="modal" onclick="myStopFunction(myVar)">	Batalkan</button>
			</div>
		</div>
	</div>
</div>


	<?php $this->load->view("admin/_partials/v_js.php") ?>

<!-- 
<script>
		setTimeout(function(){
			window.location.href = 'https://www.tutorialspoint.com/javascript/';
		}, 5000);
</script>
<p>Web page redirects after 5 seconds.</p> -->


<!-- <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> -->
<script>
	function myFunction() 
	{
		var sisawaktu = $("#waktu").html();
		sisawaktu = eval(sisawaktu);
		if (sisawaktu == 0) {
			location.href = "https://carto.com/login"; //di tab yg sama
			// window.open("https://carto.com/login", "_blank"); //di tab baru
		} else {
			$("#waktu").html(sisawaktu - 1);
		}
	};
</script>

<script>
	function myStopFunction() 
	{
		clearInterval(myVar);
		document.getElementById("waktu").innerHTML = "5";
	};
</script>
<!-- 
<h1>Anda akan diarahkan ke halaman sebenarnya dalam waktu <span id="waktu">10</span> detik</h1> -->




<!-- <button onclick="clearInterval(myVar)">Stop time</button>

<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
  var d = new Date();
  document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script> -->






</body>

</html>
