<?php
/**
 * Template Name: page-contact */
?>

<?php get_header(); ?> 

	<main id="page-contact" >

		<div id="sub_visual">
			<div class="main_img_shadow">
				<h2>お問い合わせ</h2>
			</div>
			<div class="main_img bg-contact"></div>
		</div>

	  <div id="breadcrumb">
			<ul class="devsite-breadcrumb-list container">
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/お問い合わせ">お問い合わせ</a></li>
			</ul>
		</div>
		
		<section class="bg-dark contents">
			<div class="common-block container">
				<h3>お問い合わせいただく前に</h3>
				<div class="common-text">
					<p class="center mb20">お問い合わせの前に、<br class="dsp-ws">まずこちらをご覧ください。</p>
					<a class="btn no-border bg-perple" href="<?php echo home_url(); ?>/よくあるご質問">よくあるご質問</a>
				</div>
			</div>
		</section>
		
		<section class="bg-right contents">
			<div class="common-block container">
				<h3>メールでのお問い合わせ</h3>
				<div class="common-text">
					<p class="center mb20">お問い合わせ内容をご入力いただき、利用規約をご確認の上、送信ボタンを押してください。<br>お問い合わせいただきました内容については、約７〜10日以内に確認を行いお返事いたします。<br><span>※このメールフォームは見学希望日をご連絡いただくものではありません。<br>当寺へのご見学をご希望の方は、ご相談の後に決定させていただきます。</span></p>
					<p class="fs14 center"><span>＊</span>は入力必須項目です</p>
				</div>
				
				<div class="contact-form">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>	
				
			</div>
			<div class="common-block container center">
				<h3>お電話でのお問い合わせ</h3>
				<div class="common-text">
					<p>お急ぎの場合はお電話にて<br class="dsp-ws">お問い合わせください。</p>
					<div>
						<p class="tel">TEL.072-227-8855</p>
						<p class="time">受付時間 8:00〜21:00</p>
					</div>
				</div>	
			</div>

		</section>

	</main>

<?php get_footer(); ?> 