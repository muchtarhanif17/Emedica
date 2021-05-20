
<?php

  $this->load->view("template/header.php");
  $this->load->view("template/navbar.php");
 ?>

      <div class="card" style="min-width: 800px;margin: 0 auto">

    					<div class="card-header">
                <h1>Ubah Vaksin</h1>
    					</div>
    					<div class="card-body">

    						<form method="post">
                  <div class="form-group">
    								<label for="nik">Nama Vaksin</label>
    								<input class="form-control <?php echo form_error('vaknama') ? 'is-invalid':'' ?>"
    								 type="text" name="vaknama" value="<?= $vaksin->vaknama?>" />
    								<div class="invalid-feedback">
    									<?php echo form_error('vaknama') ?>
    								</div>
    							</div>


                  <input type="hidden" name="vakid" value="<?= $vaksin->vakid?>">

    							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
    						</form>

    					</div>
      </div>
<?php
  $this->load->view("template/footer.php");
 ?>
