

<div class="container-fluid">
<center><h3>KATALOG JASA</h3></center>
<div class="row">
<?php foreach ($katalog as $dat) : ?>
<div class="col-12">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('produk/produk/detail/') . $dat['id_produk']; ?>"><img src="<?= base_url('uploads/'). $dat['gambar']; ?> ?>" class="card-img-top"></a>
  <div class="card-body">
    <h5 class="card-title"><?= $dat['nama_produk']; ?></h5>
    <p class="card-text">Rp. <?= $dat['harga']; ?></p>
    <a href="<?= base_url('produk/produk/pesan/') . $dat['id_produk']; ?>" class="btn btn-primary">Pesan</a>
  </div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
 
