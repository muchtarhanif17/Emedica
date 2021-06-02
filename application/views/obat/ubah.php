<a href="<?= site_url('obat'); ?>" class="btn btn-primary mt-0"><i class="fas fa-arrow-left"></i> &nbsp&nbspKembali</a>
<div class="card" style="width: 800px;">
	<div class="card-header">
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<h3><?= $title ?></h3>
				<?php echo form_open('Cobat/ubah', array("id" => "form-obat-update")) ?>
				<input type="hidden" name="id" value="<?= $data['obid']; ?>">
				<div class="form-group">
					<label for="inputName">Nama</label>
					<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Obat" name="nama" value="<?= $data['obnama']; ?>" />
					<div class="invalid-feedback text-danger"></div>
				</div>
				<div class="form-group">
					<label for="satuan">Satuan</label>
					<select name="satuan" id="satuan" class="custom-select">
						<?php foreach ($sat as $row) :
							if ($row['id'] == $data['satid']) : ?>
								<option value="<?= $row['satid'] ?>">
									<?= $row['satnama']; ?>
								</option>
							<?php endif;
							if ($row['satstatus'] != 0) : ?>
								<option value="<?= $row['satid'] ?>">
									<?= $row['satnama']; ?>
								</option>
						<?php
							endif;
						endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="inputMessage">Stock</label>
					<input type="number" class="form-control" id="stok" placeholder="" name="stok" value="<?= $data['obstok'] ?>" />
					<div class="invalid-feedback text-danger"></div>
				</div>
				<div class="form-group">
					<label for="inputEmail">Harga</label>
					<input type="number" class="form-control" id="harga" placeholder="" name="harga" value="<?= $data['obharga'] ?>" />
					<div class="invalid-feedback text-danger"></div>
				</div>
				<input class="btn btn-success" type="submit" name="btn" value="Ubah" />
				</form>
			</div>
		</div>
	</div>
</div>

<script text="text/javascript" src="<?= base_url() ?>assets/js/update-data-obat.js"></script>