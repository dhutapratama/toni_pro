    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
       <div class="row mt">
        <div class="col-lg-12">

          <div class="col-lg-12 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>NOTIFIKASI</h3>

            <!-- First Action -->
            <?php foreach ($get_notifikasis as $key => $value) { ?>
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              
              <div class="details">
                <p>
                 <a href="<?php echo site_url('admin/pegawai/edit/'.$value->id_user); ?>"><?php 
                 echo $this->m_pegawai->get_pegawai_by_id($value->id_user)->nama; 
                 ?></a> <?php echo $value->notifikasi; ?> <a href="<?php echo site_url('admin/menu/edit/'.$value->id_user); ?>" class="btn btn-theme03 btn-xs">UBAH MENU MAKANAN</a> <a href="<?php echo site_url('admin/index/delete/'.$value->id); ?>" class="btn btn-danger btn-xs">HAPUS NOTIFIKASI</a><br>
               </p>
             </div>
           </div>
           <?php } ?>
         </div>
       </div>
      

     </section><!--/wrapper -->
   </section><!-- /MAIN CONTENT -->