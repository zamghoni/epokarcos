<div class="col-lg-12">
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
  <form method="post" action="<?php echo site_url('user/save') ?>">

  <label>ID User</label><br>
  <input type="text" name="id_user" class="form-control" placeholder="Masukan ID User" value="" required oninvalid="this.setCustomValidity('ID Harus Di Isi')" oninput="setCustomValidity('')"><p></p>

  <label>Sandi</label><br>
  <input type="text" name="sandi_user" class="form-control" placeholder="Masukan Sandi User" value="" required oninvalid="this.setCustomValidity('Sandi Harus Di Isi')" oninput="setCustomValidity('')"><p></p>


  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Simpan</button>
  <a href="<?php echo site_url('user') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

</form>
<!--EndForm-->
</div>
</section>
</div>
