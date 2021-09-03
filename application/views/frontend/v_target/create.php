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
  <form method="post" action="<?php echo site_url('target/save') ?>">

  <label>Bagian</label><br>
  <input type="text" name="kode_bagian" class="form-control" placeholder="Masukan Bagian" value="" required oninvalid="this.setCustomValidity('Bagian Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Line</label><br>
  <input type="text" name="kode_line" class="form-control" placeholder="Masukan Line" value="" required oninvalid="this.setCustomValidity('Line Harus Di Isi')" oninput="setCustomValidity('')"autocomplete="off"><p></p>

  <label>Target</label><br>
  <input type="text" name="target" class="form-control" placeholder="Masukan Target" value="" required oninvalid="this.setCustomValidity('Target Harus Di Isi')" oninput="setCustomValidity('')"autocomplete="off"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Simpan</button>
  <a href="<?php echo site_url('target') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

</form>
<!--EndForm-->
</div>
</section>
</div>
