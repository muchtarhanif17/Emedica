<div class="card" style="min-width:800px;margin:auto">
	<div class="card-header">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
			Tambah Satuan
		</button>
	</div>

	<div class="card-body">
		<div class="table">
			<table id="table_id" class="display">
				<thead>
					<tr>
						<th>No.</th>
						<th>Jenis</th>
						<th>status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 0; ?>
					<?php foreach ($satuan as $data) : ?>
						<tr>
							<td><?= ++$i; ?></td>
							<td><?= $data['satnama'] ?></td>
							<?php if ($data['satstatus'] == '1') : ?>
								<td>Aktif</td>
								<td>
									<?php echo form_open('Csatuan/updateStatus', array("id" => "form-status")) ?>
									<input type="hidden" value="<?= $data['satid']; ?>" name="id">
									<input type="hidden" value="<?= $data['satnama']; ?>" name="nama">
									<input type="hidden" value="<?= $data['satstatus']; ?>" name="status">
									<button type="submit" class="btn btn-danger">Nonktifkan</button>
									<?= form_close(); ?>
								</td>
							<?php endif; ?>
							<?php if ($data['satstatus'] == '0') : ?>
								<td>Tidak Aktif</td>
								<td>
									<?php echo form_open('Csatuan/updateStatus', array("id" => "form-status1")) ?>
									<input type="hidden" value="<?= $data['satid']; ?>" name="id">
									<input type="hidden" value="<?= $data['satstatus']; ?>" name="status">
									<button type="submit" class="btn btn-success">Aktifkan</button>
									<?= form_close(); ?>
								</td>
							<?php endif; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Satuan</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div id="message-body"></div>
				<?php echo form_open('Csatuan/tambah', array("id" => "form-satuan")) ?>
				<div class="form-group">
					<label for="satuan">Jenis</label>
					<input type="text" class="form-control" id="satuan" placeholder="Masukkan Jenis Obat" name="satuan" />
					<div class="invalid-feedback text-danger"></div>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" id="status" class="custom-select">
						<option value="1">Aktif</option>
						<option value="0">Tidak Aktif</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				<!-- <input type="submit" class="btn btn-success" value="Buat User"> -->
				<button type="submit" class="btn btn-success">Simpan Data</button>
			</div>
			</form>
		</div>
	</div>
</div>

<script text="text/javascript" src="<?= base_url() ?>assets/js/create-satuan.js"></script>
<script>
	$(document).ready(function() {
		$('#table_id').dataTable();
	});
</script>