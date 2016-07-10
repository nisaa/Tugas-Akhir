<?php

include "components/header.php";

?>

<section id="contact">
    <div class="container">
        <div  class="title">
            <h3>Kontak Kami</h3>
            <p>Anda memiliki pertanyaan? Kirimkan pesan Anda</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="/" method="post">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="nama">Nama*</label>
                        <input type="text" class="form-control" id="nama" required>
                      </div>
                      <div class="col-lg-6">
                        <label for="email">E-Mail*</label>
                        <input type="text" class="form-control" id="email" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subjek">Subjek*</label>
                    <input type="text" class="form-control" id="subjek" required>
                  </div>
                  <div class="form-group">
                    <label for="desc">Deskripsi*</label>
                    <textarea id="desc" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <button type="submit" class="btn btn-contact btn-flat">Kirim</button>
                </form>
            </div>

            <div class="info">
                <div class="col-lg-6">
                    <table>
                        <tr>
                          <td><strong>Alamat </strong></td>
                          <td>&nbsp;&nbsp;: </td>
                          <td>&nbsp;&nbsp;Jl. Sekeloa No. 62 Bandung</td>
                        </tr>
                        <tr>
                          <td><strong>No. Telp </strong></td>
                          <td>&nbsp;&nbsp;: </td>
                          <td>&nbsp;&nbsp;+62 853 2473 0091</td>
                        </tr>
                        <tr>
                          <td><strong>Facebook </strong></td>
                          <td>&nbsp;&nbsp;: </td>
                          <td>&nbsp;&nbsp;E-Kosan.com</td>
                        </tr>
                        <tr>
                          <td><strong>Twitter </strong></td>
                          <td>&nbsp;&nbsp;: </td>
                          <td>&nbsp;&nbsp;@ekosanbdg</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

include "components/footer.php";

?>
