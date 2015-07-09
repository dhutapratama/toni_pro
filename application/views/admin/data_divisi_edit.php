
<!--main content start-->
<section id="main-content">
  <section class="wrapper">

    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> EDIT DATA DIVISI</h4>
          <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/divisi/update');?>">
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">NAMA DIVISI</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_divisi" value="<?php echo $get_divisi->nama_divisi; ?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $get_divisi->id; ?>">
              </div>
            </div>
            <button type="submit" class="btn btn-theme">Simpan</button>
          </form>
        </div>
      </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->