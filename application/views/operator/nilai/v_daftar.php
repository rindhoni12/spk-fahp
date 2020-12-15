<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view("admin/_partials/v_head.php") ?>
</head>
<body>
	<?php $this->load->view("admin/_partials/v_preloader.php") ?>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
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
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Daftar Data Nilai</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
					<div class="col-5 align-self-center">
						<div class="customize-input float-right">
							<!-- <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#multiple-one" style="margin-right: 2px">
								<i data-feather="x-circle" class="feather-icon" style="margin-bottom: 2px"></i>	Reset Data
							</button> -->
							<?php 
								if ($this->session->userdata('role') == 'operator')
								{ 
								?>
									<a class="btn btn-danger" style="margin-right: 2px" onclick="resetConfirm('<?php echo site_url('operator/nilai/reset') ?>')" href="#!" >
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
						<div class="collapse" id="collapseExample">
							<div class="card-header text-white bg-light">
								<a class="text-info"><i class="fas fa-info-circle"></i>&nbsp Informasi</a>
							</div>
							<div class="card card-body">
								Data Nilai dari masing - masing Alternatif ditampilan pada tabel berikut.
								<br>
								<br> Nilai ditampilkan secara urut mulai dari Kriteria pertama sampai yang terakhir.
							</div>
						</div>
						<div class="card">
							<?php 
								if ($this->session->userdata('role') == 'operator')
								{ 
								?>
									<div class="card-header text-white bg-light">
										<a href="<?php echo site_url('operator/nilai/tambah') ?>"><i class="fas fa-plus"></i>&nbsp Tambah Data Nilai</a>
									</div>
									<div class="card-body">
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
											<?php
												$i=0;
												foreach($tbl_nilai as $row)
												{ 
														$arr_nilai[$i] = (explode (',', $row->nilai));
														$i++;
												}
											?>
											<tr>
												<th>Kode Alternatif</th>
												<!-- <th>Bobot</th> -->
												<?php 												
												$x = 1;
												while($x <= COUNT($arr_nilai[0]))
												{
													echo '<th>Nilai K'.$x.'</th>';
													$x++;
												} 
												?>
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
											<?php foreach ($tbl_nilai as $nilai): ?>
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
												<?php 
													if ($this->session->userdata('role') == 'operator')
													{ 
													?>
														<td width="175px">
															<a href="<?php echo site_url('operator/nilai/ubah/'.$nilai->id_nilai) ?>"
																class="btn btn-sm"><i class="fas fa-edit"></i> Ubah</a>
															<a onclick="deleteConfirm('<?php echo site_url('operator/nilai/delete/'.$nilai->id_nilai) ?>')"
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
