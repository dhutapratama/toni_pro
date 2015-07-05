
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> MAKANAN LAUK PAUK
              <a data-toggle="modal" href="pegawai_profil.html#tambah" class="btn btn-theme03 add-btn"> TAMBAH</a></h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NAMA MAKANAN LAUK PAUK</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($get_makanan_lauk_pauks as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nama_makanan; ?></td>
                    <td>
                      <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                      <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

              <div aria-hidden="true" aria-labelledby="tambahLabel" role="dialog" tabindex="-1" id="tambah" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">TAMBAH LAUK PAUK</h4>
                    </div>

                    <div class="modal-body">
                      <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/makanan/lauk_pauk/insert');?>">

                        <div class="form-group">
                          <label class="col-sm-3 col-sm-3 control-label">NAMA LAUK PAUK</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_makanan">
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
        </div>
      </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->