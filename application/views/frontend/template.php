<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>EPOKAR</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap-datepicker/css/datepicker3.css" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/css/bootstrap-editable.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/datatables/css/bootstrap-table.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/font-awesome/css/font-awesome.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/magnific-popup/magnific-popup.css" />

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/select2/select2.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/stylesheets/theme.css" />

  <!-- Skin CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/stylesheets/skins/default.css" />

  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/stylesheets/theme-custom.css">

  <!-- Head Libs -->
  <script src="<?php echo base_url(); ?>assets/frontend/vendor/modernizr/modernizr.js"></script>

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/frontend/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url(); ?>assets/frontend/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/frontend/css/style-responsive.css" rel="stylesheet">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/templatemo-digital-trend.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/owl.carousel.min.css">

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>
  <!-- =======================================================
  Template Name: Dashio
  Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
  Author: TemplateMag.com
  License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?php echo site_url('dashhr'); ?>" class="logo"><b>EP<span>OKAR</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->

          <!--  notification end -->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a href="<?php echo site_url('authhr/logout'); ?>" title="logout"> <button type="button" class="btn btn-danger" >Logout</button> </a>
            </ul>
          </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
          MAIN SIDEBAR MENU
          *********************************************************************************************************************************************************** -->
          <!--sidebar start-->
          <aside>
            <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="<?php echo site_url('dashhr'); ?>"><img src="<?php echo base_url(); ?>assets/frontend/img/cosmo.png" class="img-circle" width="80"></a></p>
                <h5 class="centered">INDOKARYA</h5>

                <li class="nav-item">
                  <a href="<?php echo site_url('dashhr') ?>">
                    <i class="fa fa-home"></i>
                    <span>Beranda</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo site_url('bagianusr') ?>">
                    <i class="fa fa-suitcase"></i>
                    <span>Data Bagian</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo site_url('lineusr') ?>">
                    <i class="fa fa-sitemap"></i>
                    <span>Data Line</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo site_url('operatorusr') ?>">
                    <i class="fa fa-users"></i>
                    <span>Data Karyawan</span>
                  </a>
                </li>

                <!--<li class="nav-item">
                  <a href="<?php echo site_url('target') ?>">
                    <i class="fa fa-line-chart"></i>
                    <span>Data Target</span>
                  </a>
                </li>-->

                <li class="nav-item">
                  <a href="<?php echo site_url('performausr') ?>">
                    <i class="fa fa-book"></i>
                    <span>Data Performa</span>
                  </a>
                </li>


                <li class="nav-item">
                  <a href="<?php echo site_url('authhr/logout') ?>">
                    <i class="fa fa-power-off"></i>
                    <span>Keluar</span>
                  </a>
                </ul>
                <!-- sidebar menu end-->
              </div>
            </aside>
            <!--sidebar end-->
            <!-- **********************************************************************************************************************************************************
              MAIN CONTENT
              *********************************************************************************************************************************************************** -->
              <!--main content start-->
              <section id="main-content">
                <section class="wrapper site-min-height">
                  <h3><i class="fa fa-angle-right"></i> <?php echo $judul ?> </h3>
                  <div class="row mt">
                    <div class="col-lg-12">
                      <p><?php echo $contents ?></p>
                    </div>
                  </div>
                </section>
                <!-- /wrapper -->
              </section>
              <!-- /MAIN CONTENT -->

              <!--main content end-->
              <!--footer start-->
              <footer class="site-footer">
                <div class="text-center">
                  <p>
                    Copyright &copy; 2021 | <strong>PT Cosmoprof Indokarya Pemalang</strong>. All Rights Reserved
                  </p>


                </div>
              </footer>
              <!--footer end-->
            </section>
            <!-- js placed at the end of the document so the pages load faster -->
            <script src="<?php echo base_url(); ?>assets/frontend/lib/jquery/jquery.min.js"></script>
            <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/js/jquery.js"></script>
            <script src="<?php echo base_url(); ?>assets/frontend/lib/bootstrap/js/bootstrap.min.js"></script>
            <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/lib/jquery.dcjqaccordion.2.7.js"></script>
            <script src="<?php echo base_url(); ?>assets/frontend/lib/jquery.scrollTo.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/frontend/lib/jquery.nicescroll.js" type="text/javascript"></script>
            <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/js/jquery.dataTables.js"></script>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/js/DT_bootstrap.js"></script>
            <!--common script for all pages-->
            <script src="<?php echo base_url(); ?>assets/frontend/lib/common-scripts.js"></script>
            <!--script for this page-->
            <script type="text/javascript">
              /* Formating function for row details */
              function fnFormatDetails(oTable, nTr) {
                var aData = oTable.fnGetData(nTr);
                var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
                  sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
                  sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
                  sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
                  sOut += '</table>';

                  return sOut;
                }

                $(document).ready(function() {
                  /*
                  * Insert a 'details' column to the table
                  */
                  var nCloneTh = document.createElement('th');
                  var nCloneTd = document.createElement('td');
                  nCloneTd.innerHTML = '<img src="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/images/details_open.png">';
                  nCloneTd.className = "center";

                  $('#hidden-table-info thead tr').each(function() {
                    this.insertBefore(nCloneTh, this.childNodes[0]);
                  });

                  $('#hidden-table-info tbody tr').each(function() {
                    this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
                  });

                  /*
                  * Initialse DataTables, with no sorting on the 'details' column
                  */
                  var oTable = $('#hidden-table-info').dataTable({
                    "aoColumnDefs": [{
                      "bSortable": false,
                      "aTargets": [0]
                    }],
                    "aaSorting": [
                    [1, 'asc']
                    ]
                  });

                  /* Add event listener for opening and closing details
                  * Note that the indicator for showing which row is open is not controlled by DataTables,
                  * rather it is done here
                  */
                  $('#hidden-table-info tbody td img').live('click', function() {
                    var nTr = $(this).parents('tr')[0];
                    if (oTable.fnIsOpen(nTr)) {
                      /* This row is already open - close it */
                      this.src="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/media/images/details_open.png";
                      oTable.fnClose(nTr);
                    } else {
                      /* Open this row */
                      this.src="<?php echo base_url(); ?>assets/frontend/lib/advanced-datatable/images/details_close.png";
                      oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
                    }
                  });
                });
              </script>

              <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
              <script>
                $(document).ready(function()
                {
                  $('.datepicker').datepicker(
                  {
                    format: 'yyyy-mm-dd',
                    autoclose: true,
                    todayHighlight: true,
                  }
                  );
                }
                );
              </script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/datatables.min.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/dataTables.bootstrap4.min.js"></script>

              <script>
                $('.mydatatable').DataTable({
                  initComplete: function () {
                    this.api().columns().every(function () {
                      var column = this;
                      var select = $('<select><option value=""></option></select>')
                      .appendTo( $(column.header()).empty() )
                      .on( 'change', function () {
                        var val=$.fn.dataTable.util.escapeRegex(
                        $(this).val()
                        );

                        column
                        .search( val ? '^'+val+'$' : '', true, false)
                        .draw();
                      });
                      column.data().unique().sort().each( function ( d, j ) {
                        select.append('<option value="'+d+'">'+d+'</option>')
                      });
                    });
                  }
                });
              </script>

              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/tableExport.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/data-table-active.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table-editable.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-editable.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table-resizable.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/colResizable-1.5.source.js"></script>
              <script src="<?php echo base_url(); ?>assets/frontend/datatables/js/bootstrap-table-export.js"></script>

              <script src="<?php echo base_url(); ?>assets/landing/js/aos.js"></script>
              <script src="<?php echo base_url(); ?>assets/landing/js/owl.carousel.min.js"></script>
              <script src="<?php echo base_url(); ?>assets/landing/js/smoothscroll.js"></script>
              <script src="<?php echo base_url(); ?>assets/landing/js/custom.js"></script>

            </body>

            </html>
