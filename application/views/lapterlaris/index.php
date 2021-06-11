<div class="card" style="min-width:800px;margin:auto">
	<div class="card-header">
<br>
<h2 align="center">
	Laporan Obat Terlaris
</h2>
	</div>
	<div class="card-body">
			<br>
		<div class="table-responsive">
			<table class="display" width="100%" cellspacing="0" id="table_id">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Obat</th>
						<th>Total Terjual</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1;$gtotals=0;
					foreach ($lap as $lap): ?>
						<tr>
							<td> <?= $no++ ?></td>
							<td> <?= $lap['obnama']?> </td>
							<td> <?= $lap['totals']?> </td>

						</tr>
					<?php
				endforeach; ?>


				</tbody>
			</table>
		</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('#table_id').dataTable();

	});
</script>
