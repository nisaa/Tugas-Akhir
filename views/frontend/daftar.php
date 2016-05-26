<!-- Modal Daftar -->
<div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Daftar</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" class="form-control" name="fullname" id="fullname" required autofocus>
          </div>
          <div class="form-group">
              <label for="e-mail">E-mail</label>
              <input type="text" class="form-control" name="e-mail" id="e-mail" required>
          </div>
          <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" required>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" id="password" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
              <div class="row">
                <div class="col-md-6">
                  <input type="radio" name="pencari_kos" id="pencari_kos" value="1" required> Pencari Kosan
                </div>
                <div class="col-md-6">
                  <input type="radio" name="pemilik_kos" id="pemilik_kos" value="2" required> Pemilik Kosan
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn bg-maroon btn-flat">Daftar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>