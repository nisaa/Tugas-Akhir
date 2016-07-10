<?php

include "components/header.php";

?>

<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="box">
                  <div class="box-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Kamar</label>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="bathroom"> Kamar Mandi Dalam
                                            </label>
                                        </div>
                                      </div><!-- /.col -->
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="cupboard"> Lemari
                                          </label>
                                        </div>
                                      </div>
                                    </div><!-- /.row -->
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="bed"> Tempat Tidur
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="table"> Meja
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Fasilitas Umum</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="car_parking" value=""> Parkir Mobil
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="living_room" value=""> Ruang Tamu
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="bike_parking" value=""> Parkir Motor
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="kitchen" value=""> Dapur
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lokasi Kampus Terdekat</label>
                                    <select name="location" id="" class="form-control">
                                      <option>UNIKOM, ITHB, UNPAD, ITB</option>
                                      <option>UNISBA, UNPAS</option>
                                      <option>ITENAS, WIDYATAMA, LP3I</option>
                                      <option>UPI, UNPAS, NHI</option>
                                      <option>TELKOM UNIVERSITY</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Harga</label>
                                <select name="price" id="" class="form-control">
                                  <option> &lt;Rp 500.000/bln </option>
                                  <option> Rp 500.000 - Rp 1.000.000/bln</option>
                                  <option> &gt;Rp 1.000.000/bln</option>
                                  <option>Pertahun</option>
                                </select>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="button">
                                    <button type="submit" class="btn bg-maroon btn-flat">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
            </div>

            <?php

              $user = new App\User;
              $users = $user->fetch($status);

            ?>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title"><?= $_SESSION['logged_in_user']['full_name'] ?></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3" align="center">
                                <img alt="User Pic" src="<?php echo $siteUrl . "resources/images/" . $users->gambar; ?>" class="img-circle img-responsive">
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                              <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><?= $users->alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?= $users->email; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telp</td>
                                        <td><?= $users->telp; ?></td>
                                    </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <a data-toggle="modal" href="#modalKirimPesan" type="button" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-envelope"></i> Kirim Pesan ke Admin</a>
                        <a data-toggle="modal" href="#modalEditProfil" type="button" class="btn btn-sm btn-warning btn-flat"><i class="fa fa-edit"></i> Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Kirim Pesan -->
<div class="modal fade" id="modalKirimPesan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kirim Pesan ke Admin</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="subjek">Subjek</label>
            <input type="text" class="form-control" name="subjek" id="subjek" required autofocus>
          </div>
          <div class="form-group">
              <label for="pertanyaan">Pertanyaan</label>
              <textarea id="desc" cols="10" rows="5" class="form-control" required></textarea>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn bg-maroon btn-flat">Kirim</button>
              <button type="reset" class="btn btn-flat">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Profil -->
<div class="modal fade" id="modalEditProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Profil</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="image">Foto Profil</label>
            <input type="file" name="image" value="" placeholder="">
          </div>
          <div class="form-group">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" class="form-control" name="fullname" id="fullname" required autofocus>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password">
              Hanya isi kolom ini jika ingin merubah password
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="phone">No. Telp</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <button type="submit" class="btn bg-maroon btn-flat">Simpan</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php

include "components/footer.php";

?>
