<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
<a href="<?php echo site_url('operatorusr/create'); ?>" title="Tambah Data"> <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Tambah <i class="fa fa-plus"></i></button> </a>

<form method="POST" action="<?= site_url('operatorusr/excel') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                        <label class="col-form-label text-md-left">Import Data Operator</label>
                                            <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                                            <div class="mt-1">
                                                <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                                            </div>
																						<button type="submit" name="" class="btn btn-primary"><i class="fas fa-upload mr-1"></i>Upload</button>
                                            <?php form_error('file','<div class="text-danger">','</div>')  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

<!--Table-->
<div id="toolbar">
</div>
<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
	<tr>
		<th>No</th>
		<th>NIP</th>
    <th>Nama</th>
    <th>Bagian</th>
    <th>Line</th>
		<th>NIK KTP</th>
    <th>Telepon</th>
    <th>Pendidikan</th>
    <th>Alamat</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php
		$no=1;
		foreach ($read->result_array() as $row) {
		?>
	<tr class="gradeX">
		<td><?php echo $no; ?></td>
		<td><?php echo $row['nip'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td><?php echo $row['kode_bagian'] ?></td>
    <td><?php echo $row['kode_line'] ?></td>
		<td><?php echo $row['nik'] ?></td>
    <td><?php echo $row['telepon'] ?></td>
    <td><?php echo $row['pendidikan'] ?></td>
    <td><?php echo $row['alamat'] ?></td>
		<td>
			<a href="<?php echo site_url('operatorusr/edit/'.$row['nip']) ?>" title="Ubah Data" class="mb-xs mt-xs mr-xs btn btn-xs btn-info"><i class="fa fa-pencil" ></i></a>
			<a href="<?php echo site_url('operatorusr/delete/'.$row['nip']) ?>" title="Hapus data" onclick="javascript: return confirm('Yakin Mau dihapus <?php echo $row['nip'];?>')" class="mb-xs mt-xs mr-xs btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
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
