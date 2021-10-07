<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Detail Pesanan</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Detail Pesanan</h6>
            </div>
            <div class="card-body">
            <div class="row">
             <?php foreach ($detailpesan as $dat) : ?>
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
                  </table><br>
                </div>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pemesan</h6>
            </div>
             <div class="col-12">
                  <table class="table">
                    <tr>
                      <td>Nama Pemesan</td>
                      <td>:</td>
                      <td><?= $dat['nama_pemesan']; ?></td>
                    </tr>
                    <tr>
                      <td>No Handphone</td>
                      <td>:</td>
                      <td><?= $dat['no_hp']; ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?= $dat['alamat']; ?></td>
                    </tr>
                     <tr>
                      <td>Tgl Pesan</td>
                      <td>:</td>
                      <td><?= $dat['tgl_pesan']; ?></td>
                    </tr>
                     <tr>
                      <td>Status Pesanan</td>
                      <td>:</td>
                      <td><?= $dat['status_pesanan']; ?></td>
                    </tr>
                  </table>
                </div>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pembayaran</h6>
            </div>
            <div class="row">
            <div class="col-4">
                  <img src="<?= base_url('uploads/mandiri.jpg'); ?>" class="card-img-top">
                </div>
            <div class="col-8">
                  <table class="table">
                    <tr>
                      <td>No Rekening</td>
                      <td>:</td>
                      <td>0345688977877</td>
                    </tr>
                    <tr>
                      <td>Nama Bank</td>
                      <td>:</td>
                      <td>Mandiri</td>
                    </tr>
                    <tr>
                      <td>Atas Nama</td>
                      <td>:</td>
                      <td>Nazwa Wedding Organizer</td>
                    </tr>
                     <tr>
                      <td>Jumlah yg Harus dibayar</td>
                      <td>:</td>
                      <td>Rp. <?= $dat['harga']; ?></td>
                    </tr>
                  </table>
                </div>
              </div>
        <?php endforeach; ?> 
               <div class="card-header py-3">
             <p>jika sudah melakukan transfer pembayaran silahkan upload bukti pembayaran   <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Klik Disini</button></p>
            </div>
            </div>
          </div>
          </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('produk/pesan/formbayar') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group" hidden>
                     <input type="text" name="id_pesan" value="<?= $dat['id_pesan']; ?>">
                  </div> 
                  <div class="form-group" hidden>
                     <input type="text" name="id_user" value="<?= $this->session->userdata('id_user'); ?>">
                  </div>
                  <div class="form-group" hidden>
                     <input type="text" name="id_produk" value="<?= $dat['id_produk']; ?>">
                  </div>
                  <div class="form-group">
                     <label>upload bukti pembayaran</label>
                     <input type="file" name="gambar" required>
                  </div> 
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>