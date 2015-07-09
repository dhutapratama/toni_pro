    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       <div class="row mt">
        <div class="col-lg-6">
          <h4 class="mb"><i class="fa fa-angle-right"></i> PROFIL PEGAWAI</h4>
          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">NOMOR INDUK PEGAWAI</p>
            <span><?php echo $get_pegawai->nomor_induk; ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">NAMA</p>
            <span><?php echo $get_pegawai->nama; ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">JENIS KELAMIN</p>
            <span><?php echo ($get_pegawai->jenis_kelamin == 'l' ? 'LAKI - LAKI' : 'PEREMPUAN'); ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">BERAT BADAN (KG)</p>
            <span><?php echo ($get_pegawai->berat_badan == '' ? '0' : $get_pegawai->berat_badan); ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">TINGGI BADAN (CM)</p>
            <span><?php echo ($get_pegawai->tinggi_badan == '' ? '0' : $get_pegawai->berat_badan); ?></span>
          </div>

          <div class="form-group">
            <div class="col-lg-3 col-sm-3 mt">
              <a data-toggle="modal" href="pegawai_profil.html#ubahData" class="btn btn-theme03"> UBAH</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <h4 class="mb">&nbsp;</h4>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">UMUR (TAHUN)</p>
            <span><?php echo ($get_pegawai->umur == '' ? '0' : $get_pegawai->umur); ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">DIVISI</p>
            <span><?php echo $this->m_divisi->get_divisi_by_id($get_pegawai->id_divisi)->nama_divisi; ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">USERNAME</p>
            <span><?php echo $get_pegawai->username; ?></span>
          </div>

          <div class="col-lg-10 mt">
            <p style="font-weight:bold;">EMAIL</p>
            <span><?php echo $get_pegawai->email; ?></span>
          </div>
        </div>
      </div>

      <div aria-hidden="true" aria-labelledby="ubahDataLabel" role="dialog" tabindex="-1" id="ubahData" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">UBAH DATA ANDA</h4>
            </div>

            <div class="modal-body">
              <form class="form-horizontal style-form" method="post" action="<?php echo site_url('pegawai/profil/update');?>">

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">BERAT BADAN</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="berat_badan" value="<?php echo $get_pegawai->berat_badan; ?>">
                    <input type="hidden" name="id" value="<?php echo $get_pegawai->id; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">TINGGI BADAN</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="tinggi_badan" value="<?php echo $get_pegawai->tinggi_badan; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">UMUR</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="umur" value="<?php echo $get_pegawai->umur; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">USERNAME</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="username" value="<?php echo $get_pegawai->username; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">PASSWORD</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">EMAIL</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" value="<?php echo $get_pegawai->email; ?>">
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