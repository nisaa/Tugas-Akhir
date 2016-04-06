<?php

include "views/frontend/components/header.php";

?>

    <section id="beginning">
      <!--CAROUSEL -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="resources/images/slide1.jpg" alt="slide1">
            <div class="carousel-caption">
              <div class="slide-text">Life doesn't have Ctrl+Z<br> So typed wisely</div>
            </div>
          </div>
          <div class="item">
            <img src="resources/images/slide2.jpg" alt="slide2">
            <div class="carousel-caption">
              <div class="slide-text">When you tired of everything<br> Remember the reason you started</div>
            </div>
          </div>
          <div class="item">
            <img src="resources/images/slide3.jpg" alt="slide3">
            <div class="carousel-caption">

                <div class="slide-text">Make today awesome<br> So yesterday get jealous</div>

            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="find">
      <div class="container">
        <h2>TEMUKAN KOSAN ANDA</h2>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="panel-body">
                <form class="form-inline">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label> Fasilitas Kamar</label>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="bathroom"> Kamar Mandi Dalam
                                </label>
                            </div>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="bed"> Tempat Tidur
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="cupboard"> Lemari
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="table"> Meja
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label> Fasilitas Umum</label>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="kitchen" value=""> Dapur
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="living_room" value=""> Ruang Tamu
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="bike_parking" value=""> Parkir Motor
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="car_parking" value=""> Parkir Mobil
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-3">
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
                        <label>Harga</label>
                        <select name="price" id="" class="form-control">
                          <option> &lt;Rp 500.000/bln </option>
                          <option> Rp 500.000 - Rp 1.000.000/bln</option>
                          <option> &gt;Rp 1.000.000/bln</option>
                          <option>Pertahun</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="button-direction">
                        <button type="submit" class="btn bg-maroon btn-flat">Cari</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div><!-- /.panel-body -->
            </div><!-- /.box -->
          </div><!-- ./col -->
        </div><!-- ./row -->
      </div>
    </section>

    <section id="kost">
      <div class="container">
        <h2> INFORMASI KOSAN</h2>
        <p class="information"> E-Kosan menyediakan informasi kosan di wilayah Bandung lengkap dengan fasilitasnya. <br> Kami berharap Anda dapat menemukan kosan yang sesuai dengan keinginan Anda.</p>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Kosan Ibu Ani</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp 550.000/Bulan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image">
                          <img src="resources/images/kosan.jpg">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p> Jl. Tubagus Ismail No. 83 Bandung</p>
                        <span><b> Deskripsi</b></span>
                        <br><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.</span>
                        <p></p>
                        <p>
                          <a href="views/frontend/detail_kosan.php" class="btn btn-success btn-flat"> Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                      <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                      <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</i></td>
                      <td class="items"><i class="fa fa-car"> Parkir Mobil</i></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Kosan Bapak Didi</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp 650.000/Bulan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image">
                          <img src="resources/images/kosan.jpg">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p> Jl. Sekeloa Tengah No. 175 Bandung</p>
                        <span><b> Deskripsi</b></span>
                        <br><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.</span>
                        <p></p>
                        <p>
                          <a href="detail_kosan.php" class="btn btn-success btn-flat"> Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                      <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                      <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</i></td>
                      <td class="items"><i class="fa fa-car"> Parkir Mobil</i></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Kosan Ibu Ani</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp 550.000/Bulan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image">
                          <img src="resources/images/kosan.jpg">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p> Jl. Tubagus Ismail No. 83 Bandung</p>
                        <span><b> Deskripsi</b></span>
                        <br><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.</span>
                        <p></p>
                        <p>
                          <a href="detail_kosan.php" class="btn btn-success btn-flat"> Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                      <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                      <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</i></td>
                      <td class="items"><i class="fa fa-car"> Parkir Mobil</i></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box box-solid">
                <div class="box-header with-border">
                  <span class="box-title">Kosan Bapak Didi</span>
                  <h3 class="box-title navbar-right label label-danger"> Rp 650.000/Bulan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="image">
                          <img src="resources/images/kosan.jpg">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <p> Jl. Sekeloa Tengah No. 175 Bandung</p>
                        <span><b> Deskripsi</b></span>
                        <br><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation.</span>
                        <p></p>
                        <p>
                          <a href="detail_kosan.php" class="btn btn-success btn-flat"> Lihat</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="facilities">
                  <table class="table table-bordered text-center">
                    <tr>
                      <td class="items"><i class="fa fa-bed"> Tempat Tidur</i></td>
                      <td class="items"><i class="fa fa-tint"> Kamar Mandi Dalam</td>
                      <td class="items"><i class="fa fa-motorcycle"> Parkir Motor</i></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--h4>Kosan Baru</h4>
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="..." alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="..." alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="..." alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
            </div>
          </div>
        </div-->
      </div>
    </section>

    <section id="campus">
      <div class="container">
        <h2>CARI KOSAN SEKITAR</h2>
          <div class="row">
            <div class="col-md-3 text-center">
              <a href="" class="thumbnail">
                <img src="resources/images/unikom.png" alt="Unikom">
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="thumbnail unpad">
                <img src="resources/images/unpad.png" alt="Unpad">
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="thumbnail">
                <img src="resources/images/itb.jpg" alt="Itb">
              </a>
            </div>
            <div class="col-md-3">
              <a href="" class="thumbnail">
                <img src="resources/images/telkom.png" alt="Telkom">
              </a>
            </div>
          </div>
      </div>
    </section>

<?php

include "views/frontend/components/footer.php";

