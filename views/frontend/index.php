<?php

include "views/frontend/components/header.php";

?>

    <section id="beginning">
      <div class="intro-picture">
        <img src="resources/images/bg-home.jpg" alt="intro gambar">

        <form action="filter_kosan.php" method="post">
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
                              <input type="checkbox" name="dapur_bersama">Dapur
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="ruangan_tamu">Ruang Tamu
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="parkir_motor">Parkir Motor
                            </label>
                          </div>
                          <div class="checkbox">
                            <label class="label-searching">
                              <input type="checkbox" name="parkir_mobil">Parkir Mobil
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
                          <option>UNPAD, ITB JATINANGOR</option>
                          <option>Dekat Kampus Lain</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="label-searching">Harga</label>
                        <select name="harga_kosan" class="form-control">
                          <option value="1"> &lt;Rp 500.000/Bln </option>
                          <option value="2"> Rp 500.000 - Rp 1.000.000/Bln</option>
                          <option value="3"> &gt;Rp 1.000.000/Bln</option>
                          <option value="4">Pertahun</option>
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
        <a href="semua_kosan.php" type="button" class="btn bg-maroon btn-flat btn-more">Lihat Lebih Banyak Kosan</a>
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
        <?php
        } else {
          $i = 1;
          foreach ($kosts as $kos) {

            if ($i == 1) {
        ?>
        <div class="row">
        <?php
        }
        ?>
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
                        <div class="image kos-image">
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
                      $fasilitas = new App\RoomFacility;
                      // ambil fasilitas berdasarkan kosan
                      $fasilitasKamar = $fasilitas->fetchDetail($kos->kode_kosan);
                      // cek semua fasilitas
                      if ($fasilitasKamar->kamar_mandi_dalam == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-bed\"> Tempat Tidur</i></td>";
                      }

                      if ($fasilitasKamar->tempat_tidur == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-tint\"> Kamar Mandi Dalam</td>";
                      }

                      $fasilitas = new App\PublicFacility;
                      // ambil fasilitas berdasarkan kosan
                      $fasilitasUmum = $fasilitas->fetchDetail($kos->kode_kosan);
                      // cek semua fasilitas
                      if ($fasilitasUmum->parkir_motor == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-motorcycle\"> Parkir Motor</td>";
                      }

                      if ($fasilitasUmum->parkir_mobil == 'yes') {
                        echo "<td class=\"items\"><i class=\"fa fa-car\"> Parkir Mobil</td>";
                      }
                    ?>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php
            if ($i == 2) {
              $i = 1;
              ?>
              </div>
            <?php
            } else {
              $i++;
            }
          }
        } ?>
      </div>
    </section>

    <section id="kost">
      <div class="container">
        <h4>Kosan Baru</h4>

        <?php

          $kos = new App\Kost;
          $kosan = $kos->fetchNewDataKost();

          if (count($kosan) == 0) {

        ?>
        <div>
          Tidak ada data yang ditampilkan
        </div>
        <?php
        } else {
          $i = 1;
          foreach ($kosan as $kosan) {

            if ($i == 1) {
        ?>
        <div class="row">
        <?php
        }
        ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="resources/images/<?= $kosan->gambar_kosan ?>">
            <div class="caption">
                <h4><?= $kosan->nama_kosan ?></h4>
                <p><?= $kosan->keterangan ?></p>
                <p><a href="detail_kosan.php?id=<?= $kosan->kode_kosan?>" class="btn bg-maroon btn-flat" role="button">Lihat</a></p>
              </div>
            </div>
          </div>
        <?php
            if ($i == 3) {
              $i = 1;
              ?>
              </div>
            <?php
            } else {
              $i++;
            }
          }
        } ?>
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

?>
