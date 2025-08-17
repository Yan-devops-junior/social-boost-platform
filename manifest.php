<?php include('config.php');
header('Content-Type: application/json');
echo '
  {
    "dir": "ltr",
    "lang": "id-ID",
    "display_override": ["minimal-ui"],
    "display": "minimal-ui",
    "scope": "/",
    "start_url": "/",
    "short_name": "Queen SMM",
    "name": "Queen SMM",
    "description": "Queen SMM Panel",
    "categories": ["sosial media", "social", "marketing", "media"],
    "background_color": "#ffffff",
    "theme_color": "#D4B43F",
    "icons": [
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo32.png",
        "sizes": "32x32",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo48.png",
        "sizes": "48x48",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo72.png",
        "sizes": "72x72",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo96.png",
        "sizes": "96x96",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo144.png",
        "sizes": "144x144",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo168.png",
        "sizes": "168x168",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo180.png",
        "sizes": "180x180",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo192.png",
        "sizes": "192x192",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo256.png",
        "sizes": "256x256",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo512.png",
        "sizes": "512x512",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "'.$config['web']['url'].'assets/images/kincaimedia/blackexpo690.png",
        "sizes": "690x690",
        "type": "image/png",
        "purpose": "any maskable"
      }
    ],
    "platforms": ["play", "webapp"]
  }
';

?>