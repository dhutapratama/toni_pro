<!--main content start-->
<section id="main-content">
  <section class="wrapper site-min-height">
    <div class="row mt">
      <div class="col-lg-12">
        <div class="content-panel">
          <h4><i class="fa fa-angle-right"></i> DATA PEGAWAI
          <a data-toggle="modal" href="pegawai_profil.html#tambah" class="btn btn-theme03 add-btn"> TAMBAH</a></h4>
          <hr>
          <table class="table">
            <thead>
              <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>DIVISI</th>
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
                <td>
                  <a href="<?php echo site_url('admin/divisi/edit/'.$value->id); ?>" class="btn btn-primary btn-xs fa fa-pencil"></a>
                  <a href="<?php echo site_url('admin/divisi/delete/'.$value->id); ?>" class="btn btn-danger btn-xs fa fa-trash-o"></a>
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
                  <h4 class="modal-title">TAMBAH PEGAWAI</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/pegawai/insert');?>">
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">NIK</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nomor_induk">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">NAMA</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">JENIS KELAMIN</label>
                      <div class="col-sm-9">
                        <div class="radio">
                          <label>
                            <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="l">
                            LAKI - LAKI
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="p">
                            PEREMPUAN
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">DIVISI</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="divisi">
                          
                          <?php
                          foreach ($get_divisis as $key => $value) { ?>
                            <option value="<?php echo $value->id; ?>"><?php echo $value->nama_divisi; ?></option>
                          <?php } ?>
                        </select>
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
    <!--main content end-->