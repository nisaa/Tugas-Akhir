<?php

include "components/header.php";

?>

<section id="beginning">
    <div class="faq">
        <div class="container">
            <h3 class="faqs">Frequently Asked Question (FAQ)</h3>
            <hr>

            <?php
                $faq = new App\Faq;
                $faqs = $faq->fetch();

                if (count($faqs) == 0) {

                ?>
                <div>
                    Tidak ada data yang ditampilkan
                </div>

                <?php } else {
                    foreach ($faqs as $faq) {
                ?>
                <div class="list-faq">
                    <b><?= $faq['pertanyaan'] ?></b>
                    <p><?= $faq['jawaban'] ?></p>
                </div>

                <?php }
            } ?>

            <div class="operational-hour">
                <h3>Jam Operasional</h3>
                <p>
                    Senin s.d. Jumat pukul 08.00-16.00, Sabtu dan Minggu Tutup <br>Pendaftaran kosan akan dilayani saat jam operasional <br>Anda masih memiliki pertanyaan? <strong><a class="contact" href="kontak.php">Kontak</a></strong> E-Kosan
                </p>
                <table>
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
</section>

<?php

include "components/footer.php";

?>
