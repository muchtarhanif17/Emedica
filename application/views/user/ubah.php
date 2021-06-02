<a href="<?= site_url('user'); ?>" class="btn btn-primary mt-0"><i class="fas fa-arrow-left"></i> &nbsp&nbspKembali</a>
<div class="card" style="width: 800px;">
	<!-- <div class="card-header">
	</div> -->
	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<h3><?= $title ?></h3>
				<?php echo form_open('Cuser/ubah', array("id" => "form-user-update")) ?>
				<input type="hidden" name="id" value="<?= $data['uid'] ?>">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input class="form-control" type="text" name="nama" value="<?= $data['unama'] ?>" id="nama" />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="email" name="email" value="<?= $data['uemail'] ?>" id="email" />
				</div>
				<?php if ($data['uemail'] != $this->session->userdata('user_logged')['uemail']) : ?>
					<div class="form-group">
						<label for="status">Status</label>
						<select name="status" id="status" class="custom-select">
							<option value="<?= $data['ustatus'] ?>" selected>
								<?php if ($data['ustatus'] == 0) { ?>
									<td>Tidak Aktif</td>
								<?php } else { ?>
									<td>Aktif</td>
								<?php } ?>
							</option>
							<option value="1">Aktif</option>
							<option value="0">Tidak Aktif</option>
						</select>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<label for="role">Role</label>
					<select name="role" id="role" class="custom-select">
						<?php foreach ($role as $role) :
							if ($data['role_user'] == $role['id']) : ?>
								<option value="<?= $role['id']; ?>" selected><?= $role['role_user']; ?></option>
							<?php endif; ?>
							<option value="<?= $role['id'] ?>"><?= $role['role_user'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<input class="btn btn-success" type="submit" name="btn" value="Ubah" />
				</form>
			</div>
		</div>
	</div>
</div>

<script text="text/javascript" src="<?= base_url() ?>assets/js/update-data-user.js"></script>