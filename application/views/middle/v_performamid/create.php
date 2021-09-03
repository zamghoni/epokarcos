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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <?php echo form_open_multipart('performamid/save'); ?>

      <label>Tanggal</label>
      <input name="tgl" id="tanggal" class="form-control" type="text" autocomplete="off" value="<?=date('Y-m-d')?>" readonly><p></p>

      <label>NIP</label><br>
      <select class="form-control select2" id="nip" name="nip" required oninvalid="this.setCustomValidity('NIP Operator Harus Di Isi')" oninput="setCustomValidity('')">
        <option value="">Pilih NIP Karyawan</option>
        <?php foreach ($operator as $key) { ?>
          <option value="<?=$key->nip?>" required><?=$key->nip.' - '.$key->nama?></option>
        <?php } ?>
      </select>
      <p></p>

      <div id="detail_operator">
      <label>Nama Operator</label><br>
        <input class="form-control" type="text" name="nama" readonly><p></p>

      <label>Bagian</label><br>
        <input class="form-control" type="text" name="kode_bagian" readonly><p></p>

      <label>Line</label><br>
        <input class="form-control" type="text" name="kode_line" readonly><p></p>
      </div>

      <script type="text/javascript">
        $(document).ready(function(){
          $('#nip').change(function(){
            var nip=$(this).val();
            $.ajax({
              url : "<?php echo site_url('Performamid/get_nip');?>",
              method : "POST",
              data : {nip: nip},
              async : true,
              dataType : 'json',
              success: function(data){
                var ViewNip = $('#detail_operator'); // its just for caching
                ViewNip.find('input[name=nama]').val(data.nama);
                ViewNip.find('input[name=kode_bagian]').val(data.kode_bagian);
                ViewNip.find('input[name=kode_line]').val(data.kode_line);
              }
            });
            return false;
          });

        });
      </script>

    <label>Target</label><br>
    <input type="text" name="target" class="form-control" placeholder="Masukan Target" value="" required oninvalid="this.setCustomValidity('Target Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

    <label>Hasil</label><br>
    <input type="text" name="hasil" class="form-control" placeholder="Masukan Hasil" value="" required oninvalid="this.setCustomValidity('Hasil Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

    <label>Selisih</label><br>
    <input type="text" name="selisih" class="form-control" placeholder="Masukan Selisih" value="" required oninvalid="this.setCustomValidity('Selisih Harus Di Isi')" oninput="setCustomValidity('')" autocomplete="off"><p></p>

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
    <a href="<?php echo site_url('performamid') ?>" title="Kembali"><button class="mb-xs mt-xs mr-xs btn btn-default" type="button">Batal</button></a>

    <!-- </form>
    <?php echo form_close(); ?> -->
    <!--EndForm-->
  </div>
</section>
</div>
