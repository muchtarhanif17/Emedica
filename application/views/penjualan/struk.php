<div style="width: 5.3cm;padding-left: 0cm; padding-right: 0.5cm;font-family : Arial;font-size : 12px;">

	<table width="100%" align="center" style="text-align: center; font-size: 100%; font-weight:bold;" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
			<td style="font-weight:bold;">E-MEDICA</td>
		</tr>

	</tbody></table>

<br style="margin-top: 1; color: #000000; margin-bottom: 5;">
<!-- <hr style="margin-top: 0; color: #000000; margin-bottom: 0.02cm;" /> -->
<!-- <hr style="margin-top: 0; color: #000000;" /> -->
<table width="100%" style="font-size: 100%;font-weight:bold;" border="0" cellpadding="0" cellspacing="0">
	<tbody><tr>
		<td width="40%" align="left" valign="top">Tanggal</td>
		<td width="2%" align="left" valign="top">:</td>
		<td style="padding-left: 5px;"><?= $lap[0]['pjtgl'] ?></td>
	</tr>
	<tr>
		<td width="40%" align="left" valign="top">No. Faktur</td>
		<td width="2%" align="left" valign="top">:</td>
		<td style="padding-left: 5px;" align="left" valign="top"><?= $lap[0]['pjfaktur'] ?></td>
	</tr>
	<tr>
		<td width="40%" align="left" valign="top">Kasir</td>
		<td width="2%" align="left" valign="top">:</td>
		<td style="padding-left: 5px;" align="left" valign="top"><?= $lap[0]['unama'] ?></td>
	</tr>



</tbody></table>
<hr style="margin-top: 5; color: #000000; margin-bottom: 1;">
<hr style="margin-top: 1; color: #000000; margin-bottom: 5;">
	<table width="100%" style="font-size: 100%; font-weight:bold;" border="0" cellpadding="0" cellspacing="0">
		<tbody>
      <?php
      $gtotal = 0;
      foreach ($lapd as $lapd): ?>
        <tr>
  		    <td style="width: 100px; overflow: hidden; display: inline-block; white-space: normal; word-wrap: break-word;">
            <?= $lapd['obnama']?></td>
  			  <td align="left" valign="top">;<?= $lapd['satnama']?></td>
  	  	</tr>
        <tr>
  	  	 	<td align="left" width="58%">
  	  	 	<?= $lapd['pjdqty']?> x Rp.<?= number_format($lapd['obharga'],0,'.') ?>
        </td>
        <td align="right">
          Rp. <?= number_format(($lapd['pjdqty']*$lapd['obharga']),0,'.') ?>
        </td>
       </tr>
      <?php
      $total = $lapd['pjdqty']*$lapd['obharga'];
      $gtotal += $total;
    endforeach; ?>


	  </tbody>
  </table>

<hr style="margin-top: 5; color: #000000; margin-bottom: 5">
	<table width="100%" style="font-size: 100%; font-weight:bold;" border="0" cellpadding="0" cellspacing="0">
		<tbody>

										<tr>
			<td>Total</td>
			<td>&nbsp;</td>
			<td align="right">Rp.<?= number_format($gtotal,0,'.')?></td>
		</tr>
	</tbody></table>
	<hr style="margin-top: 5; color: #000000; margin-bottom: 1;">
	<hr style="margin-top: 1; color: #000000; margin-bottom: 5;">
	<table width="100%" style="font-size: 100%; font-weight:bold;" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr>
			<td width="40%" style="vertical-align: top;">Pembayaran</td>
			<td width="2%" style="vertical-align: top;">:</td>
      <td align="right" style="padding-left: 5px;">
				 Rp.<?= number_format($lap[0]['pjbayar'],0,'.') ?>
       </td>
		</tr>

			<tr>
				<td width="40%" style="vertical-align: top;">Kembalian</td>
				<td width="2%" style="vertical-align: top;">:</td>
				<td align="right" style="padding-left: 5px;">
          Rp.<?= number_format(($lap[0]['pjbayar']-$gtotal),0,'.') ?>
        </td>
			</tr>

			</tbody></table>
      <script type="text/javascript">
          function myFunction() {
              window.print();
          }
          window.onload = myFunction;
      </script>

</div>
