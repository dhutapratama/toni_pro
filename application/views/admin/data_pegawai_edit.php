
<!--main content start-->
<section id="main-content">
  <section class="wrapper">

    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> EDIT PEGAWAI</h4>
          <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/pegawai/update');?>">
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nomor_induk" value="<?php echo $get_pegawai->nomor_induk; ?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $get_pegawai->id; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">NAMA</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $get_pegawai->nama; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">JENIS KELAMIN</label>
              <div class="col-sm-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="l" <?php echo ($get_pegawai->jenis_kelamin == 'l'? 'checked':''); ?>>
                    LAKI - LAKI
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="p" <?php echo ($get_pegawai->jenis_kelamin == 'p'? 'checked':''); ?>>
                    PEREMPUAN
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">DIVISI</label>
              <div class="col-sm-10">
                <select class="form-control" name="divisi">
                  
                  <?php
                  foreach ($get_divisis as $key => $value) { 
                    $selected = '';
                    if ($get_pegawai->id_divisi == $value->id) {
                      $selected = ' selected';
                    }
                  ?>

                    <option value="<?php echo $value->id; ?>"<?php echo $selected; ?>><?php echo $value->nama_divisi; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-theme">Simpan</button>
          </form>
        </div>
      </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->