<div class="card" style="min-width:800px;margin:auto">

            <div class="card-header card-header-success">
              <h4 class="card-title">Penjualan Obat</h4>
              <p class="card-category">Form untuk melakukan Penjualan Obat</p>
            </div>
            <div class="card-body">
              <br>
              <form action="{{ route('Penjualan.store') }}" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">No Faktur</label>
                          <input class="form-control" type="text" name="nofaktur" value="" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Tanggal</label>
                          <input class="form-control date" type="date" name="tanggal" value="" required>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Kasir</label>
                          <input class="form-control" type="text" name="user" value="Agil Syahputro" disabled>
                          <input class="hide" type="hidden" name="gtotal" value="">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label class="">Jumlah Bayar</label>
                          <input class="form-control" type="number" name="jml_bayar" value="" required>
                      </div>
                    </div>

                  </div>

                  <div class="col-md-12">
                    <div class="col-md-12">
                      <a href="{{ route('Penjualan.tambah')}}" class="btn btn-info">Tambah Obat</a>
                      <input type="submit" name="submit" class="btn btn-warning bayar" value="Bayar">
                      <h2 class="pull-right">Rp.<span class="harga"> 36.000  </span> </h2>
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
                              <!-- @each(cart in cart) -->
                              <tr>
                                <td> 1 </td>
                                <td> Bodrex Extra </td>
                                <td class="harga">Rp. 12.000</td>
                                <td >
                                  <a href="{{ route('Penjualan.plus', { id : cart.id_cart }) }}" class="btn btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>
                                  </a>
                                  &nbsp;&nbsp; 3 &nbsp;&nbsp;
                                  <a href="{{ route('Penjualan.min', { id : cart.id_cart }) }}" class="btn btn-sm"><i class="fa fa-minus" aria-hidden="true"></i>
                                  </a>
                                </td>
                                <td class="harga"> Rp. 36.000</td>
                                <td>
                                    <a href="{{ route('Penjualan.delete', { id : cart.id_cart }) }}" class="btn btn-warning">Delete</a>
                                </td>
                              </tr>
                              @endeach
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

      if ($('.hide').val()=='') {

        $('.bayar').click(function(event){
          alert('Anda Belum Menambah Obat');
          event.preventDefault()

        });
      }
    });

  </script>

</div>
