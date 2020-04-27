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
		<?php 
			if ($this->session->userdata('role') == 'operator')
			{
				$this->load->view("admin/_partials/v_sidebaroperator.php");
			}
			else
			{
				$this->load->view("admin/_partials/v_sidebar.php");
			}  
		?>

		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Kriteria
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
							<?php 
								if ($this->session->userdata('role') == 'operator')
								{ 
								?>
									<div class="card-header text-white bg-light">
										<a href="<?php echo site_url('operator/kriteria/tambah') ?>"><i class="fas fa-plus"></i>&nbsp Tambah Data Kriteria</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="zero_config" class="table table-striped table-bordered no-wrap">
												<thead class="bg-success text-white">
								<?php
								}
								else
								{
								?>
									<div class="card-body">
										<div class="table-responsive">
											<table id="zero_config" class="table table-striped table-bordered no-wrap">
												<thead class="bg-info text-white">
								<?php
								}  
							?>
											<tr>
												<th>Kode</th>
												<th>Nama Kriteria</th>
												<th>Lower (l)</th>
												<th>Middel (m)</th>
												<th>Upper (u)</th>
												<th>Bobot Parameter</th>
												<th>Nama Parameter</th>
												<?php 
													if ($this->session->userdata('role') == 'operator')
													{ 
													?>
														<th>Aksi</th>
													<?php
													}
												?>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($tbl_kriteria as $kriteria): ?>
											<tr>
												<td>
													<?php echo $kriteria->kode_kriteria ?>
												</td>
												<td>
													<?php echo $kriteria->nama_kriteria ?>
												</td>

												<td>
													<?php echo $kriteria->nilai_l ?>
												</td>
												<td>
													<?php echo $kriteria->nilai_m ?>
												</td>
												<td>
													<?php echo $kriteria->nilai_u ?>
												</td>
												<td>
													<?php echo $kriteria->nilai_param ?>
												</td>
												<td>
													<?php echo $kriteria->param_kriteria?>
												</td>
												<?php 
													if ($this->session->userdata('role') == 'operator')
													{ 
													?>
														<td width="175px">
															<a href="<?php echo site_url('operator/kriteria/ubah/'.$kriteria->id_kriteria) ?>"
																class="btn btn-sm"><i class="fas fa-edit"></i> Ubah</a>

															<a onclick="deleteConfirm('<?php echo site_url('operator/kriteria/delete/'.$kriteria->id_kriteria) ?>')"
																href="#!" class="btn btn-sm text-danger"><i class="fas fa-trash"></i> Hapus</a>
														</td>
													<?php
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
