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
                            <form action="" method="post">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="step1">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_kosan">Nama Kosan</label>
                                                    <input type="text" class="form-control" name="nama_kosan" id="nama_kosan" required autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_kosan">Alamat Kosan</label>
                                                    <input type="text" class="form-control" name="alamat_kosan" id="alamat_kosan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_hunian">Peruntukan Penghuni</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="pria" value="pria" required> Pria
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="wanita" value="wanita" required> Wanita
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="radio-inline">
                                                            <input type="radio" name="jenis_hunian" id="pw" value="pw" required> Pria &amp; Wanita
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mayoritas_penghuni">Mayoritas Penghuni</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="pelajar" id="pelajar" value="pelajar" required> Pelajar
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="mahasiswa" id="mahasiswa" value="mahasiswa" required> Mahasiswa
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="mahasiswi" id="mahasiswi" value="mahasiswi" required> Mahasiswi
                                                          </label>
                                                        </div>
                                                      </div>

                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="karyawan" id="karyawan" value="karyawan" required> Karyawan
                                                          </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <label class="checkbox-inline">
                                                            <input type="checkbox" name="karyawati" id="karyawati" value="karyawati" required> Karyawati
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
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
                                                <div class="form-group">
                                                    <label>Harga Sewa Utama</label>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="input-group">
                                                              <div class="input-group-addon">Rp</div>
                                                              <input type="text" class="form-control" id="exampleInputAmount" placeholder="Misal: 500000">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select name="harga_kosan" id="" class="form-control">
                                                              <option>/Bln</option>
                                                              <option>/Thn</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_sewa2">Keterangan Harga Sewa</label>
                                                    <input type="text" class="form-control" name="harga_sewa2" id="harga_sewa2" required placeholder="Misal: Rp 750.000/Bln">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_pemilik">Nama Pemilik</label>
                                                    <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nomor_tlp">Nomor Telepon Utama</label>
                                                    <input type="text" class="form-control" name="nomor_tlp" id="nomor_tlp" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nomor_tlp2">Nomor Telepon Kedua</label>
                                                    <input type="text" class="form-control" name="nomor_tlp2" id="nomor_tlp2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gambar_kosan">Foto Kos</label>
                                                    <input type="file" name="gambar_kosan" id="gambar_kosan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keterangan">Deskripsi Kos</label>
                                                    <textarea id="keterangan" cols="10" rows="5" class="form-control" required></textarea>
                                                </div>
                                                <div class="text-right">
                                                    <button type="button" name="button" href="#step2" data-toggle="tab" class="btn btn-success btn-flat">Selanjutnya</button>
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
                                                <input type="checkbox" name="kamar_mandi_dalam" id="kamar_mandi_dalam" value="kamar_mandi_dalam" required> Kamar Mandi Dalam
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tempat_tidur" id="tempat_tidur" value="tempat_tidur" required> Tempat Tidur
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="lemari" id="lemari" value="lemari" required> Lemari
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="meja" id="meja" value="meja" required> Meja
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="ac" id="ac" value="ac" required> AC
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tv" id="tv" value="tv" required> TV
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tv_kabel" id="tv_kabel" value="tv_kabel" required> TV Kabel
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kipas_angin" id="kipas_angin" value="kipas_angin" required> Kipas Angin
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="air_panas" id="air_panas" value="air_panas" required> Air Panas
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="telepon" id="telepon" value="telepon" required> Telepon
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="wastafel" id="wastafel" value="wastafel" required> Wastafel
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="internet" id="internet" value="internet" required> Internet
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kulkas" id="kulkas" value="kulkas" required> Kulkas
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="rak_buku" id="rak_buku" value="rak_buku" required> Rak Buku
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
                                                <input type="checkbox" name="dapur_bersama" id="dapur_bersama" value="dapur_bersama" required> Dapur Bersama
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="ruangan_tamu" id="ruangan_tamu" value="ruangan_tamu" required> Ruangan Tamu
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="parkir_motor" id="parkir_motor" value="parkir_motor" required> Parkir Motor
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="parkir_mobil" id="parkir_mobil" value="parkir_mobil" required> Parkir Mobil
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kamar_mandi_bersama" id="kamar_mandi_bersama" value="kamar_mandi_bersama" required> Kamar Mandi Bersama
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kulkas_bersama" id="kulkas_bersama" value="kulkas_bersama" required> Kulkas Bersama
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="kantin" id="kantin" value="kantin" required> Kantin
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="mesin_cuci" id="mesin_cuci" value="mesin_cuci" required> Mesin Cuci
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="wifi" id="wifi" value="wifi" required> Wifi
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="pembantu" id="pembantu" value="pembantu" required> Pembantu
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="tv_bersama" id="tv_bersama" value="tv_bersama" required> TV Bersama
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="cctv" id="cctv" value="cctv" required> CCTV
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="ruangan_makan" id="ruangan_makan" value="ruangan_makan" required> Ruangan Makan
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="Dispenser" id="Dispenser" value="Dispenser" required> Dispenser
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
                                                <input type="checkbox" name="warnet" id="warnet" value="warnet" required> Warnet
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="warteg" id="warteg" value="warteg" required> Warteg
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="balai_kesehatan" id="balai_kesehatan" value="balai_kesehatan" required> Balai Kesehatan
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="masjid" id="masjid" value="masjid" required> Masjid
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="gereja" id="gereja" value="gereja" required> Gereja
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="bank" id="bank" value="bank" required> Bank
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="indomaret" id="indomaret" value="indomaret" required> Indomaret
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="alfamart" id="alfamart" value="alfamart" required> Alfamart
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="circle_k" id="circle_k" value="circle_k" required> Circle K
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="mall" id="mall" value="mall" required> Mall
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="supermarket" id="supermarket" value="supermarket" required> Supermarket
                                              </label>
                                            </div>
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="rumah_sakit" id="rumah_sakit" value="rumah_sakit" required> Rumah Sakit
                                              </label>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-4">
                                              <label class="checkbox-inline">
                                                <input type="checkbox" name="akses_transportasi" id="akses_transportasi" value="akses_transportasi" required> Dekat Akses Kendaraan Umum
                                              </label>
                                            </div>
                                          </div>

                                          <div class="text-right">
                                            <button type="button" name="button" href="#step1" data-toggle="tab" class="btn btn-warning btn-flat">Kembali</button>
                                            <button type="button" name="button" href="#step3" data-toggle="tab" class="btn btn-success btn-flat">Selanjutnya</button>
                                          </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="step3">
                                        <section id="map-canvas">
                                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBm3VfroAQ3A8G48t2bHaELoKC_7MG3mmg"></script>
                                                <div id="map"></div>
                                        </section>

                                        <div class="form-group">
                                            <label for="nama">Nama Kosan di Map</label>
                                            <input type="text" class="form-control" name="nama" id="nama" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat Kosan di Map</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="lat">Latitude</label>
                                            <input type="text" id="latitude" class="form-control" name="lat" id="lat" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label for="lon">Longitude</label>
                                            <input type="text" id="longitude" class="form-control" name="lon" id="lon" required>
                                        </div>
                                        <div class="text-right">
                                            <button type="button" name="button" href="#step2" class="btn btn-warning btn-flat" data-toggle="tab">Kembali</button>
                                            <button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
                                        </div>
                                        <script type="text/javascript">
                                            $('div#step2').on('shown.bs.tab', function (e) {
                                              $("a#step2").parentsUntil('li').addClass('.active');
                                            })

                                            //* Fungsi untuk mendapatkan nilai latitude longitude
                                            function updateMarkerPosition(latLng) {
                                            document.getElementById('latitude').value = [latLng.lat()]
                                            document.getElementById('longitude').value = [latLng.lng()]
                                            }

                                            var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 12,
                                            // Nilai 5.381281, 95.954826 adalah Nilai Latitude dan Longitude titik kordinat Kota Sigli
                                            center: new google.maps.LatLng(-6.914937110178531, 107.60548365380862),
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

                                            updateMarkerPosition(latLng);
                                            google.maps.event.addListener(marker, 'drag', function() {
                                            // ketika marker di drag, otomatis nilai latitude dan longitude
                                            //menyesuaikan dengan posisi marker
                                            updateMarkerPosition(marker.getPosition());
                                            });
                                        </script>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>




<?php

include "components/footer.php";

?>
