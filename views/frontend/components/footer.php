    <script>
    $(function () {
        <?php if (isset($_SESSION['error']['login'])) { ?>
            $("#modalMasuk").modal("show");
        <?php
        }

        if (isset($_SESSION['error']['register'])) { ?>
            $("#modalDaftar").modal("show");
        <?php } ?>
    });
    </script>

    <?php unset($_SESSION['error']); ?>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-2"><a href="tentang.php">Tentang E-Kosan</a></div>
                <div class="col-xs-1"><a href="faq.php">FAQ</a></div>
                <div class="col-xs-6"><a href="kontak.php">Kontak</a></div>
                <div class="col-xs-3 copyright">&copy; 2016 e-kosan.com</div>
            </div>
        </div>
    </footer>
