<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
<a href="<?php echo site_url('target/create'); ?>" title="Tambah Data"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah <i class="fa fa-plus"></i></button> </a>
<!--Table-->
<div id="toolbar">
	<a href="" title="Cetak"> <button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Ganti</button> </a>
</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
	<tr>
		<th>No</th>
		<th>Kode Bagian</th>
    <th>Kode Line</th>
    <th>Target</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php
		$no=1;
		foreach ($read->result_array() as $row)
    {
		?>
	<tr class="gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $row['kode_bagian'] ?></td>
    <td><?php echo $row['kode_line'] ?></td>
    <td><?php echo $row['target'] ?></td>
		<td>
			<a href="<?php echo site_url('target/edit/'.$row['id_target']) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
			<a href="<?php echo site_url('target/delete/'.$row['id_target']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['id_target'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
		</td>
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
