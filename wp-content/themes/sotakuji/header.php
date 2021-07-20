<!doctype html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169760162-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-169760162-1');
</script>
<meta charset="UTF-8">
<title>宗宅寺</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo home_url(); ?>/assets/common/css/ress.css">
	<link rel="stylesheet" href="<?php echo home_url(); ?>/assets/common/css/style.css">
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo home_url(); ?>/assets/home/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo home_url(); ?>/assets/home/js/imagesloaded.pkgd.min.js"></script>
	<?php wp_head(); ?>
	<script>
	jQuery(function(){
		var windowWidth = $(window).width();
		var headerHight = 60; 
		jQuery('a[href^=#]').click(function() {
		var speed = 1000;
		var href= jQuery(this).attr("href");
		var target = jQuery(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top-headerHight;
		jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	   });
	});
	</script>
</head>

<body id="<?php echo esc_attr( $post->post_name ); ?>">
	<header>
		<div id="header">
			<div class="logo-top">
				<a href="<?php echo home_url(); ?>"><h1><img id="logo" src="<?php echo home_url(); ?>/assets/common/img/logo-top.png" alt="宗宅寺"></h1></a>
			</div>
		</div>
			
			  <div class="sns head flex">
				  <a target="_blank" href="https://www.instagram.com/sotakuji_jodo/"><img src="<?php echo home_url(); ?>/assets/common/img/icon-insta-w.png" alt="instagram"></a>
				  <a target="_blank" href="https://www.facebook.com/浄土宗-宗宅寺-2085309881598863/"><img src="<?php echo home_url(); ?>/assets/common/img/icon-fb-w.png" alt="facebook"></a>
				  <a target="_blank" href="https://www.youtube.com/channel/UCJ8nndCGDRbu8WYoJ3Pcusg"><img src="<?php echo home_url(); ?>/assets/common/img/icon-yt-w.png" alt="youtube"></a>
			  </div>
		
			  <div class="el_humburger"><!--ハンバーガーボタン-->
				<div class="el_humburger_wrapper">
				  <span class="el_humburger_bar top"></span>
				  <span class="el_humburger_bar middle"></span>
				  <span class="el_humburger_bar bottom"></span>
					<p class="humburger-title">menu</p>
				</div>
			  </div>

			  <header class="navi"><!--ハンバーガー内ナビゲーション-->
				<div class="navi_inner">
				  <img class="logo-navi" src="<?php echo home_url(); ?>/assets/common/img/logo-top.png" alt="宗宅寺">
				  <div class="navi_item"><a href="<?php echo home_url(); ?>"><span class="bgi label1"></span><span class="page-title">ホーム</span></a></div>
				  <div class="navi_item"><a href="<?php echo home_url(); ?>/永代供養/"><span class="bgi label2"></span><span class="page-title">永代供養墓「蓮生」</span></a></div>
				  <div class="navi_item"><a href="<?php echo home_url(); ?>/納骨堂/"><span class="bgi label3"></span><span class="page-title">納骨堂「光明」</span></a></div>
				  <div class="navi_item"><a href="<?php echo home_url(); ?>/宗宅寺について/"><span class="bgi label4"></span><span class="page-title">宗宅寺について</span></a></div>
				  <div class="navi_item"><a href="<?php echo home_url(); ?>/アクセス/"><span class="bgi label5"></span><span class="page-title">宗宅寺へのアクセス</span></a></div>
				  <div class="navi_item"><a href="<?php echo home_url(); ?>/よくあるご質問/"><span class="bgi label6"></span><span class="page-title">よくあるご質問</span></a></div>
				  <div class="navi_item nav-btn"><a href="<?php echo home_url(); ?>/お問い合わせ/">お問い合わせ</a></div>
				</div>
				  <div class="sns flex">
					  <a target="_blank" href="https://www.instagram.com/sotakuji_jodo/"><img src="<?php echo home_url(); ?>/assets/common/img/icon-insta-w.png" alt="instagram"></a>
					  <a target="_blank" href="https://www.facebook.com/浄土宗-宗宅寺-2085309881598863/"><img src="<?php echo home_url(); ?>/assets/common/img/icon-fb-w.png" alt="facebook"></a>
					  <a target="_blank" href="https://www.youtube.com/channel/UCJ8nndCGDRbu8WYoJ3Pcusg"><img src="<?php echo home_url(); ?>/assets/common/img/icon-yt-w.png" alt="youtube"></a>
				  </div>
			  </header>

			<nav class="float_navi"><!--固定ナビゲーション-->
				<div class="f_navi_box scrollanime">
					<a href="<?php echo home_url(); ?>/お問い合わせ/"><span></span>お問い合わせ</a>
				</div>
			</nav>
			
	</header>