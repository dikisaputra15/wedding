<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">EditUser</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
            </div>
            <div class="card-body">
              <div class="col-md-6">
              <form role="form" action="" method="POST">
                   <div class="form-group" hidden>
                    <label for="exampleInputEmail1">id user</label>
                    <input type="text" class="form-control" name="id_user" value="<?= $user['id_user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $user['email']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $user['nama_lengkap']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="password" value="<?= $user['password']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Level</label>
                    <select class="form-control" name="level">
                        <option value="admin" <?php if($user['level']=='admin'){ echo "selected"; } ?>>admin</option>
                        <option value="customer" <?php if($user['level']=='customer'){ echo "selected"; } ?>>customer</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                  </div>
              </form>
            </div>
            </div>
          </div>

</div>