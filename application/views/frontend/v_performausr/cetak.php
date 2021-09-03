<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title">PT COSMOPROF INDOKARYA <br><br><?php echo $sub ?></h2>
</header>
<div class="panel-body">

<!--Table-->
<div id="toolbar">
	<a href="" title="Cetak"> <button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Ganti</button> </a><br>
</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
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
		foreach ($datafilter as $row) {
		?>
	<tr class="gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $row['tgl'] ?></td>
    <td><?php echo $row['nip'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td><?php echo $row['kode_bagian'] ?></td>
    <td><?php echo $row['kode_line'] ?></td>
    <td><?php echo $row['target'] ?></td>
    <td><?php echo $row['hasil'] ?></td>
    <td><?php echo $row['selisih'] ?></td>
    <td><?php echo $row['kode_status'] ?></td>
		
	</tr>
	<?php
	$no++;
	}
?>
</tbody>
</table>
<!--EndTable-->
</div>
</section>
