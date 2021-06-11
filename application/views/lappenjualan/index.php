<div class="card" style="min-width:800px;margin:auto">
	<div class="card-header">
<br>
<h2 align="center">
	Laporan Penjualan Obat
</h2>
	</div>
	<div class="card-body">
		<form class="form-inline" method="post" action="<?= site_url('lappenjualan/')?>">
		  <div class="form-group" style="margin-right:20px">
		    <label for="date1">Tanggal Awal :   </label>
		    <input type="date" class="form-control" name="date1" value="<?= $date1?>">
		  </div>

		  <div class="form-group" style="margin-right:20px">
		    <label for="date2">Tanggal Akhir :   </label>
		    <input type="date" class="form-control" name="date2" value="<?= $date2?>">
		  </div>

		  <button type="submit" class="btn btn-info">Submit</button>
		</form>
			<br>
		<div class="table-responsive">
			<table class="display" width="100%" cellspacing="0" id="table_id">
				<thead>
					<tr>
						<th>No.</th>
						<th>Tanggal</th>
						<th>No. Faktur</th>
						<th>Total Penjualan</th>
						<th>Nominal Bayar</th>
						<th>Feedback</th>
						<th>Kasir</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1;$gtotals=0;
					foreach ($lap as $lap): ?>
						<tr>
							<td> <?= $no++ ?></td>
							<td> <?= $lap['pjtgl']?> </td>
							<td> <?= $lap['pjfaktur']?> </td>
							<td> Rp.<?= number_format($lap['pjtotal'],0,'.')?> </td>
							<td> Rp.<?= number_format($lap['pjbayar'],0,'.')?> </td>
							<td> <?= $lap['pjfeedback']?> </td>
							<td> <?= $lap['unama']?> </td>
							<td>
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-success detail" data-id="<?=$lap['pjid'] ?>" data-toggle="modal" data-target="#exampleModal">
									Lihat Detail
								</button>
							</td>


						</tr>
					<?php
					$gtotals += $lap['pjtotal'];
				endforeach; ?>


				</tbody>
			</table>
			<h4>Omzet Apotek : Rp.<?= number_format($gtotals,0,'.')?> </h4>
		</div>
	</div>
</div>



<!-- Modal Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Detail Penjualan </h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="display" width="100%" cellspacing="0" id="table_id2">
						<thead>
							<tr>
								<th>No.</th>
								<th>Obat</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Total</th>

							</tr>
						</thead>
						<tbody class="transDetail">



						</tbody>
					</table>
			</div>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
			
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#table_id').dataTable();
		$('#table_id2').dataTable();


		$(document).on("click", ".detail", function () {
	     var pjid = $(this).data('id');
			 $.ajax({
					 type: "GET",
					 url: "<?= site_url()?>/lappenjualan/getlaporandetail/" + pjid,
					 success: function(msg){
							 $('.transDetail').html(msg);
					 }
			 });
		});
	});
</script>
