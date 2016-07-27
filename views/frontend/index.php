<?php

include "views/frontend/components/header.php";

?>

    <section id="beginning">
      <div class="intro-picture">
        <img src="resources/images/bg-home.jpg" alt="intro gambar">

        <form action="" method="post">
        <div class="container">
        <h2 class="intro-description">TEMUKAN KOSAN ANDA</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="box-searching">
              <div class="panel-body">
                <form class="form-inline">
                  <div class="row">
                    <div class="col-md-3 col-xs-6">
                      <div class="form-group">
                        <label class="label-searching">Fasilitas Kamar</label>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="kamar_mandi_dalam">Kamar Mandi Dalam
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="tempat_tidur">Tempat Tidur
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="lemari">Lemari
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="meja">Meja
                            </label>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                      <div class="form-group">
                        <label class="label-searching">Fasilitas Umum</label>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="dapur_bersama" value="">Dapur
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="ruangan_tamu" value="">Ruang Tamu
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="parkir_motor" value="">Parkir Motor
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="parkir_mobil" value="">Parkir Mobil
                            </label>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-3 col-xs-12">
                      <div class="form-group">
                        <label class="label-searching">Lokasi Kampus Terdekat</label>
                        <select name="kategori_kampus" class="form-control">
                          <option>UNIKOM, ITHB, UNPAD, ITB</option>
                          <option>UNISBA, UNPAS</option>
                          <option>ITENAS, WIDYATAMA, LP3I</option>
                          <option>UPI, UNPAS, NHI</option>
                          <option>TELKOM UNIVERSITY</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="label-searching">Harga</label>
                        <select name="harga_kosan" class="form-control">
                          <option> &lt;Rp 500.000/bln </option>
                          <option> Rp 500.000 - Rp 1.000.000/bln</option>
                          <option> &gt;Rp 1.000.000/bln</option>
                          <option>Pertahun</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-3 col-xs-12">
                      <div class="button-direction">
                        <button type="submit" class="btn bg-maroon btn-flat">Cari</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div><!-- /.panel-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container -->
      </form>
    </section>

    <section id="kost">
      <div class="container">
        <h2> INFORMASI KOSAN</h2>
        <p class="information">E-Kosan menyediakan informasi kosan di wilayah Bandung lengkap dengan fasilitasnya.<br>Kami berharap Anda dapat menemukan kosan yang sesuai dengan keinginan Anda.</p>
        <br>

        <h4>Kosan Favorit</h4>
        <?php

          $kost = new App\Kost;
          $kosts = $kost->fetch();

          if (count($kosts) == 0) {

        ?>
        <div>
          Tidak ada data yang ditampilkan
        </div>
        <?php } else {
          foreach ($kosts as $kos) {

        ?>
        <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title"><?= $kos->nama_kosan ?></span>
                  <h3 class="box-title navbar-right label label-danger"> <?= $kos->harga_sewa2 ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image">
                          <img src="resources/images/<?= $kos->gambar_kosan ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p><?= $kos->alamat_kosan ?></p>
                        <span><b>Deskripsi</b></span>
                        <br><span> <?= $kos->keterangan ?></span>
                        <p></p>
                        <p>
                          <a href="detail_kosan.php?id=<?= $kos->kode_kosan?>" class="btn bg-maroon btn-flat">Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                    <?php
                      $fasilitasKamar = new App\RoomFacility;
                      // ambil fasilitas berdasarkan kosan
                      $roomFacility = $fasilitasKamar->fetchDetail($kos->kode_kosan);
                      // cek semua fasilitas
                      if ($roomFacility->kamar_mandi_dalam == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-bed\"> Tempat Tidur</i></td>";
                      }

                      if ($roomFacility->tempat_tidur == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-tint\"> Kamar Mandi Dalam</td>";
                      }

                      $fasilitasUmum = new App\PublicFacility;
                      // ambil fasilitas berdasarkan kosan
                      $publicFacility = $fasilitasUmum->fetchDetail($kos->kode_kosan);
                      // cek semua fasilitas
                      if ($publicFacility->parkir_motor == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-motorcycle\"> Parkir Motor</td>";
                      }

                      if ($publicFacility->parkir_mobil == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-car\"> Parkir Mobil</td>";
                      }
                    ?>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php }
        } ?>
        </div>

            <h4>Kosan Baru</h4>
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="resources/images/kos1.jpg" alt="kos1">
                <div class="caption">
                    <h4>Thumbnail label</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, quis saepe. Necessitatibus, eum,</p>
                    <p><a href="#" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="resources/images/kos2.jpg" alt="kos2">
                  <div class="caption">
                    <h4>Thumbnail label</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, quis saepe. Necessitatibus, eum,</p>
                    <p><a href="#" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="resources/images/kos3.jpg" alt="kos3">
                  <div class="caption">
                    <h4>Thumbnail label</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, quis saepe. Necessitatibus, eum,</p>
                    <p><a href="#" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </section>

    <section id="campus">
      <div class="container">
        <h2>CARI KOSAN SEKITAR</h2>
          <div class="row">
            <div class="col-md-3 text-center">
              <a href="" class="thumbnail pic-campus">
                <img src="resources/images/unikom.png" alt="Unikom">
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="thumbnail pic-campus">
                <img src="resources/images/unpad.png" alt="Unpad">
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="thumbnail pic-campus">
                <img src="resources/images/itb.jpg" alt="Itb">
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="thumbnail pic-campus">
                <img src="resources/images/telkom.png" alt="Telkom">
              </a>
            </div>
          </div>
      </div>
    </section>

<?php

include "views/frontend/components/footer.php";


