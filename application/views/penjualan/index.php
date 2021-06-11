<div class="card" style="min-width:800px;margin:auto">

            <div class="card-header card-header-success">
              <h4 class="card-title">Penjualan Obat</h4>
              <p class="card-category">Form untuk melakukan Penjualan Obat</p>
            </div>
            <div class="card-body">
              <br>
              <form action="<?= site_url() ?>/penjualan/bayar" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">No Faktur</label>
                          <input class="form-control" type="text" name="pjfaktur" value="<?= $pjfaktur ?>" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Tanggal</label>
                          <input class="form-control date" type="date" name="pjtgl" value="<?= $pjtgl ?>" required>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Kasir</label>
                          <input class="form-control" type="text" name="unama" value="<?= $user['unama'] ?>" disabled>
                      </div>
                    </div>

                    <input class="hide" type="hidden" name="uid" value="<?= $user['uid']?>">
                    <input class="hide" type="hidden" name="pjtotal" value="<?= $total?>">

                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Jumlah Bayar</label>
                          <input class="form-control" type="number" name="pjbayar" value="" required>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-12">
                    <div class="col-md-12">
                      <a href="<?= site_url()?>/penjualan/obat/" class="btn btn-info">Tambah Obat</a>
                      <input type="submit" name="submit" class="btn btn-warning bayar" value="Bayar">
                      <h2 class="pull-right">Rp.<span class="harga"> <?= number_format($total,0,'.') ?> </span> </h2>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table" id="myTable">
                          <thead>
                              <tr>
                                  <td>No  <i class="fa fa-sort"></i>  </td>
                                  <td>Nama Obat  <i class="fa fa-sort"></i>  </td>
                                  <td>Harga  <i class="fa fa-sort"></i>  </td>
                                  <td>Jumlah <i class="fa fa-sort"></i></td>
                                  <td>Total <i class="fa fa-sort"></i></td>
                                  <td>Action</td>
                              </tr>
                          </thead>

                          <tbody>
                            <?php
                          if ($obat != '') :

                            foreach ($obat as $obat): ?>
                              <tr>
                                <td> 1 </td>
                                <td> <?= $obat['obnama']?> </td>
                                <td class="harga">Rp. <?= number_format($obat['obharga'],0,'.');?></td>
                                <td >
                                  <a href="<?= site_url()?>/penjualan/tambah/<?= $obat['obid']?>" class="btn btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>
                                  </a>
                                  &nbsp;&nbsp; <?= $obat['quantity'] ?> &nbsp;&nbsp;
                                  <a href="<?= site_url()?>/penjualan/kurang/<?= $obat['obid']?>" class="btn btn-sm"><i class="fa fa-minus" aria-hidden="true"></i>
                                  </a>
                                </td>
                                <td class="harga">Rp. <?= number_format(($obat['obharga']*$obat['quantity']),0,'.'); ?></td>
                                <td>
                                    <a href="<?= site_url()?>/penjualan/remove/<?= $obat['obid']?>" class="btn btn-warning">Delete</a>
                                </td>
                              </tr>
                            <?php endforeach;
                          endif; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <br>


              </form>
            </div>
        </div>


  <script type="text/javascript">

    $(document).ready( function () {
      $('.harga').number( true, 2 );
      $('#myTable').DataTable({
        "dom": 'lrtip',
        "lengthChange": false,
        "pageLength": 5


      });

    });

  </script>

</div>
