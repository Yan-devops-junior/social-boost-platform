                </div>
            </div>
            
            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid" style="text-align: center; text-transform: capitalize;">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?php echo $config['web']['url'];?>halaman/tentang-kami" alt="Tentang Kami" title="Tentang Kami"> About </a>
                            •
                            <a href="<?php echo $config['web']['url'];?>halaman/platform-aplikasi" alt="Platform Aplikasi" title="Platform Aplikasi"> Platform </a>
                            •
                            <a href="<?php echo $config['web']['url'];?>halaman/dukungan-teknologi" alt="Dukungan Teknologi" title="Dukungan Teknologi"> Technology </a>
                            •
                            <a href="<?php echo $config['web']['url'];?>halaman/dukungan-pembayaran" alt="Dukungan Pembayaran" title="Dukungan Pembayaran"> Payment </a>
                            •
                            <a href="<?php echo $config['web']['url'];?>halaman/ketentuan-layanan" alt="Ketentuan Layanan" title="Ketentuan Layanan"> Terms </a>
                            •
                            <a href="<?php echo $config['web']['url'];?>halaman/pertanyaan-umum" alt="Pertanyaan Umum" title="Pertanyaan Umum"> Faqs </a>
                            •
                            <a href="<?php echo $config['web']['url'];?>halaman/mitra-dan-jaringan" alt="Mitra dan Jaringan" title="Mitra dan Jaringan"> Partner </a>
                        </div>
                        <div class="col-md-6">
                            Copyright &copy;<?php echo date("Y"); ?><a href="<?php echo $config['web']['url'];?>" alt="<?php echo $data['short_title']; ?>" title="<?php echo $data['short_title']; ?>"> <?php echo $data['short_title']; ?></a>.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end wrapper -->

        <!-- App js -->
        <script src="/assets/js/jquery.core.js"></script>
        <script src="/assets/js/jquery.app.js"></script>

        <?php
        include_once "SEOSecretIDN-schema-all.php";
        include_once "SEOSecretIDN-javascript-admin.php";
        ?>

    </body>
</html>