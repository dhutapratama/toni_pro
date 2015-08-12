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
                                <th>ID</th>
                                <th>NAMA DIVISI</th>
                                <th>KATEGORI PEKERJAAN</th>
                                <th>POSISI PEKERJAAN</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($get_divisis as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value->id; ?></td>
                                <td><?php echo $value->nama_divisi; ?></td>
                                <td><?php echo $this->m_kategori_pekerjaan->get_kategori_pekerjaan_by_id($value->id_kategori_pekerjaan)->nama_kategori_pekerjaan; ?></td>
                                <td><?php echo $this->m_posisi_badan->get_posisi_badan_by_id($value->id_posisi_badan)->nama_posisi_badan; ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/divisi/edit/'.$value->id);?>" class="btn btn-primary btn-xs fa fa-pencil"></a>
                                    <a href="<?php echo site_url('admin/divisi/delete/'.$value->id);?>" class="btn btn-danger btn-xs fa fa-trash-o"></a>
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
                                    <h4 class="modal-title">TAMBAH DIVISI</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/divisi/insert'); ?>">
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">NAMA DIVISI</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama_divisi">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">KATEGORI PEKERJAAN</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="id_kategori_pekerjaan">
                                                    <?php foreach ($get_kategori_pekerjaans as $key => $value) {
                                                        echo '<option value="'.$value->id.'">'.$value->nama_kategori_pekerjaan.'</option>';
                                                } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 col-sm-3 control-label">POSISI BADAN</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="id_posisi_badan">
                                                    <?php foreach ($get_posisi_badans as $key => $value) {
                                                        echo '<option value="'.$value->id.'">'.$value->nama_posisi_badan.'</option>';
                                                    } ?>
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
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
