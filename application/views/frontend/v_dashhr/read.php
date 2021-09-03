<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

<section class="hero hero-bg d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
        <div class="hero-text">
          <h1 class="text-white" data-aos="fade-up">Selamat datang di, <br> <strong> EPOKAR</strong> </h1>
          <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"> Jika ada kendala silahkan hubungi,<br> <i class="fa fa-phone mr-2"></i> Fajar / 0838-6181-4212</strong>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
          <img src="<?php echo base_url(); ?>assets/landing/images/cosmo.png" class="img-fluid" alt="working girl">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about section-padding pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto col-md-10 col-12">
        <div class="about-info">
          <h2 class="mb-4" data-aos="fade-up"> <strong>Statistik Evaluasi Produktivitas Karyawan
            <?php if ($this->input->post('bagian')){
              echo "pada Bagian " . $this->input->post('bagian');
            } else {
              echo "Seluruh Bagian";
            } ?>
          </h2>
            <?php  $attributes = array('onsubmit' => 'return tambah(this)');
              echo form_open_multipart('dashhr/process',$attributes);?>
            <div class="row" data-aos="fade-up">
              <div class="col-6">
                <div class="form-group">
                  <p> Pilih Bagian</p>
                  <select class="form-control" id="bagian" name="bagian">
                    <option value=""> - Pilih - </option>
                    <?php foreach ($bagian as $row) { ?>
                      <option value="<?=$row->kode_bagian?>" <?=$row->kode_bagian == $this->input->post('bagian') ? 'selected' : null?>><?=$row->nama_bagian?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <p>Proses </p>
                <button type="submit" name="reset" class="btn btn-default"><i class="fas fa-redo-alt"></i> Reset</button>
                <button type="submit" name="filter" title="Filter Data" class="btn btn-primary"><i class="fas fa-fw fa-filter"></i> Filter</button>
              </div>
            </div>
            <hr data-aos="fade-up">
            <figure class="highcharts-figure">
              <div id="statistik" data-aos="fade-up"></div>
              <p class="highcharts-description" data-aos="fade-up">
                Statistik Karyawan Target dan Tidak Target <?php if ($this->input->post('bagian')){
                  echo "pada Bagian " . $this->input->post('bagian');
                } else {
                  echo "Seluruh Bagian";
                } ?> <br>
                Jumlah Karyawan Target = <?=$target->num_rows()?> Orang<br>
                Jumlah Karyawan Tidak Target = <?=$tdktarget->num_rows()?> Orang
              </p>
            </figure>
            <?php echo form_close(); ?>
            <script>
            Highcharts.chart('statistik', {
              chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
              },
              title: {
                text: 'Statistik Evaluasi Produktivitas Karyawan'
              },
              tooltip: {
                formatter: function () {
                  return '<b>' + this.point.name + '</b><br/>' +
                  this.point.y + ' ' + this.series.name;
                }
              },
              plotOptions: {
                pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y} : {series.name}'
                  }
                }
              },
              series: [{
                name: 'Orang',
                colorByPoint: true,
                data: [{
                  name: 'Target',
                  y: <?=$target->num_rows()?>,
                }, {
                  name: 'Tidak Target',
                  y: <?=$tdktarget->num_rows()?>,
                }]
              }]
            });

          </script>
          <div class="about-image" data-aos="fade-up" data-aos-delay="200">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ABOUT -->
  <section class="about section-padding pb-0" id="about">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 mx-auto col-md-10 col-12">
          <div class="about-info">

            <h2 class="mb-4" data-aos="fade-up"> <strong>Sistem Informasi Evaluasi Produktivitas Karyawan <br> </strong> (EPOKAR)</h2>

            <p class="mb-0" data-aos="fade-up">Merupakan sebuah sistem informasi yang ditujukan untuk efisiensi manajemen data performa dan evaluasi operator.
              <br><br>Dimana sistem manajamen data menjadi terpusat sehingga <strong>mempermudah</strong> <br> bagian-bagian terkait dalam melengkapi kebutuhan data maupun pengolahan data.</p>
            </div>

            <div class="about-image" data-aos="fade-up" data-aos-delay="200">

              <img src="<?php echo base_url(); ?>assets/landing/images/office.png" class="img-fluid" alt="office">
            </div>
          </div>

        </div>
      </div>
    </section>
