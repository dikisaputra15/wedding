<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Halaman Pemesanan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail Produk</h6>
            </div>
            <div class="card-body">
            <div class="row">
             <?php foreach ($detail as $dat) : ?>
                <div class="col-4">
                  <img src="<?= base_url('uploads/'). $dat['gambar']; ?> ?>" class="card-img-top">
                </div>

                <div class="col-8">
                  <table class="table">
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
                  </table>
                </div>
            <?php endforeach; ?> 

            <div style="margin-left: 360px;">
              <h3 class="m-0 font-weight-bold text-primary">Form Pemesanan</h3>
            </div>

            <div class="col-md-6">
              <form role="form" action="<?= base_url('produk/produk/prosespesan') ?>" method="POST">
                  <div class="form-group" hidden>
                    <label for="exampleInputPassword1">id produk</label>
                    <input type="text" class="form-control" name="id_produk" value="<?= $dat['id_produk']; ?>">
                  </div>
                  <div class="form-group"  hidden>
                    <label for="exampleInputPassword1">kategori</label>
                    <input type="text" class="form-control" name="kategori" value="<?= $dat['kategori']; ?>">
                  </div>
                   <div class="form-group"  hidden>
                    <label for="exampleInputPassword1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $this->session->userdata('id_user'); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemesan</label>
                    <input type="text" class="form-control" name="nama_pemesan" value="<?= $this->session->userdata('nama_lengkap'); ?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Handphone</label>
                    <input type="text" class="form-control" name="no_hp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label><br>
                    <textarea style="width: 460px; height: 100px;" name="alamat"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Pesan</label>
                    <input type="date" class="form-control" name="tgl_pesan">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="pesan" class="btn btn-primary" value="Pesan">
                  </div>
              </form>
            </div>

              </div>
            </div>
          </div>

</div>

