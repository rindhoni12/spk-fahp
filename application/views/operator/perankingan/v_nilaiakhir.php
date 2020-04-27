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
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered no-wrap">
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
					<div class="col-6">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered no-wrap">
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
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>

</body>

</html>
