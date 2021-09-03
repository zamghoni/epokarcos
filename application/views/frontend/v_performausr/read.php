<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">

<a href="<?php echo site_url('performausr/laporan'); ?>" title="Laporan"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Laporan <i class="fa fa-plus"></i></button></a> <br><br>

<!--Table-->

<div>
<table class="table table-striped table-bordered mydatatable" style="100%">
<!--<table class="table table-striped table-bordered mydatatable" style="1">-->
<thead>
	<tr>
		<th>No</th>
    <th>Tanggal</th>
		<th>NIP</th>
    <th>Nama</th>
    <th>Bagian</th>
    <th>Line</th>
    <th>Target</th>
    <th>Hasil</th>
    <th>Selisih</th>
    <th>Status</th>
	</tr>
</thead>
<tbody>
	<?php
		$no=1;
		foreach ($read->result_array() as $row) {
		?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['tgl'] ?></td>
    <td><?php echo $row['nip'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td><?php echo $row['kode_bagian'] ?></td>
    <td><?php echo $row['kode_line'] ?></td>
    <td><?php echo $row['target'] ?></td>
    <td><?php echo $row['hasil'] ?></td>
    <td><?php echo $row['selisih'] ?></td>

				<?php
				if($row['kode_status']=='Target')
				{
				?>
				<td style="background-color: lightgreen;"> <?php echo $row['kode_status'] ?></td>

				<?php
				}

				elseif($row['kode_status']=='Tidak Target')
				{
				?>
				<td style="background-color: red;"><?php echo $row['kode_status'] ?></td>

				<?php
				}
				?>

    <!--<td><?php echo $row['kode_status'] ?></td>-->
	</tr>
	<?php
	$no++;
	}
?>
</tbody>
</table>
</div>
<!--EndTable-->
</div>
</section>
