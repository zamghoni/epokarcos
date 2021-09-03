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
<form method="post" action="<?php echo site_url('user/update/'.$edit['kode_user']) ?>">

  <label>Kode user</label><br>
  <input type="text" name="kode_user" class="form-control" placeholder="Masukan Kode user" value="<?php echo $edit['kode_user'] ?>" required oninvalid="this.setCustomValidity('Kode user Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Nama user</label><br>
  <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama user" value="<?php echo $edit['nama_user'] ?>" required oninvalid="this.setCustomValidity('Sandi Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Perbaharui</button>
  <a href="<?php echo site_url('user') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>
</form>
<!--EndForm-->
</div>
</section>
</div>
