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
              <tr>
                <td>000001</td>
                <td>User Satu</td>
                <td>IT</td>
                <td>
                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                </td>
              </tr>
              <tr>
                <td>000002</td>
                <td>User Dua</td>
                <td>HRD</td>
                <td>
                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                </td>
              </tr>
              <tr>
                <td>000003</td>
                <td>User Tiga</td>
                <td>HEAD OPERATIONAL</td>
                <td>
                  <button class="btn btn-primary btn-xs fa fa-pencil"></button>
                  <button class="btn btn-danger btn-xs fa fa-trash-o"></button>
                </td>
              </tr>
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
                  <form class="form-horizontal style-form" method="get">
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">NIK</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">NAMA</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">JENIS KELAMIN</label>
                      <div class="col-sm-9">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            LAKI - LAKI
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            PEREMPUAN
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 col-sm-3 control-label">DIVISI</label>
                      <div class="col-sm-9">
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                      <button class="btn btn-theme" type="button">Tambahkan</button>
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