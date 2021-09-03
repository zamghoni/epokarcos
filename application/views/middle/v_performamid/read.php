<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
<a href="<?php echo site_url('performamid/create'); ?>" title="Laporan"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah <i class="fa fa-plus"></i></button></a> <br>


<form method="POST" action="<?= site_url('performamid/excel') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <label class="col-form-label text-md-left">Import Data Performa</label>
                                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>

                                            <div class="mt-1">
                                                <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                                            </div>

                                            <?php form_error('file','<div class="text-danger">','</div>')  ?>
                                            <button type="submit" name="" class="btn btn-primary"><i class="fas fa-upload mr-1"></i>Upload</button><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

<!--Table-->
<div class="table-responsive">
<table class="table table-striped table-bordered mydatatable" width="100%">
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
		<th>Aksi</th>
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
    <td><?php echo $row['kode_status'] ?></td>
		<td>
			<a href="<?php echo site_url('performamid/edit/'.$row['kode_performa']) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
			<a href="<?php echo site_url('performamid/delete/'.$row['kode_performa']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['kode_performa'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>

		</td>
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
