<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Detail Produk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail Produk</h6>
            </div>
            <div class="card-body">
            <div class="row">
             <?php foreach ($detail as $dat) : ?>
                <div class="col-12">
                  <img src="<?= base_url('uploads/'). $dat['gambar']; ?> ?>" class="card-img-top">
                </div>

                <div class="col-8">
                  <table class="table table-bordered" width="100%" cellspacing="0">
                    <tr>
                      <td>Kategori</td>
                      <td>:</td>
                      <td><?= $dat['kategori']; ?></td>
                    </tr>
                    <tr>
                      <td>Nama Produk</td>
                      <td>:</td>
                      <td><?= $dat['nama_produk']; ?></td>
                    </tr>
                    <tr>
                      <td>Harga</td>
                      <td>:</td>
                      <td><?= $dat['harga']; ?></td>
                    </tr>
                     <tr>
                      <td>Deskripsi</td>
                      <td>:</td>
                      <td><?= $dat['deskripsi']; ?></td>
                    </tr>
                  </table><br>
                </div>
            <?php endforeach; ?> 

                <div class="col-12">
                  <a href="<?= base_url('produk/kategori_jasa/list/') . $dat['id_kategori']; ?>" class="btn btn-danger">Kembali</a>
                   <a href="<?= base_url('produk/produk/pesan/') . $dat['id_produk']; ?>" class="btn btn-success">Pesan</a>
                </div>

              </div>
            </div>
          </div>

</div>

