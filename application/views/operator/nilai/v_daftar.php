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
										<a href="<?php echo site_url('operator/nilai/tambah') ?>"><i class="fas fa-plus"></i>&nbsp Tambah Data Nilai</a>
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
													echo '<th>Bobot K'.$x.'</th>';
													$x++;
												} 
												?>
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
														<td>
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
</body>
</html>
