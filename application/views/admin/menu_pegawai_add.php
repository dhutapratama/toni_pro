      <!--main content start-->
      <section id="main-content">
        <section class="wrapper site-min-height">
         <h3><i class="fa fa-angle-right"></i> MENU MAKANAN : <?php echo $get_pegawai->nama; ?></h3>
         <p>Menu makanan di tentukan oleh kebutuhan kalori harian anda.</p>

         <div class="row mt">
          <div class="col-lg-12">
            <!-- 2ND ROW OF PANELS -->
            <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <input type='submit' value='Menu 1' id='submit' />
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'>Nasi Putih</label>
                  <input id='op2' name='op2' type='checkbox' checked disabled />
                  <label for='op2'>Ayam</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Sayur Asem</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Apel</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Susu</label>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <input type='submit' value='Menu 2' id='submit' />
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'>Nasi Putih</label>
                  <input id='op2' name='op2' type='checkbox' checked disabled />
                  <label for='op2'>Ayam + Telur</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Sayur Lodeh</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Apel</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Susu</label>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <input type='submit' value='Menu 3' id='submit' />
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'>Nasi Putih</label>
                  <input id='op2' name='op2' type='checkbox' checked disabled />
                  <label for='op2'>Ayam</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Sayur Asem</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Apel</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Susu</label>
                </div>
              </div>

            </div>
            <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <input type='submit' value='Menu 4' id='submit' />
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'>Nasi Putih</label>
                  <input id='op2' name='op2' type='checkbox' checked disabled />
                  <label for='op2'>Ayam</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Sayur Asem</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Apel</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Susu</label>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <input type='submit' value='Menu 5' id='submit' />
                  <input id='op1' name='op1' type='checkbox' checked disabled />
                  <label for='op1'>Nasi Putih</label>
                  <input id='op2' name='op2' type='checkbox' checked disabled />
                  <label for='op2'>Ayam</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Sayur Asem</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Apel</label>
                  <input id='op3' name='op3' type='checkbox' checked disabled />
                  <label for='op3'>Susu</label>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="steps pn">
                  <button data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> TAMBAH</button>
                </div>
              </div>

            </div>

            <div aria-hidden="true" aria-labelledby="tambahLabel" role="dialog" tabindex="-1" id="tambah" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">TAMBAH MENU MAKANAN</h4>
                  </div>

                  <div class="modal-body">
                    <form class="form-horizontal style-form" method="get">

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">MAKANAN POKOK</label>
                        <div class="col-sm-9">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI PUTIH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI MERAH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI KUNING
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">LAUK PAUK</label>
                        <div class="col-sm-9">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI PUTIH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI MERAH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI KUNING
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">SAYUR</label>
                        <div class="col-sm-9">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI PUTIH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI MERAH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI KUNING
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">BUAH</label>
                        <div class="col-sm-9">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI PUTIH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI MERAH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI KUNING
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 col-sm-3 control-label">MINUMAN</label>
                        <div class="col-sm-9">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI PUTIH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI MERAH
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" value="">
                              NASI KUNING
                            </label>
                          </div>
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
      </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->