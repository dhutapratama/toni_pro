    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       <h3><i class="fa fa-angle-right"></i>MENU MAKANAN</h3>
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
              if ($counter_menu == 1) {
               ?>

                <div class="col-lg-4 col-md-4 col-sm-4 mb">
                  <div class="steps pn">
                    <button>MENU SEHAT ANDA MASIH KOSONG</button>
                  </div>
                </div>
              <?php } ?>
          </div>  
        </div>

    </section><!--/wrapper -->
  </section><!-- /MAIN CONTENT -->
