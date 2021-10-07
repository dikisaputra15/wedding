<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">EditProduk</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Produk</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
             <?= form_open_multipart(); ?>
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id Produk</label>
                    <input type="text" class="form-control" name="id_produk" value="<?= $produk['id_produk']; ?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <select class="form-control" name="id_kategori">
                       <?php foreach ($kategori as $dat) : 

                      if ($produk['id_kategori']==$dat['id_kategori']) {
                          $select="selected";
                        }else{
                          $select="";
                        }

                      ?>

                    <option <?= $select; ?> value="<?= $dat['id_kategori']; ?>"><?= $dat['kategori']; ?></option>

                  <?php endforeach; ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?= $produk['harga']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label><br>
                   <textarea name="deskripsi" style="height: 300px; width: 470px;"><?= $produk['deskripsi']; ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                  </div>
                  
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>