<h3><?= $title; ?></h3>

<div class="card" style="min-width:800px;margin:auto">
	<div class="card-header">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Buat User Baru
		</button>
		<!-- <a href="<?php echo site_url('vaksin/tambah') ?>" class="btn btn-success">Tambah</a> -->
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

							<td> <?= $i; ?></td>
							<td><?= $data['unama']; ?></td>
							<td><?= $data['uemail']; ?></td>
							<?php if ($data['ustatus'] == 0) { ?>
								<td>Tidak Aktif</td>
							<?php } else { ?>
								<td>Aktif</td>
							<?php } ?>
							<td>
								<?php if ($data['ustatus'] == 1) { ?>
									<a class="btn btn-warning" href="#">Non Aktifkan</a>

								<?php } else { ?>
									<a class="btn btn-success" href="#">Aktifkan</a>
								<?php } ?>

							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Buat User Baru</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form role="form" method="POST" id="createuser" class="formtambah" action="<?= site_url('user/tambah') ?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="inputName">Nama</label>
						<input type="text" class="form-control" id="Name" placeholder="Enter your name" name="name" />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" id="Email" placeholder="Enter your email" name="username" />
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<label for="inputMessage">Password</label>
						<input type="password" class="form-control" id="Password" placeholder="Enter your password" name="password" />
						<div class="invalid-feedback"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
					<!-- <input type="submit" class="btn btn-success" value="Buat User"> -->
					<button type="submit" class="btn btn-success" id="createdata">Buat User</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script text="text/javascript">
	$(document).ready(function() {
		$('.formtambah').click(function(e) {
			e.preventDefault();
			$.ajax({
				type: $(this).attr('method'),
				url: $(this).attr('action'),
				data: $(this).serialize(),
				dataType: 'json',
				success: function(response) {
					var responseObj = JSON.parse(response);
					console.log(responseObj);
				}
			});
		});
	});
</script>