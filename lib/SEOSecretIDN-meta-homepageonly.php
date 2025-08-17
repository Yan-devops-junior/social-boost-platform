<!--Title-->
<title><?php echo $data['title']; ?></title>
<meta name="description" content="<?php echo $data['short_title']; ?> - <?php echo $data['deskripsi_web']; ?>"/>
<meta name="keywords" content="Kincai Media, <?php echo $data['short_title']; ?>, Portal Bisnis, Panel SMM, Jasa Youtube, Sosial Media, PPOB Terlengkap, Voucher Games, Convert Pulsa, Voucher Indodax"/>

<!--OG-->
<meta content="website" property="og:type"/>
<meta content="<?php echo $data['title']; ?>" property="og:title"/>
<meta content="<?php echo $data['short_title']; ?> - <?php echo $data['deskripsi_web']; ?>" property="og:description"/>
<meta content="<?php echo $config['web']['url_canonical'];?><?php echo $canonical ?>" property="og:url"/>
<meta content="<?php echo $data['short_title'];?>" property="og:site_name"/>
<meta content="<?php echo $data['title']; ?>" property="og:headline"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo.png" property="og:image"/>
<meta content="1920" property="og:image:width"/>
<meta content="1080" property="og:image:height"/>
<meta content="id_ID" property="og:locale"/>
<meta content="en_US" property="og:locale:alternate"/>
<meta content="true" property="og:rich_attachment"/>
<meta content="true" property="pinterest-rich-pin"/>
<meta content="<?php echo $data['facebook']; ?>" property="fb:app_id"/>
<meta content="<?php echo $data['url_facebook']; ?>" property="fb:pages"/>
<meta content="<?php echo $data['url_facebook']; ?>" property="fb:admins"/>
<meta content="<?php echo $data['facebook']; ?>" property="fb:profile_id"/>
<meta content="<?php echo $data['short_title'];?>" property="article:author"/>
<meta content="summary_large_image" name="twitter:card"/>
<meta content="@<?php echo $data['twitter']; ?>" name="twitter:site"/>
<meta content="@<?php echo $data['twitter']; ?>" name="twitter:creator"/>
<meta content="<?php echo $config['web']['url_canonical'];?><?php echo $canonical ?>" property="twitter:url"/>
<meta content="<?php echo $data['title'];?>" property="twitter:title"/>
<meta content="<?php echo $data['short_title']; ?> - <?php echo $data['deskripsi_web']; ?>" property="twitter:description"/>
<meta content="<?php echo $config['web']['url'];?>assets/images/kincaimedia/blackexpo.png" property="twitter:image"/>

<!--Adblock-->
<style>
/*Adblock*/
@keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
</style>