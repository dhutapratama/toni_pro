<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i> DATA ADMIN &amp; KANTIN
              <a data-toggle="modal" href="pegawai_profil.html#tambah" class="btn btn-theme03 add-btn"> TAMBAH</a></h4>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>NAMA</th>
                                <th>EMAIL</th>
                                <th>TIPE</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($get_admins as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value->username; ?></td>
                                <td><?php echo $value->nama; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td><?php echo $value->type; ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/administrator/edit/'.$value->id);?>" class="btn btn-primary btn-xs fa fa-pencil"></a>
                                    <a href="<?php echo site_url('admin/administrator/delete/'.$value->id);?>" class="btn btn-danger btn-xs fa fa-trash-o"></a>
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
                                    <h4 class="modal-title">TAMBAH ADMIN / KANTIN</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/administrator/insert');?>">
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">NAMA ADMIN</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">USERNAME</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">PASSWORD</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">EMAIL</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">TYPE</label>
                                            <div class="col-sm-9">
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="type" id="optionsRadios1" value="admin">
                                                  Administrator
                                                </label>
                                              </div>
                                              <div class="radio">
                                                <label>
                                                  <input type="radio" name="type" id="optionsRadios2" value="kantin">
                                                  Kantin
                                                </label>
                                              </div>
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
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
