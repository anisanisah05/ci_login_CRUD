<div class="cotainer-fluid">
  <div class="block-header">
    <h2 style="margin-left:300px; margin-top:50px;">
DAFTAR PELANGGAN
    </h2>
  </div>

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:100px; margin-left:240px; margin-top:-100px; background-color:white;font-size: 20px; text-align:left; width:1200px;height:650px;">
      <div class="card">
        <div class="header">
          <?php
$notifikasi = $this->session->flashdata('notif');
if ($notifikasi != null) {
echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
}
           ?>
        </div>
        <div class="body">

          <form class="" id="form_validation" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan')?>" method="post">
            <div class="form-group form-float">
            <div class="form-line">
                <label class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control" name="NamaPelanggan" value="">

            </div>
              </div>
                <div class="form-group form-float">
            <div class="form-line">
                    <label class="form-label">No Telepon</label>
              <input type="text" class="form-control" name="NoTelp" value="">

            </div>
            </div>
              <div class="form-group form-float">
            <div class="form-line">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="Username" value="">

            </div>
            </div>
              <div class="form-group form-float">
            <div class="form-line">
              <label class="form-label">Password</label>
              <input type="text" class="form-control" name="Password" value="">

            </div>
            </div>
            <div class="form-group form-float">
          <div class="form-line">
            <label class="form-label">Description</label>
            <textarea name="Alamat" rows="5" cols="30" class="form-control no-resize"></textarea>

          </div>
          </div>
          <button class="btn btn-primary wavess-effect" type="submit" style="background-color:black; border-color:black;">SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
