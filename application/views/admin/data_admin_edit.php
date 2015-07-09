
<!--main content start-->
<section id="main-content">
  <section class="wrapper">

    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> EDIT ADMINISTRATOR</h4>
          <form class="form-horizontal style-form" method="post" action="<?php echo site_url('admin/administrator/update');?>">
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">NAMA ADMIN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $get_administrator->nama; ?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $get_administrator->id; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">USERNAME</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="<?php echo $get_administrator->username; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">NEW PASSWORD</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" value="">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">EMAIL</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="<?php echo $get_administrator->email; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 col-sm-3 control-label">TYPE</label>
                <div class="col-sm-9">
                  <div class="radio">
                    <label>
                      <input type="radio" name="type" id="optionsRadios1" value="admin" <?php echo ($get_administrator->type == 'admin' ? 'checked':'') ?>>
                      Administrator
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="type" id="optionsRadios2" value="kantin" <?php echo ($get_administrator->type == 'kantin' ? 'checked':'') ?>>
                      Kantin
                    </label>
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-theme">Simpan</button>
          </form>
        </div>
      </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->