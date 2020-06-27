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
		<?php $this->load->view("admin/_partials/v_sidebaroperator.php") ?>
		<div class="page-wrapper">
			<div class="page-breadcrumb">
				<div class="row">
					<div class="col-7 align-self-center">
						<h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Ubah Data Kriteria
						</h4>
						<?php $this->load->view("admin/_partials/v_breadcrumb.php") ?>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header text-white bg-light">
								<a href="<?php echo site_url('operator/kriteria') ?>"><i class="fas fa-arrow-left"></i>&nbsp Kembali</a>
							</div>
							<div class="card-body">
								<form action="<?php base_url('operator/kriteria/ubah') ?>" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?php echo $kriteria->id_kriteria?>" />
									<div class="form-body">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="kode_kriteria">Kode Kriteria </label>
													<input class="form-control text-capitalize <?php echo form_error('kode_kriteria') ? 'is-invalid':'' ?>"
														type="text" name="kode_kriteria" placeholder="Masukkan kode kriteria" autofocus autocomplete="off" value="<?php echo $kriteria->kode_kriteria ?>">
													<div class="invalid-feedback">
														<?php echo form_error('kode_kriteria') ?>
													</div>
												</div>
											</div>
											<div class="col-md-8">
												<div class="form-group">
													<label for="nama_kriteria">Nama Kriteria </label>
													<input class="form-control <?php echo form_error('nama_kriteria') ? 'is-invalid':'' ?>"
														type="text" name="nama_kriteria" placeholder="Masukkan nama kriteria" autocomplete="off" value="<?php echo $kriteria->nama_kriteria ?>">
													<div class="invalid-feedback">
														<?php echo form_error('nama_kriteria') ?>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="mt-3" for="nilai_l">Nilai Lower (l) </label>
													<input class="form-control <?php echo form_error('nilai_l') ? 'is-invalid':'' ?>"
														type="number" step="any" name="nilai_l" placeholder="Masukkan bobot fuzzy nilai lower" autocomplete="off" value="<?php echo $kriteria->nilai_l ?>">
													<div class="invalid-feedback">
														<?php echo form_error('nilai_l') ?>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="mt-3" for="nilai_m">Nilai Middle (m) </label>
													<input class="form-control <?php echo form_error('nilai_m') ? 'is-invalid':'' ?>"
														type="number" step="any" name="nilai_m" placeholder="Masukkan bobot fuzzy nilai middle" autocomplete="off" value="<?php echo $kriteria->nilai_m ?>">
													<div class="invalid-feedback">
														<?php echo form_error('nilai_m') ?>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="mt-3" for="nilai_u">Nilai Upper (u) </label>
													<input class="form-control <?php echo form_error('nilai_u') ? 'is-invalid':'' ?>"
														type="number" step="any" name="nilai_u" placeholder="Masukkan bobot fuzzy nilai upper" autocomplete="off" value="<?php echo $kriteria->nilai_u ?>">
													<div class="invalid-feedback">
														<?php echo form_error('nilai_u') ?>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="row">
											<div class="col-md-4">
												<label class="mt-3" for="param_kriteria">Parameter Kriteria </label>
													<div class="btn-list">
														<button type="button" class="btn waves-effect waves-light btn-success btn-sm" id="tambah">Tambah Form</button>
														<button type="button" class="btn waves-effect waves-light btn-danger btn-sm" id="hapus">Kurangi Form</button>
													</div>
											</div>
										</div> -->
											<?php
												$i=0;
												foreach($tbl_kriteria as $row)
												{ 
													$arr_par[$i] = (explode (',', $row->nilai_param));
													$par_kri[$i] = (explode (',', $row->param_kriteria));
													$i++;
												}
											?>
											<div class="row">
												<?php
													$kz = ((substr($kriteria->kode_kriteria, 1, 3)) - 1);
													$y = 0;
													$mm = (COUNT($arr_par[$kz]));
													// $val1 = form_error('nilai_param') ? 'is-invalid':'' ;
													// $val2 = form_error('param_kriteria') ? 'is-invalid':'' ;
													// $validasi1 =  form_error('nilai_param') ;
													// $validasi2 =  form_error('param_kriteria') ;
													while($y < COUNT($arr_par[$kz]))
													{
														echo '<div class="col-md-4">
																		<div class="form-group" id="groupnilai">
																			<div id="divnilai'.($mm).'">
																				<label class="mt-4" for="nilai_param">Nilai Parameter '.($mm).' : </label>
																				<input type="number" step="any" class="form-control " name="nilai_param[]" placeholder="Masukkan nilai parameter kriteria" autocomplete="off" id="input'.($mm).'" value="'.$arr_par[$kz][$y].'"/>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-8">
																		<div class="form-group" id="groupnama">
																			<div id="div'.($mm).'">
																				<label class="mt-4" for="param_kriteria">Nama Parameter '.($mm).' : </label>
																				<input type="text" class="form-control " name="param_kriteria[]" placeholder="Masukkan nama parameter kriteria" autocomplete="off" id="input'.($mm).'" value="'.$par_kri[$kz][$y].'"/>
																			</div>
																		</div>
																	</div>';
														$y++;
														$mm--;
													}
												?>
											</div>
										
										<div class="form-actions mt-4">
											<div class="text-left">
												<button type="submit" class="btn btn-info">Ubah Data</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view("admin/_partials/v_footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/v_js.php") ?>

	<!-- <script type="text/javascript">
    $(document).ready(function () {
      var i = 2;

      $("#tambah").click(function () {
        // if (i > 5) {
        //   alert("Maksimal 5 Input.");
        //   return false;
        // }

				var div = $(document.createElement('divnilai'))
          .attr("id", 'div' + i);
        div.before()
					.html(
						'<label class="mt-4" for="nilai_param">Nilai Parameter ' + i + ' : </label>' + '<input type="text" class="form-control <?php echo form_error('nilai_param') ? 'is-invalid':'' ?>" name="nilai_param[]" placeholder="Masukkan nilai parameter kriteria" id="input' + i + '" />' + '<div class="invalid-feedback">' + '<?php echo form_error('nilai_param') ?>' + '</div>'
					);
				div.prependTo("#groupnilai");

        var div = $(document.createElement('div'))
          .attr("id", 'div' + i);
        div.before()  
					.html(
						'<label class="mt-4" for="param_kriteria">Nama Parameter ' + i + ' : </label>' + '<input type="text" class="form-control <?php echo form_error('param_kriteria') ? 'is-invalid':'' ?>" name="param_kriteria[]" placeholder="Masukkan nama parameter kriteria" id="input' + i + '" />' + '<div class="invalid-feedback">' + '<?php echo form_error('param_kriteria') ?>' + '</div>'
					);						
        div.prependTo("#groupnama");
        i++;
      });

      $("#hapus").click(function () {
        if (i == 2) {
          alert("Input Tidak Bisa Di Hapus Lagi.");
          return false;
        }
        i--;
        $("#divnilai" + i).remove();
				$("#div" + i).remove();
      });

    });
	</script> -->
	
  <!-- <style type="text/css">
    a {
      cursor: pointer
    }
  </style> -->


</body>

</html>
