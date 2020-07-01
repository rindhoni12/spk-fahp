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
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Nilai Akhir
						</h4>
						<!-- ini v_breadcrumb -->
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
					<div class="col-5 align-self-center">
						<div class="customize-input float-right">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample"
								aria-expanded="false" aria-controls="collapseExample">
								<i data-feather="info" class="feather-icon" style="margin-bottom: 2px"></i> Informasi
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="collapse" id="collapseExample">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Informasi</a>
							</div>
							<div class="card card-body">
								Dalam membuat perankingan terbaik, mula-mula mencari bobot dari setiap Alternatif yang ada.
								<br>
								Bobot tersebut didapat dari mengalikan setiap bobot parameter tiap kriteria dengan bobot kriterianya,
								setelah itu dijumlahkan.
								<br><br>
								Untuk lebih jelasnya perhitungan menggunakan rumus berikut ini :
								<br>
								<br>
								<img src="<?php echo base_url('assets/images/perhitungan/nilai_akhir.png'); ?>" alt="nilai_akhir" width="351" />
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="card">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-list-ul"></i>&nbsp Data Nilai </a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered no-wrap">
										<thead class="bg-info text-white text-center">
											<?php
												$i=0;
												foreach($tbl_nilaiakhir as $row)
												{ 
														$arr_nilai[$i] = (explode (',', $row->nilai));
														$i++;
												}
											?>
											<tr>
												<th>Kode Alternatif</th>
												<?php 												
												$x = 1;
												while($x <= COUNT($arr_nilai[0]))
												{
													echo '<th>Bobot K'.$x.'</th>';
													$x++;
												} 
												?>
											</tr>
										</thead>
										<tbody class="text-center">
											<?php foreach ($tbl_nilaiakhir as $nilai): ?>
											<tr>
												<td>
													<?php echo $nilai->kode_alternatif ?>
												</td>

												<?php 
												$j=0;
												$m=0;
												while($m < COUNT($arr_nilai[0]))
												{
													echo '<td>'.$nilai->nilai[$j].'</td>';
													$j+=2;
													$m++;
												}
												?>

											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-database"></i>&nbsp Data Bobot </a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example2" class="table table-striped table-bordered no-wrap">
										<thead class="bg-info text-white text-center">
											<tr>
												<th>Kode Kriteria</th>
												<th>Bobot (W)</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<?php
											foreach ($tbl_bobot as $bobot): ?>
											<tr>
												<td>
													<?php echo $bobot->id_w ?>
												</td>
												<td>
													<?php echo $bobot->nilai_w ?>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_modal.php") ?>
	<?php $this->load->view("admin/_partials/v_js.php") ?>
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

</body>

</html>
