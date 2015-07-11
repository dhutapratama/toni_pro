      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
         <h3><i class="fa fa-angle-right"></i> MENU MAKANAN : <?php echo $get_pegawai->nama; ?></h3>
         <p>Menu makanan di tentukan oleh kebutuhan kalori harian anda.</p>

         <div class="row mt">
          <div class="col-lg-12">
            <?php
              $counter = 0;
              $counter_menu = 1;
              foreach ($get_menu as $key => $value) {
                if ($counter == 0) {
                  echo '<div class="row">';
                }
                $makanan_pokok     = unserialize($value->id_makanan_pokok);
                $makanan_lauk_pauk = unserialize($value->id_makanan_lauk_pauk);
                $makanan_sayur     = unserialize($value->id_makanan_sayur);
                $makanan_buah      = unserialize($value->id_makanan_buah);
                $makanan_minuman   = unserialize($value->id_minuman);

                (!is_array($makanan_pokok) ? $makanan_pokok = array() : true);
                (!is_array($makanan_lauk_pauk) ? $makanan_lauk_pauk = array() : true);
                (!is_array($makanan_sayur) ? $makanan_sayur = array() : true);
                (!is_array($makanan_buah) ? $makanan_buah = array() : true);
                (!is_array($makanan_minuman) ? $makanan_minuman = array() : true);
            ?>
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <input type='submit' value='Menu <?php echo $counter_menu; ?>' id='submit' />
                  <p align="center"><a href="<?php echo site_url('admin/menu/change/'.$value->id); ?>">UBAH</a> | <a href="<?php echo site_url('admin/menu/delete/'.$value->id); ?>">HAPUS</a></p>
<?php foreach ($makanan_pokok as $key => $value) { ?>
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'><?php echo $this->m_makanan_pokok->get_makanan_pokok_by_id($value)->nama_makanan;?></label>
<?php }
                  foreach ($makanan_lauk_pauk as $key => $value) { ?>
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'><?php echo $this->m_makanan_lauk_pauk->get_makanan_lauk_pauk_by_id($value)->nama_makanan;?></label>
<?php }
                  foreach ($makanan_sayur as $key => $value) { ?>
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'><?php echo $this->m_makanan_sayur->get_makanan_sayur_by_id($value)->nama_makanan;?></label>
<?php } 
                  foreach ($makanan_buah as $key => $value) { ?>
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'><?php echo $this->m_makanan_buah->get_makanan_buah_by_id($value)->nama_makanan;?></label>
<?php } 
                  foreach ($makanan_minuman as $key => $value) { ?>
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'><?php echo $this->m_makanan_minuman->get_makanan_minuman_by_id($value)->nama_makanan;?></label>
                  <?php } ?>
                </div>
              </div>
              
            <?php
            $counter++;
            $counter_menu ++;
            if ($counter == 3) {
              echo '</div>';
              $counter = 0;
            } }
            if ($counter == 0) {
              echo '<div class="row">';
            }
             ?>

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <button data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> TAMBAH</button>
                </div>
              </div>
            <?php {
              echo '</div>';
            } ?>
            </div>

            <div aria-hidden="true" aria-labelledby="tambahLabel" role="dialog" tabindex="-1" id="tambah" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">TAMBAH MENU MAKANAN</h4>
                  </div>

                  <div class="modal-body">
                    <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/menu/insert/'.$get_pegawai->id); ?>">

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">MAKANAN POKOK</label>
                        <div class="col-sm-9">
                          <?php foreach ($get_makanan_pokok as $key => $value) {?>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="makanan_pokok[]" value="<?php echo $value->id; ?>">
                              <?php echo $value->nama_makanan; ?>
                            </label>
                          </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">LAUK PAUK</label>
                        <div class="col-sm-9">
                          <?php foreach ($get_makanan_lauk_pauk as $key => $value) {?>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="makanan_lauk_pauk[]" value="<?php echo $value->id; ?>">
                              <?php echo $value->nama_makanan; ?>
                            </label>
                          </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">SAYUR</label>
                        <div class="col-sm-9">
                          <?php foreach ($get_makanan_sayur as $key => $value) {?>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="makanan_sayur[]" value="<?php echo $value->id; ?>">
                              <?php echo $value->nama_makanan; ?>
                            </label>
                          </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">BUAH</label>
                        <div class="col-sm-9">
                          <?php foreach ($get_makanan_buah as $key => $value) {?>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="makanan_buah[]" value="<?php echo $value->id; ?>">
                              <?php echo $value->nama_makanan; ?>
                            </label>
                          </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">MINUMAN</label>
                        <div class="col-sm-9">
                          <?php foreach ($get_makanan_minuman as $key => $value) {?>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="makanan_minuman[]" value="<?php echo $value->id; ?>">
                              <?php echo $value->nama_makanan; ?>
                            </label>
                          </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                        <button class="btn btn-theme" type="submit">Tambahkan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->