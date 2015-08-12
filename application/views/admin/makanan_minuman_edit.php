
<!--main content start-->
<section id="main-content">
  <section class="wrapper">

    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> EDIT MINUMAN</h4>
          <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/makanan/minuman/update');?>">
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">NAMA MINUMAN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_makanan" value="<?php echo $get_makanan_minuman->nama_makanan; ?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $get_makanan_minuman->id; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">JUMLAH KALORI</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kalori" value="<?php echo $get_makanan_minuman->kalori; ?>">
              </div>
            </div>
            <button type="submit" class="btn btn-theme">Simpan</button>
          </form>
        </div>
      </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->