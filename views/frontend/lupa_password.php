<?php

include "components/header.php";

?>

<section id="forget-password">
    <div class="container">
        <div class="login-box">
            <div class="login-box-header text-center">
                Lupa Password
            </div>

            <div class="login-box-body">
                <div> Silakan masukkan email yang digunakan saat mendaftar ke E-Kosan. Kami akan mengirimkan email untuk mereset password Anda</div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" required autofocus>
                    </div>
                    <div class="form-group">
                    <label for="status">Status</label>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="radio-inline">
                            <input type="radio" name="status" id="pencari_kos" value="pencari_kos" checked required> Pencari Kos
                          </label>
                        </div>
                        <div class="col-md-6">
                          <label class="radio-inline">
                            <input type="radio" name="status" id="pemilik_kos" value="pemilik_kos" required> Pemilik Kos
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn bg-maroon btn-flat">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php

include "components/footer.php";

?>
