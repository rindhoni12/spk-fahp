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
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Fuzzy Syntethic Extent (Si)
						</h4>
						<!-- ini v_breadcrumb -->
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<thead class="bg-info text-white text-center">
											<tr>
												<th>Kode Kriteria</th>
												<th>Kode Si</th>
												<th>Lower (l)</th>
												<th>Middel (m)</th>
												<th>Upper (u)</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<?php 
											
											$si = "S";
											foreach ($tbl_kriteria as $kriteria): ?>
											<tr>
												<td>
													<?php echo $kriteria->kode_kriteria ?>
												</td>
												<td><?php echo $si.$kriteria->kode_kriteria[1] ?></td>
												<td>
													<?php echo $kriteria->nilai_l ?>
												</td>
												<td>
													<?php echo $kriteria->nilai_m ?>
												</td>
												<td>
													<?php echo $kriteria->nilai_u ?>
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
