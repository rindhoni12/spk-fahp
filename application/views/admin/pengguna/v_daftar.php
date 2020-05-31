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
		<?php $this->load->view("admin/_partials/v_sidebar.php") ?>

		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
							Daftar Data Pengguna
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
							<div class="card-header text-white bg-light">
								<a href="<?php echo site_url('admin/pengguna/tambah') ?>"><i class="fas fa-plus"></i>&nbsp Tambah Data Pengguna</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="zero_config" class="table table-striped table-bordered no-wrap">
										<thead class="bg-success text-white">
											<tr>
												<th>Nama User</th>
												<th>Username</th>
												<th>Role</th>
												<th>Foto</th>
												<th>Terdaftar Sejak</th>
												<th>Terakhir Login</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($tbl_user as $pengguna): ?>
											<tr>
												<td>
													<?php echo $pengguna->nama_user ?>
												</td>
												<td>
													<?php echo $pengguna->username ?>
												</td>
												<td>
													<?php echo $pengguna->role ?>			
												</td>
												<td>
													<img src="<?php echo base_url('upload/pengguna/'.$pengguna->foto) ?>" alt="foto" class="rounded-circle" height="64" width="64" style="object-fit: cover; object-position: center;"/>
												</td>
												<td>
													<?php echo longdate_indo($pengguna->tanggal_dibuat) ?>
												</td>
												<td>
													<?php echo longdate_indo($pengguna->login_terakhir) ?>
												</td>
												<td width="150px">
													<a href="<?php echo site_url('admin/pengguna/ubah/'.$pengguna->id_user) ?>"
														class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
													
													<?php
														if($pengguna->id_user != $this->session->userdata("user_id"))
														{ 
													?>
															<a onclick="deleteConfirm('<?php echo site_url('admin/pengguna/delete/'.$pengguna->id_user) ?>')"	href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
													<?php
														}
													?>
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
