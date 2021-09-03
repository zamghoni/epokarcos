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
  <form method="post" action="<?php echo site_url('performausr/save') ?>">

  <label>Tanggal</label>
  <input name="tgl" id="tanggal" class="form-control datepicker" type="text" autocomplete="off">

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

  <label>Target</label><br>
  <input type="text" name="target" class="form-control" placeholder="Masukan Target" value="" required oninvalid="this.setCustomValidity('NIK KTP Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Hasil</label><br>
  <input type="text" name="hasil" class="form-control" placeholder="Masukan Hasil" value="" required oninvalid="this.setCustomValidity('No Telepon Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Selisih</label><br>
  <input type="text" name="selisih" class="form-control" placeholder="Masukan Selisih" value="" required oninvalid="this.setCustomValidity('Pendidikan Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

  <label>Status</label><br>
  <select name="kode_status" class="form-control" required>
    <option value=0 selected>- Pilih Status -</option>
    <?php
    foreach ($status->result_array() as $r)
    {
    ?>
    <option value="<?php echo $r['nama_status'] ?>"><?php echo $r['nama_status']; ?></option>
    <?php } ?>
  </select><p></p>

  <button class="mb-xs mt-xs mr-xs btn btn-primary" type="submit" >Simpan</button>
  <a href="<?php echo site_url('performausr') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

</form>
<!--EndForm-->
</div>
</section>
</div>
