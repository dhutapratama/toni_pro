    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       <div class="row mt">
        <div class="col-lg-12">

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mb">
              <div class="weather-3 pn centered">
                <i class="fa fa-sun-o"></i>
                <h1><?php echo $get_kalori->kalori; ?> KALORI</h1>
                <div class="row" style="display:none;">
                  <h3 class="centered"><a data-toggle="modal" href="pegawai_profil.html#ubahData" class="btn btn-theme03"> UBAH</a></h3>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div aria-hidden="true" aria-labelledby="ubahDataLabel" role="dialog" tabindex="-1" id="ubahData" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">UBAH KALORI</h4>
            </div>

            <div class="modal-body">
              <form class="form-horizontal style-form" method="post" action="<?php echo site_url('pegawai/kalori/update');?>">

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">KALORI ANDA</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="kalori" value="<?php echo $get_kalori->kalori; ?>">
                  </div>
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                  <button class="btn btn-theme" type="submit">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!--/wrapper -->
  </section><!-- /MAIN CONTENT -->