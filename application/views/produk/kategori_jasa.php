<?php
$cek = $jasa['id_kategori']; 
if($cek > 0){ ?>

<div class="container-fluid">
 <?php 

 	$id = $this->uri->segment(4);
	$query = $this->db->get_where('tb_kategori', array('id_kategori' => $id));
		foreach ($query->result() as $row)
     { 
  ?>
<center><h3><?php echo $row->kategori; ?></h3></center>
 <?php
      }
 ?>
<div class="row">
<div class="col-12">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('produk/produk/detail/') . $jasa['id_produk']; ?>"><img src="<?= base_url('uploads/'). $jasa['gambar']; ?> ?>" class="card-img-top"></a>
  <div class="card-body">
    <h5 class="card-title"><?= $jasa['nama_produk']; ?></h5>
    <p class="card-text">Rp. <?= $jasa['harga']; ?></p>
    <?php if($this->session->userdata('level')=='customer'){ ?>
    <a href="<?= base_url('produk/produk/pesan/') . $jasa['id_produk']; ?>" class="btn btn-primary">Pesan</a>
    <?php } ?>
  </div>
</div>
</div>

</div>
</div>

<?php }else{ ?>
<center><h3>Belum Ada Produk</h3></center>
<?php } ?>