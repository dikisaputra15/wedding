<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Forget Password</h1>
                  </div>
                   <?= $this->session->flashdata('message'); ?>
                  <form class="user" action="<?= base_url('user/user/forget_pass'); ?>" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required>
                    </div>
                   <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password Baru" name="password" required>
                    </div>
                    <input type="submit" name="reset" class="btn btn-primary btn-user btn-block" value="Reset Akun">
                    <hr>
                   
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>