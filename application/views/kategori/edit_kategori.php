<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Kategori</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Kategori</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id kategori</label>
                    <input type="text" class="form-control" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="<?= $kategori['kategori']; ?>">
                  </div>
                   
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>