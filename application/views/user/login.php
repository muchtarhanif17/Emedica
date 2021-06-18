<div class="card mt-5" style="min-width: 500px;">

  <div class="card-header text-center">
    <h1>Login Page</h1>
  </div>
  <div class="row justify-content-center">
    <div class="col-10">
      <hr>
    </div>
  </div>
  <div class="card-body">

    <form method="post">
      <div class="form-group">
        <label for="email">Email </label>
        <input class="form-control <?php echo form_error('uemail') ? 'is-invalid' : '' ?>" type="email" name="uemail" />
        <div class="invalid-feedback">
          <?php echo form_error('uemail') ?>
        </div>
      </div>
      <div class="form-group">
        <label for="password">Passowrd </label>
        <input class="form-control <?php echo form_error('upassword') ? 'is-invalid' : '' ?>" type="password" name="upassword" />
        <div class="invalid-feedback">
          <?php echo form_error('upassword') ?>
        </div>
      </div>

      <input class="btn btn-success" type="submit" name="btn" value="Masuk">
    </form>

  </div>
</div>