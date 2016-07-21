<?php

include "components/header.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
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

                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                              <li role="presentation" class="active"><a href="#step1" aria-controls="step1" role="tab" data-toggle="tab">Informasi Utama</a></li>
                              <li role="presentation"><a href="#step2" aria-controls="step2" role="tab" data-toggle="tab">Fasilitas</a></li>
                              <li role="presentation"><a href="#step3" aria-controls="step3" role="tab" data-toggle="tab">Lokasi</a></li>
                            </ul>
                        </div>

                        <div class="panel-body">
                            <form action="proses_tambah_kosan.php" method="post" enctype="multipart/form-data">
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger">
                                  <ul class="list-unstyled">
                                    <?php
                                    foreach ($_SESSION['error'] as $value) {
                                      echo "<li>" . $value . "</li>";
                                    } ?>
                                    <li></li>
                                  </ul>
                                </div>
                              <?php } ?>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="step1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_kosan">Nama Kosan</label>
                                                    <input type="text" class="form-control" name="nama_kosan" id="nama_kosan" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_kosan">Alamat Kosan</label>
                                                    <input type="text" class="form-control" name="alamat_kosan" id="alamat_kosan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_hunian">Peruntukan Penghuni</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="pria" value="pria"> Pria
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="wanita" value="wanita"> Wanita
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="pw" value="pw"> Pria &amp; Wanita
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mayoritas_penghuni">Mayoritas Penghuni</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="pelajar" id="pelajar" value="pelajar"> Pelajar
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="mahasiswa" id="mahasiswa" value="mahasiswa"> Mahasiswa
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="mahasiswi" id="mahasiswi" value="mahasiswi"> Mahasiswi
                                                          </label>
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="karyawan" id="karyawan" value="karyawan"> Karyawan
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="karyawati" id="karyawati" value="karyawati"> Karyawati
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Lokasi Kampus Terdekat</label>
                                                    <select name="kategori_kampus" id="" class="form-control">
                                                      <option>UNIKOM, ITHB, UNPAD, ITB</option>
                                                      <option>UNISBA, UNPAS</option>
                                                      <option>ITENAS, WIDYATAMA, LP3I</option>
                                                      <option>UPI, UNPAS, NHI</option>
                                                      <option>TELKOM UNIVERSITY</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga Sewa Utama</label>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="input-group">
                                                              <div class="input-group-addon">Rp</div>
                                                              <input type="text" name="harga_sewa" class="form-control" id="exampleInputAmount" placeholder="Misal: 750000">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select name="type_kosan" class="form-control">
                                                              <option>/Bln</option>
                                                              <option>/Thn</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_sewa2">Keterangan Harga Sewa</label>
                                                    <input type="text" class="form-control" name="harga_sewa2" id="harga_sewa2" placeholder="Misal: Rp 750.000/Bln">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_pemilik">Nama Pemilik</label>
                                                    <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nomor_tlp">Nomor Telepon Utama</label>
                                                    <input type="text" class="form-control" name="nomor_tlp" id="nomor_tlp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nomor_tlp2">Nomor Telepon Kedua</label>
                                                    <input type="text" class="form-control" name="nomor_tlp2" id="nomor_tlp2">
                                                </div>
                                                <div class="form-group">
                                                    <label for="gambar_kosan">Foto Kos</label>
                                                    <input type="file" name="gambar_kosan" id="gambar_kosan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan">Deskripsi Kos</label>
                                                    <textarea id="keterangan" name="keterangan" cols="10" rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="text-right">
                                                    <button type="button" href="#step2" data-toggle="tab" class="btn btn-success btn-flat next-step">Selanjutnya</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="step2">
                                        <!-- Fasilitas Kamar -->
                                        <div class="form-group">
                                        <label for="fasilitas_kamar">Fasilitas Kamar</label>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kamar_mandi_dalam" id="kamar_mandi_dalam"> Kamar Mandi Dalam
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tempat_tidur" id="tempat_tidur"> Tempat Tidur
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="lemari" id="lemari"> Lemari
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="meja" id="meja"> Meja
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="ac" id="ac"> AC
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tv" id="tv"> TV
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tv_kabel" id="tv_kabel"> TV Kabel
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kipas_angin" id="kipas_angin"> Kipas Angin
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="air_panas" id="air_panas"> Air Panas
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="telepon" id="telepon"> Telepon
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="wastafel" id="wastafel"> Wastafel
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="internet" id="internet"> Internet
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kulkas" id="kulkas"> Kulkas
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="rak_buku" id="rak_buku"> Rak Buku
                                              </label>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- Fasilitas Umum -->
                                        <div class="form-group">
                                        <label for="fasilitas_umum">Fasilitas Umum</label>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="dapur_bersama" id="dapur_bersama"> Dapur Bersama
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="ruangan_tamu" id="ruangan_tamu"> Ruangan Tamu
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="parkir_motor" id="parkir_motor"> Parkir Motor
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="parkir_mobil" id="parkir_mobil"> Parkir Mobil
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kamar_mandi_bersama" id="kamar_mandi_bersama"> Kamar Mandi Bersama
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kulkas_bersama" id="kulkas_bersama"> Kulkas Bersama
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kantin" id="kantin"> Kantin
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="mesin_cuci" id="mesin_cuci"> Mesin Cuci
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="wifi" id="wifi"> Wifi
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="pembantu" id="pembantu"> Pembantu
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tv_bersama" id="tv_bersama"> TV Bersama
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="cctv" id="cctv"> CCTV
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="ruangan_makan" id="ruangan_makan"> Ruangan Makan
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="dispenser" id="Dispenser"> Dispenser
                                              </label>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- Fasilitas Terdekat -->
                                        <div class="form-group">
                                        <label for="fasilitas_terdekat">Fasilitas Terdekat</label>
                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="warnet" id="warnet"> Warnet
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="warteg" id="warteg"> Warteg
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="balai_kesehatan" id="balai_kesehatan"> Balai Kesehatan
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="masjid" id="masjid"> Masjid
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="gereja" id="gereja"> Gereja
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="bank" id="bank"> Bank
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="indomaret" id="indomaret"> Indomaret
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="alfamart" id="alfamart"> Alfamart
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="circle_k" id="circle_k"> Circle K
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="mall" id="mall"> Mall
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="supermarket" id="supermarket"> Supermarket
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="rumah_sakit" id="rumah_sakit"> Rumah Sakit
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="akses_transportasi" id="akses_transportasi
                                                "> Dekat Akses Kendaraan Umum
                                              </label>
                                            </div>
                                          </div>

                                          <div class="text-right">
                                            <button type="button" href="#step1" data-toggle="tab" class="btn btn-warning btn-flat prev-step">Kembali</button>
                                            <button type="button" href="#step3" data-toggle="tab" class="btn btn-success btn-flat next-step">Selanjutnya</button>
                                          </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="step3">
                                        <section id="map-canvas">
                                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                                            <div id="map"></div>
                                            <script type="text/javascript">

                                            //* Fungsi untuk mendapatkan nilai latitude longitude

                                            var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 12,
                                            // Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
                                            center: new google.maps.LatLng(-6.874937110178531, 107.50548365380862),
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                            });
                                            //posisi awal marker
                                            var latLng = new google.maps.LatLng(-6.914937110178531, 107.60548365380862);

                                            /* buat marker yang bisa di drag lalu
                                            panggil fungsi updateMarkerPosition(latLng)
                                            dan letakan posisi terakhir di id=latitude dan id=longitude
                                            */
                                            var marker = new google.maps.Marker({
                                            position : latLng,
                                            title : 'lokasi',
                                            map : map,
                                            draggable : true
                                            });
                                            </script>
                                        </section>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama Kosan di Map</label>
                                                    <input type="text" class="form-control" name="nama" id="nama" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat Kosan di Map</label>
                                                    <input type="text" class="form-control" name="alamat" id="alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lat">Latitude</label>
                                                    <input type="text" id="latitude`" class="form-control" name="lat" id="lat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lon">Longitude</label>
                                                    <input type="text" id="longitude" class="form-control" name="lon" id="lon" 21263">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <button type="button" href="#step2" class="btn btn-warning btn-flat prev-step" data-toggle="tab">Kembali</button>
                                            <button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function updateMarkerPosition(latLng) {
        document.getElementById('latitude').value = [latLng.lat()]
        document.getElementById('longitude').value = [latLng.lng()]
        }

        updateMarkerPosition(latLng);
        google.maps.event.addListener(marker, 'drag', function() {
        // ketika marker di drag, otomatis nilai latitude dan longitude
        //menyesuaikan dengan posisi marker
        updateMarkerPosition(marker.getPosition());
        });
    </script>

</body>
</html>

<?php

include "components/footer.php";

?>
