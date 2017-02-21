<div class="modal text-left fade" id="delete{{ $model->id }}">
	<div class="modal-dialog">
		<div class="modal-content">
	    <form class="form-horizontal" role="form" method="POST" action="{{ url('golongan.destroy') }}">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">{{{ $title or "Hapus Data" }}}</h4>
			</div>
			<div class="modal-body">
				<p>
					{{ $message or "Apakah anda yakin ingin menghapus data ini?" }}
				</p>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Yes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			</div>
		</form>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->