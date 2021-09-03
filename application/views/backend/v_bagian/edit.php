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
<form method="post" action="<?php echo site_url('bagian/update/'.$edit['kode_bagian']) ?>">

  <label>Kode Bagian</label><br>
  <input type="text" name="kode_bagian" class="form-control" placeholder="Masukan Kode Bagian" value="<?php echo $edit['kode_bagian'] ?>" required oninvalid="this.setCustomValidity('Kode Bagian Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Nama Bagian</label><br>
  <input type="text" name="nama_bagian" class="form-control" placeholder="Masukan Nama Bagian" value="<?php echo $edit['nama_bagian'] ?>" required oninvalid="this.setCustomValidity('Sandi Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
  <a href="<?php echo site_url('bagian') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
</form>
<!--EndForm-->
</div>
</section>
</div>
