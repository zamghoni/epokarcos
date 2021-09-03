<div class="col-lg-8">
<section class="panel">
<header class="panel-heading">
<div class="panel-actions">
<a href="#" class="fa fa-caret-down"></a>
<a href="#" class="fa fa-times"></a>
</div>
<h2 class="panel-title"><?php echo $sub ?></h2>
</header>
<div class="panel-body">
<!--Form-->
<form method="post" action="<?php echo site_url('line/update/'.$edit['kode_line']) ?>">

  <label>Kode line</label><br>
  <input type="text" name="kode_line" class="form-control" placeholder="Masukan Kode line" value="<?php echo $edit['kode_line'] ?>" required oninvalid="this.setCustomValidity('Kode line Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Nama line</label><br>
  <input type="text" name="nama_line" class="form-control" placeholder="Masukan Nama line" value="<?php echo $edit['nama_line'] ?>" required oninvalid="this.setCustomValidity('Nama Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
  <a href="<?php echo site_url('line') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
</form>
<!--EndForm-->
</div>
</section>
</div>
