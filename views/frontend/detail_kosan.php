<?php

include "components/header.php";

?>

<section id="kost-detail">
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
                                            <input type="checkbox" name="kamar_mandi_dalam"> Kamar Mandi Dalam
                                            </label>
                                        </div>
                                      </div><!-- /.col -->
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="lemari"> Lemari
                                          </label>
                                        </div>
                                      </div>
                                    </div><!-- /.row -->
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="tempat_tidur"> Tempat Tidur
                                          </label>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="meja"> Meja
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
                                                <input type="checkbox" name="parkir_mobil" value=""> Parkir Mobil
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="ruangan_tamu" value=""> Ruang Tamu
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="parkir_motor" value=""> Parkir Motor
                                              </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" name="dapur_bersama" value=""> Dapur
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
                                    <select name="kategori_kampus" class="form-control">
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
                                <select name="harga_kosan" id="" class="form-control">
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
            // ambil id
            (isset($_GET['id'])) ? $id = $_GET['id'] : $id = 0;

            $kost = new App\Kost;

            // ambil data berdasarkan idnya
            $kostDetail = $kost->fetchDetail($id);

          ?>

          <div class="col-md-9">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title"><?= $kostDetail->nama_kosan; ?></span>
                  <h3 class="box-title navbar-right label label-danger"><?= $kostDetail->harga_sewa2; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="detail-image">
                          <img src="<?php echo $siteUrl . "resources/images/" . $kostDetail->gambar_kosan; ?>"/>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <span><b> Alamat</b></span>
                        <p><?= $kostDetail->alamat_kosan ?></p>
                        <span><b> Deskripsi</b></span>
                        <p><?= $kostDetail->keterangan ?></p>
                        <span><b> Penghuni</b></span>
                        <p><?= $kostDetail->jenis_hunian ?></p>
                        <span><b> Kontak</b></span>
                        <p> Hubungi <?= $kostDetail->nama_pemilik ?>:
                            <br><i class="fa fa-phone"></i> <?= $kostDetail->nomor_tlp . " / " . $kostDetail->nomor_tlp2; ?>
                        </p>
                      </div>
                    </div>
                    <p></p>

                    <div class="facilities">
                      <table class="table table-bordered text-center">
                        <tr>
                        <?php
                          $fasilitasKamar = new App\RoomFacility;
                          // ambil fasilitas berdasarkan kosan
                          $roomFacility = $fasilitasKamar->fetchDetail($id);
                          // cek semua fasilitas
                          if ($roomFacility->kamar_mandi_dalam == 'yes') {
                            echo "<td class=\"items\"><i class=\"fa fa-bed\"> Tempat Tidur</i></td>";
                          }

                          if ($roomFacility->tempat_tidur == 'yes') {
                            echo "<td class=\"items\"><i class=\"fa fa-tint\"> Kamar Mandi Dalam</td>";
                          }

                          $fasilitasUmum = new App\PublicFacility;
                          // ambil fasilitas berdasarkan kosan
                          $publicFacility = $fasilitasUmum->fetchDetail($id);
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

                    <hr>
                    <div class="additional">
                        <span><h4> Fasilitas Tambahan</h4></span>
                        <ul>
                            <li> Ruang Tamu</li>
                            <li> Kulkas Bersama</li>
                            <li> Meja</li>
                            <li> Lemari</li>
                        </ul>
                    </div>

                    <hr>
                    <h4> Map Kosan</h4>
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                    <div id="map"></div>

                    <script type="text/javascript">
                        // Menentukan koordinat titik tengah peta
                        var myLatlng = new google.maps.LatLng(-6.176587,106.827115);

                        // Pengaturan zoom dan titik tengah peta
                        var myOptions = {
                            zoom: 13,
                            center: myLatlng
                        };

                        // Menampilkan output pada element
                        var map = new google.maps.Map(document.getElementById("map"), myOptions);

                        // Menambahkan marker
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title:"Monas"
                        });
                    </script>

                    <div class="share">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b> Bagikan</b></p>
                                <i class="fa fa-facebook-square fa-2x"></i>
                                <i class="fa fa-twitter-square fa-2x"></i>
                                <i class="fa fa-google-plus-square fa-2x"></i>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>


<?php

include "components/footer.php";
