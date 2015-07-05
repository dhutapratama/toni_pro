    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> MENU MAKANAN SEMUA PEGAWAI </h4>
            <hr>
            <table class="table">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>NAMA</th>
                  <th>DIVISI</th>
                  <th>VARIAN MENU</th>
                  <th>OPSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach ($get_pegawais as $key => $value) { ?>
                <tr>
                  <td><?php echo $value->nomor_induk; ?></td>
                  <td><?php echo $value->nama; ?></td>
                  <td><?php echo $this->m_divisi->get_divisi_by_id($value->id_divisi)->nama_divisi; ?></td>
                  <td><?php echo $this->m_menu_makanan->count_menu_makanan_by_id_pegawai($value->id); ?></td>
                  <td>
                    <a href="<?php echo site_url('admin/menu/edit/'.$value->id);?>" class="btn btn-primary btn-xs fa fa-pencil"></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section><!--/wrapper -->
  </section><!--/MAIN CONTENT -->