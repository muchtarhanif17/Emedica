<h3><?= $title; ?></h3>

<div class="card" style="min-width:800px;margin:auto">
	<div class="card-header">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
			Buat User Baru
		</button>
	</div>
	<div class="card-body">
		<div class="table">
			<table class="table table-hover" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($user as $data) : ?>
						<tr>

							<td style="height: 50px;"> <?= ++$start; ?></td>
							<td><?= $data['unama']; ?></td>
							<td><?= $data['uemail']; ?></td>
							<?php if ($data['ustatus'] == 0) { ?>
								<td>Tidak Aktif</td>
							<?php } else { ?>
								<td>Aktif</td>
							<?php } ?>
							<td>
								<a class="btn btn-warning" href="<?= site_url('user/edit/' . $data['uid'] . '') ?>">edit</a>
							</td>
						</tr>

					<?php endforeach; ?>

				</tbody>
			</table>
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>



<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Buat User Baru</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div id="message-body"></div>
				<?php echo form_open('Cuser/tambah', array("id" => "form-user")) ?>
				<div class="form-group">
					<label for="inputName">Nama</label>
					<input type="text" class="form-control" id="nama" placeholder="Enter your name" name="nama" />
					<div class="invalid-feedback text-danger"></div>
				</div>
				<div class="form-group">
					<label for="inputEmail">Email</label>
					<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" />
					<div class="invalid-feedback text-danger"></div>
				</div>
				<div class="form-group">
					<label for="inputMessage">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" />
					<div class="invalid-feedback text-danger"></div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
				<!-- <input type="submit" class="btn btn-success" value="Buat User"> -->
				<button type="submit" class="btn btn-success">Buat User</button>
			</div>
			</form>
		</div>
	</div>
</div>



<script text="text/javascript" src="<?= base_url() ?>assets/js/create-user.js"></script>