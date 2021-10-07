<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Profile User</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Profile User</h6>
            </div>
            <div class="card-body">
            <div class="row">
            <form action="<?= base_url('user/user/update_profile'); ?>" method="POST">
             <div class="col-12">
                <div hidden>
                  <input type="text" name="id_user" value="<?= $profile['id_user']; ?>" class="form-control"></td>
                </div>
                <table class="table">
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name="email" value="<?= $profile['email']; ?>" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value="<?= $profile['nama_lengkap']; ?>" class="form-control"></td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" value="<?= $profile['password']; ?>" class="form-control"></td>
                  </tr>
                </table>

                <div>
                  <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
              </div>
              </form>
              </div>
            </div>
          </div>

</div>

