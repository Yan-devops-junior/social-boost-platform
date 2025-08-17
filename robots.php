<?php include('config.php');

header('Content-Type: text/plain');
echo '
#Hello search engine
#I am robots.txt
#I am very happy to be crawled

User-agent: Mediapartners-Google
Disallow: 

User-agent: *
Disallow: 

Sitemap: '.$config['web']['url'].'sitemap.xml
Sitemap: '.$config['web']['url'].'rss.xml
';

?>