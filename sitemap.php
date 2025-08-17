<?php include('config.php');
header('Content-Type: application/xml');
'<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1" xmlns:pagemap="http://www.google.com/schemas/sitemap-pagemap/1.0" xmlns:xhtml="http://www.w3.org/1999/xhtml" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-news/0.9 https://www.google.com/schemas/sitemap-news/0.9/sitemap-news.xsd http://www.google.com/schemas/sitemap-image/1.1 https://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd http://www.google.com/schemas/sitemap-video/1.1 https://www.google.com/schemas/sitemap-video/1.1/sitemap-video.xsd http://www.google.com/schemas/sitemap-pagemap/1.0 https://www.google.com/schemas/sitemap-pagemap/1.0/sitemap-pagemap.xsd">
	<url>
	  <loc><?php echo $config['web']['url'] ?></loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-1 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>1.00</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>home/</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>auth/login</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>auth/register</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/produk-dan-layanan</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/mitra-dan-jaringan</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/dukungan-teknologi</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/hubungi-kami</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/tentang-kami</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/dukungan-pembayaran</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/platform-aplikasi</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/ketentuan-layanan</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/pertanyaan-umum</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.80</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/memulai-transaksi</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.64</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/cara-deposit</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.64</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>auth/lupa-password</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.64</priority>
	</url>
	<url>
	  <loc><?php echo $config['web']['url'] ?>halaman/daftar-harga</loc>
	  <lastmod><?php echo date('Y-m-d\\TH:i:sP', strtotime('-7 day')) ?></lastmod>
	  <changefreq>weekly</changefreq>
	  <priority>0.64</priority>
	</url>
</urlset>