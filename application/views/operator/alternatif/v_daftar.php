<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<!-- ini isi v_head.php -->
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->

		<!-- ini isi v_navbar.php -->
		<?php $this->load->view("admin/_partials/v_navbar.php") ?>
		<!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->

		<!-- Sidebar scroll-->
		<!-- ini isi v_sidebaroperator.php -->
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
		<!-- End Sidebar scroll-->

		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<!-- ============================================================== -->
			<!-- Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Alternatif 
						<!-- <?php if(isset($num_results)) {echo '(' . $num_results . ' Data)';}?> -->
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
					<div class="col-5 align-self-center">
						<div class="customize-input float-right">
							<?php 
								if ($this->session->userdata('role') == 'operator')
								{ 
								?>
									<a class="btn btn-danger" style="margin-right: 2px" onclick="resetConfirm('<?php echo site_url('operator/alternatif/reset') ?>')" href="#!" >
										<i data-feather="x-circle" class="feather-icon" style="margin-bottom: 2px"></i>	Reset Data
									</a>
								<?php
								}
							?>
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								<i data-feather="info" class="feather-icon" style="margin-bottom: 2px"></i>	Informasi
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>
				<!-- basic table -->
				<div class="row">
					<div class="col-12">
						<div class="collapse" id="collapseExample">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Informasi</a>
							</div>
							<div class="card card-body">
								Data Alternatif ditampilan pada tabel berikut.
							</div>
						</div>
						<div class="card">
							<?php 
								if ($this->session->userdata('role') == 'operator')
								{ 
								?>
									<div class="card-header text-white bg-light">
									<a href="<?php echo site_url('operator/alternatif/tambah') ?>"><i class="fas fa-plus"></i>&nbsp Tambah Data Alternatif</a>
									</div>
									<!-- <div class="card-header">Featured</div>
									<div class="card text-white bg-success">
									<div class="card-header">
											<h4 class="mb-0 text-white">Card Title</h4>
									</div> -->
									<div class="card-body">
										<!-- <h4 class="card-title">Tabel Data Alternatif</h4> -->
										<!-- <h6 class="card-subtitle">Barikut daftar alternatif yang akan digunakan</h6>
										<div class="btn-list">
											<button type="button" class="btn waves-effect waves-light btn-primary float-left">Tambah Data</button>
										</div> -->
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered no-wrap">
												<thead class="bg-success text-white">
								<?php
								}
								else
								{
								?>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered no-wrap">
												<thead class="bg-info text-white">
								<?php
								}  
							?>
											<tr>
												<th>Kode Alternatif</th>
												<th>Nama Alternatif</th>
												<th>Kecamatan Alternatif</th>
												<?php 
													if ($this->session->userdata('role') == 'operator')
													{ 
													?>
														<th class="text-center">Aksi</th>
													<?php
													}
												?>
											</tr>
										</thead>

										<tbody>
											<?php foreach ($tbl_alternatif as $alternatif): ?>
											<tr>
												<td>
													<?php echo $alternatif->kode_alternatif ?>
												</td>
												<td>
													<?php echo $alternatif->nama_alternatif ?>
												</td>
												<td>
													<?php echo $alternatif->kec_alternatif ?>
												</td>
												<?php 
													if ($this->session->userdata('role') == 'operator')
													{ 
													?>
														<td width="175px">
															<a href="<?php echo site_url('operator/alternatif/ubah/'.$alternatif->id_alternatif) ?>" class="btn btn-sm">
																<i class="fas fa-edit"></i> Ubah
															</a>
															<a onclick="deleteConfirm('<?php echo site_url('operator/alternatif/delete/'.$alternatif->id_alternatif) ?>')" href="#!" 
															class="btn btn-sm text-danger">
																<i class="fas fa-trash"></i> Hapus
															</a>
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
				<!-- end of basic table -->

				<!-- basic table from tutorial -->
				<!-- DataTables -->
				<!-- <div class="card mb-3">
					<div class="card-header">
						<a href="><i class="fas fa-plus"></i> Add New</a>
					</div>
				</div> -->
				<!-- end of it -->
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->


			<!-- ini isi v_footer.php -->
			<?php $this->load->view("admin/_partials/v_footer.php") ?>

			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<!-- ini isi v_modal.php -->
	<?php $this->load->view("admin/_partials/v_modal.php") ?>
	<!-- ini isi v_js.php -->
	<?php $this->load->view("admin/_partials/v_js.php") ?>

	<script>
		function deleteConfirm(url) {
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
	<script>
		function resetConfirm(url) {
			$('#btn-reset').attr('href', url);
			$('#multiple-one').modal();
		}
	</script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable( {
					"ordering": false
			} );
		} );
	</script>
</body>

</html>
