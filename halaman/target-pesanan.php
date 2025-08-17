<?php
if (!isset($_SESSION)) {
	session_start();
}
require '../config.php';
require '../lib/header.php';
?>
<!--Title-->
<title>Contoh Target Pesanan</title>
<meta name="description" content="Contoh Target Pesanan Layanan SMM Panel Indonesia dan Pulsa H2H Sistem PPOB di <?php echo $data['title']; ?>."/>

<!--OG2-->
<meta content="Contoh Target Pesanan Produk dan Layanan <?php echo $data['short_title']; ?>" property="og:title"/>
<meta content="Contoh Target Pesanan Layanan SMM Panel Indonesia dan Pulsa H2H Sistem PPOB di <?php echo $data['title']; ?>." property="og:description"/>
<meta content="<?php echo $data['short_title']; ?> - Contoh Target Pesanan Produk dan Layanan <?php echo $data['short_title']; ?>" property="og:headline"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/halaman/tentang-kami.png" property="og:image"/>
<meta content="Contoh Target Pesanan Produk dan Layanan <?php echo $data['short_title']; ?>" property="twitter:title"/>
<meta content="Contoh Target Pesanan Layanan SMM Panel Indonesia dan Pulsa H2H Sistem PPOB di <?php echo $data['title']; ?>." property="twitter:description"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/halaman/tentang-kami.png" property="twitter:image"/>

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <center>                                
                <h1 class="m-t-0 text-uppercase text-center header-title"><b>Contoh Target Pesanan</b></h1>
            </center><br/>

            <div class="card">
                <div class="card-body table-responsive">
                    <center><h2 class="text-uppercase text-center header-title"><i class="mdi mdi-earth mr1 text-primary"></i> <b>Layanan Sosial Media</b></h2>
                        <div class="box-content text-center">
                            <a href="/halaman/target-pesanan" title="Target Pesanan SMM <?php echo $data['short_title'];?>" alt="Target Pesanan SMM <?php echo $data['short_title'];?>"> <img src="/assets/images/halaman/target-pesanan-smm.png" class="img-responsive" style="max-width: 95%;min-width: 250px;"></a>
                        </div><br/>
                    </center>
                    <b>Facebook</b>
                    <ul>
                        <li>Page Likes, Page Followers, Profil Followers, Friends : Link halaman atau profil facebook // Contoh : https://www.facebook.com/kincaimedia/</li>
                        <li>Post Likes, Post Commnents, Post Video, Emoticion Likes : Link postingan facebook // Contoh : https://www.facebook.com/KincaiMedia/posts/722289351896143 (diawali dengan m.facebook.com jika link dari mobile)</li>
                        <li>Video Views, Live Streaming : Link video facebook // Contoh : https://www.facebook.com/KincaiMedia/videos/722289351896143 (link terdapat di tanggal postingan, di bawah nama akun. Didapat dengan klik kanan tanggal postingan & copy link address, diawali dengan m.facebook.com jika link dari mobile)</li>
                        <li>Group Members : Link group facebook // Contoh : https://www.facebook.com/groups/forumadsenseindonesia</li>
                    </ul>

                    <b>Instagram</b>
                    </p><ul>
                        <li>Followers, Story Views, Live Video, Profil Visits : Username akun Instagram tanpa tanda @ // Contoh : kincaimedia</li>
                        <li>Likes, Video Views, Comments, Impressions, Saves, IGTV : Link postingan akun Instagram // Contoh : https://www.instagram.com/p/CDIDw7IDVAN/</li>
                    </ul>

                    <b>Likee App</b>
                    <ul>
                        <li>Followers : Link akun likee // Contoh : https://likee.com/@******** atau https://likee.video/@********</li>
                        <li>Post Likes : Link video likee // Contoh : https://likee.com/@********/video/********* atau https://likee.video/@********/video/*********</li>
                    </ul>

                    <b>LinkedIn</b>
                    <ul>
                        <li>Followers : Link akun LinkedIn // Contoh : https://www.linkedin.com/in/AdiGunawanXD/</li>
                        <li>Likes, Comments : Link postingan LinkedIn // Contoh : https://www.linkedin.com/posts/activity-6692343185995288576-wZxD/</li>
                    </ul>

                    <b>Pinterest</b>
                    <ul>
                        <li>Account Followers : Link akun Pinterest // Contoh : https://id.pinterest.com/KMPanel/</li>
                        <li>Board Follower : Link board Pinterest // Contoh : https://id.pinterest.com/KMPanel/km-panel/</li>
                        <li>Likes : Link postingan Pinterest // Contoh : https://id.pinterest.com/pin/754493743820940621/</li>
                    </ul>

                    <b>SoundCloud</b>
                    <ul>
                        <li>Followers : Link akun SoundCloud // Contoh : https://soundcloud.com/adigunawanxd</li>
                        <li>Plays, Likes : Link konten/lagu/musik/sounds // Contoh : https://soundcloud.com/jrocks1spirit/j-rocks-lepaskan-diriku-chord-mp3-lirik-download-free-live-album-lagu-acoustic-akustik-terbaru-jerome-polin-jepang-topeng-sahabat-ceria-lepaskandiriku-kaucurilagi-tersesal-fallininlove-meraihmimpi</li>
                    </ul>

                    <b>Spotify</b>
                    <ul>
                        <li>Follower : Link akun Spotify // Contoh : https://open.spotify.com/artist/3zkqzEu0nHPDeP93vvY49U</li>
                        <li>Plays : Link konten/lagu/musik/sounds // Contoh : https://open.spotify.com/track/4lv41kISupmlA1USRpqc8D</li>
                        <li>Albums, Playlist : Link albums atau playlist // Contoh : https://open.spotify.com/album/4qYlQgEeEeFQ1rl9IYNVoj atau https://open.spotify.com/playlist/5Cv0perCVlUk3iboUtHs7x</li>
                    </ul>

                    <b>Telegram</b>
                    <ul>
                        <li>Channel Member : Link channel Telegram // Contoh : https://t.me/codeigniterindonesia</li>
                        <li>Post Views : Link channel Telegram tempat postingan // Contoh : https://t.me/codeigniterindonesia (berdasarkan last post postingan Anda di channel tersebut)</li>
                    </ul>

                    <b>Tiktok</b>
                    <ul>
                        <li>Follower : Link profil Tiktok // Contoh : https://www.tiktok.com/@igsenjateduhnews</li>
                        <li>Views, Likes, Comments, Shares : Link video Tiktok // Contoh : https://www.tiktok.com/@igsenjateduhnews/video/6913480030462954754 atau copy link via App Tiktok</li>
                    </ul>

                    <b>Twitch</b>
                    <ul>
                        <li>Follower : Link profil Twitch // Contoh : https://www.twitch.tv/esportsarena</li>
                    </ul>

                    <b>Twitter</b>
                    <ul>
                        <li>Follower, Profil Click : Link profil atau username Twitter tanpa tanda @ // Contoh : https://twitter.com/KincaiMedia atau KincaiMedia</li>
                        <li>Retweet, Comments, Shares, Likes, Favorites, Hashtag Clicks : Link postingan twitter // Contoh : https://twitter.com/kincaimedia/status/1351742017726889984</li>
                        <li>Views, Video Views, Impression, Live : Link video twitter // Contoh : https://twitter.com/zakizuraimi/status/1360547605290229774 atau https://twitter.com/i/status/1360547605290229774</li>
                        <li>Poll Votes : Link dengan botton number// Contoh : www....com?vote=ButtonNumber</li>
                    </ul>

                    <b>Website</b>
                    <ul>
                        <li>Web Traffic : Link home page situs web atau link artikel // Contoh : https://smm.kincaiseluler.my.id/ atau https://smm.kincaiseluler.my.id/halaman/produk-dan-layanan</li>
                    </ul>

                    <b>Youtube</b>
                    <ul>
                        <li>Subscribers : Link channel youtube // Contoh : https://www.youtube.com/channel/UChqhDAG5foszPZVGeA98HbQ atau https://www.youtube.com/c/kincaimedia</li>
                        <li>Watchtimes (Jam Tayang), Viewers atau Video Views, Live Streaming, Premier atau Tayang Perdana, Likes, Dislikes, Shares, Comments : Link video youtube // Contoh : https://www.youtube.com/watch?v=SAkFxg75EAM atau https://youtu.be/SAkFxg75EAM</li>
                    </ul>

                    <b>Tokopedia</b>
                    <ul>
                        <li>Tokopedia Followers : Username akun Tokopedia atau link toko // Contoh : kincaimedia atau https://www.tokopedia.com/kincaimedia</li>
                        <li>Tokopedia Wishlist atau Favorite : Link produk tokopedia // Contoh : https://www.tokopedia.com/kincaimedia/barang-premium
                        </li>
                    </ul>

                    <b>Shopee</b>
                    <ul>
                        <li>Followers : Username akun Shopee atau link toko // Contoh : kincaimedia atau https://shopee.co.id/kincaimedia</li>
                        <li>Product Likes : Link produk shopee // Contoh : https://shopee.co.id/M231-Kemeja-Pria-Batik-Navy.197800</li>
                        <li>Product Soldout atau Terjual : Username, password, dan link product akun shopee // Contoh : kincaimedia|kincai12345|https://shopee.co.id/M231-Kemeja-Pria-Batik-Navy.197800</li>
                        <li>Feed Likes, Feed Comments : Link feed postingan shopee // Contoh : https://feeds.shopee.co.id/share/AAg95N2FBABgpfkFAAAAAA==</li>
                    </ul>

                    <b>Bukalapak</b>
                    <ul>
                        <li>Followers : Username akun Bukalapak atau link toko // Contoh : kincaimedia atau https://www.bukalapak.com/u/kincaimedia</li>
                        <li>Product Likes, Product Soldout atau Terjual : Link produk bukalapak // Contoh : https://shopee.co.id/ASUS-K413EA-AM553IPS-14-i5-1135G7-Iris-8G-512G-IPS-TRANS-SLVR-NBLK-OPI-i.54873248.5578056435</li>
                    </ul>

                    <b>SEO (Search Engine Optimization)</b>
                    <ul>
                        <li>Youtube Social Shares : link video youtube // Contoh : https://www.youtube.com/watch?v=SAkFxg75EAM atau https://youtu.be/SAkFxg75EAM</li>
                    </ul>

                    <b>Jasa Programming</b>
                    <ul>
                        <li>Jasa Pembuatan APK Android, iOS, Website, Desktop : Nomor Whatsapp // Contoh : 082377823390</li>
                    </ul>

                </div>

            </div>
            
        </div> <!-- card-box -->
    </div> <!-- /col-md-12 -->
</div> <!-- /row -->

</div>
<!-- end container -->
</div>
<!-- end content -->

<?php
require '../lib/footer.php';
?>               