<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
              <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah User</button>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Nama Lengkap</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($user as $dat) : ?>
                    <tr>
                      <td><?= $dat['email']; ?></td>
                      <td><?= $dat['nama_lengkap']; ?></td>
                      <td><?= $dat['password']; ?></td>
                      <td><?= $dat['level']; ?></td>
                      <td> 
                          <a href="<?= base_url('user/user/hapususer/') . $dat['id_user']; ?>" class="btn btn-danger">Hapus</a>
                          <a href="<?= base_url('user/user/edituser/') . $dat['id_user']; ?>" class="btn btn-primary">Edit</a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('user/user/tambahuser') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="email" placeholder="Email" name="email" id="email" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Lengkap" name="nama_lengkap" id="nama_lengkap" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="password" placeholder="Password" name="password" id="password" required>
                  </div>
                 <div class="form-group">
                    <label>Level</label>
                     <select class="form-control" name="level" id="level">
                         <option value="admin">admin</option>
                         <option value="customer">customer</option>
                     </select>
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