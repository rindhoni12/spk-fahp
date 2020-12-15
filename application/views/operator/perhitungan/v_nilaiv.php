<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<!-- ini preloader -->
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<?php $this->load->view("admin/_partials/v_navbar.php") ?>
		<?php $this->load->view("admin/_partials/v_sidebaroperator.php") ?>

		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Nilai Vektor Derajat Kemungkinan (V)
						</h4>
						<!-- ini v_breadcrumb -->
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
					<div class="col-5 align-self-center">
						<div class="customize-input float-right">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								<i data-feather="info" class="feather-icon" style="margin-bottom: 2px"></i>	Informasi
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="card">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-database"></i>&nbsp Tahap Kedua </a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered">
										<thead class="bg-info text-white text-center">
											<tr>
												<th>Kode V</th>
												<th>Nilai V</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<?php
											$v="V";
											$si = "M";
											foreach ($hasil_v as $data_v): ?>
											<tr>
												<td>
													<?php
														echo $v;
														echo '(';
														echo $si.substr($data_v->kode_a, 1, 3);
														echo ' ≥ ';
														echo $si.substr($data_v->kode_b, 1, 3); 
														echo ')';
													?>											
												</td>
												<td>
													<?php echo $data_v->nilai_v ?>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- start of accordions -->
					<div class="col-lg-6 collapse" id="collapseExample">
						<div class="card-header text-white bg-light">
							<a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Informasi</a>
						</div>
						<div id="accordion" class="custom-accordion mb-4">
							<div class="card mb-0">
								<div class="card-header" id="headingOne">
										<h5 class="m-0">
											<a class="custom-accordion-title d-block pt-2 pb-2" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												Tahap Pertama 
												<span class="float-right"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
											</a>
										</h5>
								</div>
								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										1. Tahap Pertama adalah menentukan nilai Fuzzy Syntethic Extent (Si).
										<br> Nilai Fuzzy Syntethic Extent yang disimbolkan Si berupa nilai lower(l), middle(m), dan upper(u) dari setiap Kriteria yang ada. Data pada tabel berikut didapatkan dari Data Kriteria yang sudah dimasukkan sebelumnya.
									</div>
								</div>
							</div> <!-- batas tahap 1 -->
							<div class="card mb-0">
								<div class="card-header" id="headingTwo">
									<h5 class="m-0">
										<a class="custom-accordion-title collapsed d-block pt-2 pb-2" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
											Tahap Kedua
											<span class="float-right"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
										</a>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										2. Tahap Kedua adalah menghitung perbandingan tingkat kemungkinan antar Fuzzy Syntethic Extent (Si).
										<br> Langkahnya adalah memperbandingkan nilai setiap Fuzzy Syntethic Extent V(𝑆2 ≥ 𝑆1), menggunakan rumus berikut :
										<br>
										<img src="<?php echo base_url('assets/images/perhitungan/rumus_v.jpg'); ?>" alt="rumus_v" style="object-fit: cover; max-width: 360px;"/>
									</div>
								</div>
							</div> <!-- batas tahap 2 -->
							<div class="card mb-0">
								<div class="card-header" id="headingThree">
									<h5 class="m-0">
										<a class="custom-accordion-title collapsed d-block pt-2 pb-2" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Tahap Ketiga
											<span class="float-right"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
										</a>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="card-body">
										3. Tahap Ketiga adalah setelah didapat nilai perbandingan dari setiap Fuzzy Syntethic Extent V(𝑆2 ≥ 𝑆1), lalu diambil nilai minimumnya, menggunakan rumus berikut :
										<br><br>
										<img src="<?php echo base_url('assets/images/perhitungan/rumus_d.jpg'); ?>" alt="rumus_d" style="object-fit: cover; max-width: 270px;"/>
									</div>
								</div>
							</div> <!-- batas tahap 3 -->
							<div class="card mb-0">
								<div class="card-header" id="headingFour">
									<h5 class="m-0">
										<a class="custom-accordion-title collapsed d-block pt-2 pb-2" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											Tahap Keempat
											<span class="float-right"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
										</a>
									</h5>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
									<div class="card-body">
										4. Tahap Keempat adalah setelah didapat nilai minimum dari perbandingan setiap Fuzzy Syntethic Extent (d'), nilai tersebut diurutkan dan menjadi nilai bobot (W'). Pengurutan nilainya seperti pada rumus berikut ini :
										<br><br>
										<img src="<?php echo base_url('assets/images/perhitungan/rumus_w_aksen.jpg'); ?>" alt="rumus_w_aksen" style="object-fit: cover; max-width: 270px;"/>
									</div>
								</div>
							</div> <!-- batas tahap 4 -->
							<div class="card mb-0">
								<div class="card-header" id="headingFive">
									<h5 class="m-0">
										<a class="custom-accordion-title collapsed d-block pt-2 pb-2" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											Tahap Kelima
											<span class="float-right"><i class="mdi mdi-chevron-down accordion-arrow"></i></span>
										</a>
									</h5>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
									<div class="card-body">
										5. Tahap Keempat adalah setelah didapat nilai nilai bobot (W'), nilai tersebut dinormalisasi untuk menghasilkan nilai bobot ternormalisasi (W) menggunakan rumus berikut :
										<br><br>
										<img src="<?php echo base_url('assets/images/perhitungan/rumus_w_ternormalisasi.jpg'); ?>" alt="rumus_w_ternormalisasi" style="object-fit: cover; max-width: 270px;" />
									</div>
								</div>
							</div> <!-- batas tahap 5 -->
						</div> <!-- end custom accordions-->
					</div> 
					<!-- end of accordions -->
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_modal.php") ?>
	<?php $this->load->view("admin/_partials/v_js.php") ?>
	<script>
		$(document).ready(function() {
			$('#example').DataTable( {
					"ordering": false,
					"paging":   false,
					"searching": false,
					"info":     false
			} );
		} );
	</script>
</body>

</html>
