<?php
$fullurl = ($_SERVER['PHP_SELF']);
$trimmed = trim($fullurl, ".php");
$canonical = rtrim($trimmed, '/' . '/?');
?>

<!--Viewport -->
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta content="upgrade-insecure-requests" http-equiv="Content-Security-Policy"/>

<!--Canonical-->
<meta content="all" name="robots"/>
<link href="<?php echo $config['web']['url'];?>" rel="home"/>
<link href="<?php echo $config['web']['url_canonical'];?><?php echo $canonical ?>" rel="canonical"/>

<!--OG1-->
<meta content="article" property="og:type"/>
<meta content="<?php echo $config['web']['url_canonical'];?><?php echo $canonical ?>" rel="canonical" property="og:url"/>
<meta content="<?php echo $data['short_title'];?>" property="og:site_name"/>
<meta content="<?php echo $data['facebook']; ?>" property="fb:app_id"/>
<meta content="<?php echo $data['url_facebook']; ?>" property="fb:pages"/>
<meta content="<?php echo $data['url_facebook']; ?>" property="fb:admins"/>
<meta content="<?php echo $data['facebook']; ?>" property="fb:profile_id"/>
<meta content="<?php echo $data['short_title'];?>" property="article:author"/>
<meta content="<?php echo $config['web']['url_canonical'];?><?php echo $canonical ?>" rel="canonical" property="twitter:url"/>
<meta content="id_ID" property="og:locale"/>
<meta content="en_US" property="og:locale:alternate"/>
<meta content="true" property="og:rich_attachment"/>
<meta content="true" property="pinterest-rich-pin"/>
<meta content="summary_large_image" name="twitter:card"/>
<meta content="@<?php echo $data['twitter']; ?>" name="twitter:site"/>
<meta content="@<?php echo $data['twitter']; ?>" name="twitter:creator"/>

<!--Webapp-->
<link href="<?php echo $config['web']['url'];?>manifest.json" rel="manifest"/>
<meta content="<?php echo $config['web']['url'];?>" name="msapplication-starturl"/>
<meta content="<?php echo $config['web']['url'];?>" name="start_url"/>
<meta content="<?php echo $data['short_title'];?>" name="application-name"/>
<meta content="<?php echo $data['short_title'];?>" name="apple-mobile-web-app-title"/>
<meta content="<?php echo $data['short_title'];?>" name="msapplication-tooltip"/>
<meta content="#0D47A1" name="theme_color"/>
<meta content="#0D47A1" name="theme-color"/>
<meta content="#FFFFFF" name="background_color"/>
<meta content="#0D47A1" name="msapplication-navbutton-color"/>
<meta content="#0D47A1" name="msapplication-TileColor"/>
<meta content="#0D47A1" name="apple-mobile-web-app-status-bar-style"/>
<meta content="true" name="mssmarttagspreventparsing"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="yes" name="mobile-web-app-capable"/>
<meta content="yes" name="apple-touch-fullscreen"/>
<link href="<?php echo $config['web']['url'];?>favicon.png" rel="apple-touch-icon"/>
<link href="<?php echo $config['web']['url'];?>favicon.png" rel="shortcut icon" type="image/x-icon"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo32.png" rel="icon" sizes="32x32"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo144.png" name="msapplication-TileImage"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo180.png" rel="apple-touch-icon"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo48.png" rel="icon" sizes="48x48"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo72.png" rel="icon" sizes="72x72"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo96.png" rel="icon" sizes="96x96"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo168.png" rel="icon" sizes="168x168"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo192.png" rel="icon" sizes="192x192"/>
<link href="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo512.png" rel="icon" sizes="512x512"/>

<!--Author-->
<meta content="<?php echo $data['short_title'];?>" name="author" />
<meta content="401XD Group" name="publisher"/>

<!--verification-->
<meta name="yandex-verification" content=""/>
<meta name="p:domain_verify" content=""/>
<meta name="msvalidate.01" content=""/>
<meta name="google-site-verification" content="" />
<meta name="dmca-site-verification" content=""/>
<meta name="facebook-domain-verification" content=""/>

<!--Location-->
<meta content="ID" name="geo.region"/>
<meta content="Indonesia" name="geo.country"/>
<meta content="Indonesia" name="geo.placename"/>
<meta content="x;x" name="geo.position"/>
<meta content="x,x" name="ICBM"/>

<!--resource-->
<link href="//www.google.com" rel="preconnect dns-prefetch"/>
<link href="//www.googletagservices.com" rel="preconnect dns-prefetch"/>
<link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch"/>
<link href="//partner.googleadservices.com" rel="preconnect dns-prefetch"/>
<link href="//adservice.google.com" rel="preconnect dns-prefetch"/>
<link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch"/>
<link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch"/>
<link href="//ad.doubleclick.net" rel="preconnect dns-prefetch"/>
<link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"/>
<link href="//www.googletagmanager.com" rel="preconnect dns-prefetch"/>
<link href="//www.google-analytics.com" rel="preconnect dns-prefetch"/>
<link href="//www.recaptcha.net" rel="preconnect dns-prefetch"/>
<link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch"/>
<link href="//www.gstatic.com" rel="preconnect dns-prefetch"/>
<link href="//www.w3.org" rel="preconnect dns-prefetch"/>
<link href="//www.gstatic.com" rel="preconnect dns-prefetch"/>
<link href="//images.dmca.com" rel="preconnect dns-prefetch"/>
<link href="//apps.elfsight.com" rel="preconnect dns-prefetch"/>

<!--Adblock-->
<style>
/*Adblock*/
@keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
</style>