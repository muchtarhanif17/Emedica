<div class="card" style="min-width:800px;margin:auto">
  <div class="card-header">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
      Tambah Data Obat
    </button>
  </div>
  <div class="card-body">

    <div class="table">
      <table id="table_id" class="display">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Satuan</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0; ?>
          <?php foreach ($data as $data) :
            if ($data['obsoftdel'] != 0) : ?>
              <tr>
                <td><?= ++$i; ?></td>
                <td><?= $data['obnama']; ?></td>
                <?php foreach ($sat as $satuan) : ?>
                  <?php if ($data['satid'] == $satuan['satid']) : ?>
                    <td><?= $satuan['satnama'] ?></td>
                  <?php endif; ?>
                <?php endforeach; ?>
                <td><?= $data['obstok']; ?></td>
                <td><?= $data['obharga']; ?></td>
                <?php if ($data['obstatus'] == 1) { ?>
                  <td>Tersedia</td>
                <?php } else { ?>
                  <td>habis</td>
                <?php } ?>
                <td>
                  <a class="btn btn-warning" href="<?= site_url("obat/edit/" . $data['obid'] . ""); ?>">Edit</a>
                  <a class="btn btn-danger" href="<?= site_url("obat/hapus/" . $data['obid'] . ""); ?>">Hapus</a>
                </td>
              </tr>
          <?php endif;
          endforeach; ?>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Obat</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="message-body"></div>
        <?php echo form_open('Cobat/tambah', array("id" => "form-obat")) ?>
        <div class="form-group">
          <label for="inputName">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Obat" name="nama" />
          <div class="invalid-feedback text-danger"></div>
        </div>
        <div class="form-group">
          <label for="satuan">Satuan</label>
          <select name="satuan" id="satuan" class="custom-select">
            <option value="">Pilih Satuan</option>
            <?php foreach ($sat as $row) :
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
          <input type="number" class="form-control" id="stok" placeholder="" name="stok" />
          <div class="invalid-feedback text-danger"></div>
        </div>
        <div class="form-group">
          <label for="inputEmail">Harga</label>
          <input type="number" class="form-control" id="harga" placeholder="" name="harga" />
          <div class="invalid-feedback text-danger"></div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <!-- <input type="submit" class="btn btn-success" value="Buat User"> -->
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script text="text/javascript" src="<?= base_url() ?>assets/js/create-obat.js"></script>
<script>
  $(document).ready(function() {
    $('#table_id').dataTable();
  });
</script>