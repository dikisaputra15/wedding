<div class="container">
<center><h3>NAZWA WEDDING ORGANIZER</h3></center>
  <div class="row">
  
  <div class="col-12">
        <div class="card">
          <Center><img src="<?= base_url('assets/img/profill.png'); ?>" class="card-img-top" style="width: 100px; height: 100px;"></center>
          <div class="card-body">
            <center><a href="<?= base_url('user/user/profile/') . $this->session->userdata('id_user'); ?>" class="btn btn-primary btn-sm">PROFILE</a></center>
          </div>
        </div>
     </div>
    
   <div class="col-12">
       <div class="card">
          <Center><img src="<?= base_url('assets/img/katalog.png'); ?>" class="card-img-top" style="width: 100px; height: 100px;"></Center>
          <div class="card-body">
            <center><a href="<?= base_url('produk/katalog'); ?>" class="btn btn-primary btn-sm">KATALOG</a></center>
          </div>
        </div>
    </div>

   <div class="col-12">
        <div class="card">
          <Center><img src="<?= base_url('assets/img/pesanan.png'); ?>" class="card-img-top" style="width: 100px; height: 100px;"></Center>
          <div class="card-body">
            <center><a href="<?= base_url('produk/pesan'); ?>" class="btn btn-primary btn-sm">PESANANKU</a></center>
          </div>
        </div>
    </div>
    <div class="col-12">
       <div class="card">
          <Center><img src="<?= base_url('assets/img/logout.png'); ?>" class="card-img-top" style="width: 60px; height: 70px;"></Center>
          <div class="card-body">
            <center><a href="<?= base_url('auth/logout'); ?>" class="btn btn-primary btn-sm">LOGOUT</a></center>
          </div>
        </div>
    </div>
  </div>
</div>