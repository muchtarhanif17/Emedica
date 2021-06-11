<h3><?= $title; ?></h3>
<div class="content" style="margin: auto">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-primary" style="color:#56C596 ">
            <h2><i class="fas fa-prescription-bottle-alt" ></i> Obat </h2>
          </div>
          <div class="card-body">
            <p class="card-category">Jumlah Data Obat Saat ini</p>
            <h3 class="card-title">

              Terdapat <?= $obat; ?> Obat.</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-primary" style="color:#56C596 ">
            <h2><i class="fas fa-file-invoice"></i> Penjualan </h2>
          </div>
          <div class="card-body">
            <p class="card-category">Jumlah Penjualan Bulan ini</p>
            <h3 class="card-title">
               <?= $penjualan; ?> Penjualan.</h3>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-primary" style="color:#56C596">
            <h2><i class="fas fa-file-invoice-dollar"></i> Omzet </h2>
          </div>
          <div class="card-body">
            <p class="card-category" >Omzet Penjualan Bulan ini</p>
            <h3 class="card-title">
              	Rp.<?= number_format($omzet[0]['totals'],0,'.')?>
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <center>
              <h3 style="color:#56C596 ">Grafik Penjualan Minggu ini</h3>
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

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu','Minggu'],
        datasets: [{
            label: 'Minggu Ini',
            data: [<?= $days[1]?>, <?= $days[2]?>, <?= $days[3]?>, <?= $days[4]?>, <?= $days[5]?>, <?= $days[6]?>,<?= $days[7]?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(75, 192, 192, 0.2)'

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(75, 192, 192, 1)',

            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
