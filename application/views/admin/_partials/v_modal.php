<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-top">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="topModalLabel">Apakah Anda yakin?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<p>Data yang Anda hapus tidak dapat dikembalikan.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
				<!-- <button type="button" class="btn btn-danger">Hapus</button> -->
				<a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
			</div>
		</div>
	</div>
</div>

<!-- Reset Modal -->
<div id="multiple-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-top">
				<div class="modal-content">
						<div class="modal-header">
								<h4 class="modal-title" id="multiple-oneModalLabel">Apakah Anda yakin?</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
								<h5 class="mt-0">Reset Data</h5>
								<p>Semua data yang tersimpan akan hilang dan tidak dapat dikembalikan.</p>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
								<button type="button" class="btn btn-danger" data-target="#multiple-two" data-toggle="modal" data-dismiss="modal">Reset</button>
						</div>
				</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div id="multiple-two" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-top">
				<div class="modal-content">
						<div class="modal-header">
								<h4 class="modal-title" id="multiple-twoModalLabel">Apakah Anda yakin?</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
								<h5 class="mt-0">Sekali lagi! Reset Data</h5>
								<p>Semua data yang tersimpan akan hilang dan tidak dapat dikembalikan.</p>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
								<a id="btn-reset" class="btn btn-danger" href="#">Reset</a>
						</div>
				</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

