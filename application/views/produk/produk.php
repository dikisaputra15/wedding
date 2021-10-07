<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Produk</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kategori</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th>gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($produk as $dat) : ?>
                    <tr>
                      <td><?= $dat['kategori']; ?></td>
                      <td><?= $dat['nama_produk']; ?></td>
                      <td><?= $dat['harga']; ?></td>
                      <td><?= $dat['deskripsi']; ?></td>
                      <td>
                        <img src="<?= base_url('uploads/') . $dat['gambar']; ?>" style="width: 50px; height: 50px;">
                      </td>
                      <td> 
                          <a href="<?= base_url('produk/produk/hapusproduk/') . $dat['id_produk']; ?>" class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('produk/produk/editproduk/') . $dat['id_produk']; ?>" class="btn btn-primary">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('produk/produk/tambahproduk') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Kategori</label>
                     <select class="form-control" name="kategori" id="kategori">
                         <?php foreach ($kategori as $data) : ?>
                            <option value="<?= $data['id_kategori']; ?>"><?= $data['kategori']; ?></option>
                         <?php endforeach; ?> 
                    </select>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Produk" name="nama_produk" id="nama_produk" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Harga" name="harga" id="harga" required>
                  </div> 
                  <div class="form-group">
                     <label>Deskripsi</label><br>
                     <textarea style="height: 300px; width: 470px;" name="deskripsi"></textarea>
                  </div>
                 <div class="form-group">
                     <label>Gambar</label><br>
                     <input type="file" name="gambar">
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