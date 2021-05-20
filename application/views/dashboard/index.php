<h3><?= $title; ?></h3>
<div class="content" style="margin: auto">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-info">
            <h2><i class="fa fa-address-book"></i> Obat </h2>
          </div>
          <div class="card-body">
            <h5 class="card-title">Data Obat</h5>
            <p class="card-category">

              Terdapat <?= $obat; ?> Obat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <h2><i class="fa fa-address-book-o"></i> Apoteker </h2>
          </div>
          <div class="card-body">
            <h4 class="card-title">Data Apoteker</h4>
            <p class="card-category">
              Terdapat <?= $apoteker; ?> Apoteker.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-primary">
            <h2><i class="fa fa-list"></i> Penjualan </h2>
          </div>
          <div class="card-body">
            <h4 class="card-title">Penjualan Hari ini</h4>
            <p class="card-category">
              Terdapat <?= $penjualan; ?> Penjualan.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <center>
              <h4>Grafik Penjualan Per Bulan</h4>
            </center>
          </div>
          <div class="card-body">
            <canvas id="myChart" width="200" height="60"></canvas>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>