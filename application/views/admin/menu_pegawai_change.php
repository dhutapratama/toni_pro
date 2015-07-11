
<!--main content start-->
<section id="main-content">
  <section class="wrapper">

    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> EDIT MENU MAKANAN PEGAWAI : <?php echo $this->m_pegawai->get_pegawai_by_id($menu_makanan->id_user)->nama; ?></h4>
          <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/menu/change/'.$menu_makanan->id);?>">
            <div class="form-group">
              <label class="col-sm-3 col-sm-3 control-label">MAKANAN POKOK</label>
                <div class="col-sm-9">
                  <input type="hidden" name="id" value="<?php echo $menu_makanan->id; ?>">
                  
                  <?php foreach ($get_makanan_pokok as $key => $value) {
                    $checked = '';
                    $choosen = unserialize($menu_makanan->id_makanan_pokok);
                    
                    if ($choosen == '') {
                      $choosen = array();
                    }

                    foreach ($choosen as $key_2 => $value_2) {
                     if ($value->id == $value_2) {
                       $checked = ' checked';
                     }
                    }
                    ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="makanan_pokok[]" value="<?php echo $value->id; ?>"<?php echo $checked; ?>>
                      <?php echo $value->nama_makanan; ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 col-sm-3 control-label">LAUK PAUK</label>
                <div class="col-sm-9">
                  <?php foreach ($get_makanan_lauk_pauk as $key => $value) {
                    $checked = '';
                    $choosen = unserialize($menu_makanan->id_makanan_lauk_pauk);
                    
                    if ($choosen == '') {
                      $choosen = array();
                    }

                    foreach ($choosen as $key_2 => $value_2) {
                     if ($value->id == $value_2) {
                       $checked = ' checked';
                     }
                    }
                  ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="makanan_lauk_pauk[]" value="<?php echo $value->id; ?>"<?php echo $checked; ?>>
                      <?php echo $value->nama_makanan; ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 col-sm-3 control-label">SAYUR</label>
                <div class="col-sm-9">
                  <?php foreach ($get_makanan_sayur as $key => $value) {
                    $checked = '';
                    $choosen = unserialize($menu_makanan->id_makanan_sayur);
                    
                    if ($choosen == '') {
                      $choosen = array();
                    }

                    foreach ($choosen as $key_2 => $value_2) {
                     if ($value->id == $value_2) {
                       $checked = ' checked';
                     }
                    }
                    ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="makanan_sayur[]" value="<?php echo $value->id; ?>"<?php echo $checked; ?>>
                      <?php echo $value->nama_makanan; ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 col-sm-3 control-label">BUAH</label>
                <div class="col-sm-9">
                  <?php foreach ($get_makanan_buah as $key => $value) {
                    $checked = '';
                    $choosen = unserialize($menu_makanan->id_makanan_buah);
                    
                    if ($choosen == '') {
                      $choosen = array();
                    }

                    foreach ($choosen as $key_2 => $value_2) {
                     if ($value->id == $value_2) {
                       $checked = ' checked';
                     }
                    }
                    ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="makanan_buah[]" value="<?php echo $value->id; ?>"<?php echo $checked; ?>>
                      <?php echo $value->nama_makanan; ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-3 col-sm-3 control-label">MINUMAN</label>
                <div class="col-sm-9">
                  <?php foreach ($get_makanan_minuman as $key => $value) {
                    $checked = '';
                    $choosen = unserialize($menu_makanan->id_minuman);
                    
                    if ($choosen == '') {
                      $choosen = array();
                    }

                    foreach ($choosen as $key_2 => $value_2) {
                     if ($value->id == $value_2) {
                       $checked = ' checked';
                     }
                    }
                    ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="makanan_minuman[]" value="<?php echo $value->id; ?>"<?php echo $checked; ?>>
                      <?php echo $value->nama_makanan; ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>
            <button type="submit" class="btn btn-theme">Simpan</button>
          </form>
        </div>
      </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->