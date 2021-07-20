<?php
/**
 * Template Name: page-contact-confirm */
?>

<?php get_header(); ?> 

	<main id="page-contact" >

		<div id="sub_visual">
			<div class="main_img_shadow">
				<h2>お問い合わせ</h2>
			</div>
			<div class="main_img bg-news"></div>
		</div>

	  <div id="breadcrumb">
			<ul class="devsite-breadcrumb-list container">
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/お問い合わせ">お問い合わせ</a></li>
			</ul>
		</div>
		

		<section class="bg-right contents">
			<div class="common-block container">
				<h3>お問い合わせが完了しました</h3>
				<div class="common-text center">
					<p class="center mb20">お問い合わせいただき、ありがとうございます。<br>数分以内に自動返信メールが届きます。<br>もし、届かない場合は「迷惑メールフォルダ」をご確認ください。<br><br>自動返信メールが届かない場合、送信エラーの可能性もありますので<br>再度お問い合わせいただくか、下記のメールアドレスへ直接ご連絡ください。<br><br>お問い合わせいただいた内容につきましては<br>近日中にお返事させていただきます。<br></p>
					<a class="text-link-mail" href="mailto:sotakuji@gmail.com">sotakuji@gmail.com</a>
				</div>
			</div>
		</section>
		
		<section class="bg-dark contents">
			<div class="container">
				<a class="btn-home" href="<?php echo home_url(); ?>">トップページに戻る</a>
			</div>
		</section>

	</main>

<?php get_footer(); ?> 