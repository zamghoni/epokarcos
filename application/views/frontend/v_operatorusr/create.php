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
  <form method="post" action="<?php echo site_url('operatorusr/save') ?>">

  <label>NIP</label><br>
  <input type="text" name="nip" class="form-control" placeholder="Masukan NIP Operator" value="" required oninvalid="this.setCustomValidity('NIP Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Nama Operator</label><br>
  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="" required oninvalid="this.setCustomValidity('Nama Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Bagian</label><br>
  <select name="kode_bagian" class="form-control" required>
    <option value=0 selected>- Pilih Bagian -</option>
    <?php
    foreach ($bagian->result_array() as $r)
    {
    ?>
    <option value="<?php echo $r['nama_bagian'] ?>"><?php echo $r['nama_bagian']; ?></option>
    <?php } ?>
  </select><p></p>

  <label>Line</label><br>
  <select name="kode_line" class="form-control" required>
    <option value=0 selected>- Pilih Line -</option>
    <?php
    foreach ($line->result_array() as $r)
    {
    ?>
    <option value="<?php echo $r['nama_line'] ?>"><?php echo $r['nama_line']; ?></option>
    <?php } ?>
  </select><p></p>

  <label>NIK KTP</label><br>
  <input type="text" name="nik" class="form-control" placeholder="Masukan NIK KTP" value="" required oninvalid="this.setCustomValidity('NIK KTP Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Telepon</label><br>
  <input type="text" name="telepon" class="form-control" placeholder="Masukan No Telepon" value="" required oninvalid="this.setCustomValidity('No Telepon Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Pendidikan</label><br>
  <input type="text" name="pendidikan" class="form-control" placeholder="Masukan Pendidikan" value="" required oninvalid="this.setCustomValidity('Pendidikan Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Alamat</label><br>
  <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="" required oninvalid="this.setCustomValidity('Alamat Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Simpan</button>
  <a href="<?php echo site_url('operatorusr') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

</form>
<!--EndForm-->
</div>
</section>
</div>
