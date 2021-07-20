<?php
/**
 * Template Name: access */
?>

<?php get_header(); ?> 

	<main id="access" >

		<div id="sub_visual">
			<div class="main_img_shadow">
				<h2>アクセス</h2>
			</div>
			<div class="main_img bg-access"></div>
		</div>

	  <div id="breadcrumb">
			<ul class="devsite-breadcrumb-list container">
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>">トップページ</a></li>
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/アクセス">アクセス</a></li>
			</ul>
		</div>
		
		<section>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.1220693136074!2d135.48103822715913!3d34.591812580462474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dcf115afd43b%3A0xb271d58481e046!2z5a6X5a6F5a-6!5e0!3m2!1sja!2sjp!4v1583399382633!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</section>
		
		<section class="bg-right contents2">
			<div class="block container">
				<h3><span>浄土宗 松音山</span> 宗宅寺</h3>
				<p class="center mb20">〒590-0921 大阪府堺市堺区北半町西3-1<span class="dsp-w">　</span><br class="dsp-s">TEL 072-227-8855 / FAX 072-238-0007</p>
				<div class="common-text flexbox">
					<a class="btn no-border bg-perple" href="#anchor1"><span class="icon-train"></span>電車でのアクセス</a>
					<a class="btn no-border bg-perple" href="#anchor2"><span class="icon-bus"></span>バスでのアクセス</a>
					<a class="btn no-border bg-perple" href="#anchor3"><span class="icon-car"></span>お車でのアクセス</a>
					<a class="btn no-border bg-perple" href="#anchor4"><span class="icon-map"></span>周辺案内</a>
				</div>
			</div>
		</section>
		
		<section class="bg-dark contents">
			
			<div id="anchor1" class="common-block container mb80-w">
				<h3>電車でのアクセス</h3>
				<div class="common-text">
					<img class="mb40 dsp-w" src="<?php echo home_url(); ?>/assets/access/img/img-time-w.jpg" alt="">
					<img class="mb40 image dsp-s" src="<?php echo home_url(); ?>/assets/access/img/img-time-s.jpg" alt="">
					<p class="mb20 center">最寄りの各駅より</p>
					<table>
						<tr>
							<th>南海高野線</th>
							<td>「堺東駅」よりタクシーで約7分</td>
						</tr>
						<tr>
							<th>大阪メトロ御堂筋線</th>
							<td>「北花田駅」よりタクシーで約15分</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div id="anchor2" class="common-block container mb80-w">
				<h3>バスでのアクセス</h3>
				<div class="common-text center">
					<img class="mb40 dsp-w" src="<?php echo home_url(); ?>/assets/access/img/img-bus-w.jpg" alt="">
					<img class="mb40 image dsp-s" src="<?php echo home_url(); ?>/assets/access/img/img-bus-s.jpg" alt="">
					<p>各路線の時刻表・運行状況については、<br class="dsp-w"><a href="https://www.nankaibus.jp/">南海バス</a>のウェブサイトよりご確認ください。</p>
				</div>
			</div>
			
			<div id="anchor3" class="common-block container">
				<h3>お車でのアクセス</h3>
				<div class="common-text center">
					<img class="mb30 map" src="<?php echo home_url(); ?>/assets/access/img/heigh-way-map.png" alt="">
					<div class="flexbox mb40">
						<div class="center">
							<img class="icon" src="<?php echo home_url(); ?>/assets/access/img/icon-p-car.png" alt="">
							<h4>大阪・奈良市内、京都、兵庫<span>方面からお越しの場合</span></h4>
							<img src="<?php echo home_url(); ?>/assets/access/img/img1-1.jpg" alt="">
							<p class="f-gothic">阪神高速15号堺線「住之江出口」から、国道26号線を南に向かってお車で約5分程</p>
						</div>
						<div class="center">
							<img class="icon" src="<?php echo home_url(); ?>/assets/access/img/icon-p-car.png" alt="">
							<h4>松原、藤井寺、奈良<span>方面からお越しの場合</span></h4>
							<img src="<?php echo home_url(); ?>/assets/access/img/img1-2.jpg" alt="">
							<p class="f-gothic">阪神高速6号大和川線「鉄砲出口」から、国道26号線を南に向かってお車で約3分程</p>
						</div>
					</div>
					<p class="left">※当寺内にも駐車場はございますが、数が限られます。満車の場合は近隣のコインパーキングをご利用くださいますようお願いいたします。</p>
				</div>
			</div>
			
		</section>
		
		<section id="anchor4" class="bg-right contents">
			<div class="common-block2 container mb40">
				<h3>周辺案内</h3>
				<div class="mb40">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d821.1220693136074!2d135.48103822715913!3d34.591812580462474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dcf115afd43b%3A0xb271d58481e046!2z5a6X5a6F5a-6!5e0!3m2!1sja!2sjp!4v1583399382633!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
					<?php
						$args = array(
						  'post_type' => 'location', 
						  'posts_per_page' => -1
						); ?>

						<?php $my_query = new WP_Query( $args ); ?>
						
							<ul class="flexbox">
								<?php query_posts($query_string .'&order=DESC'); ?>
								<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

								<!-- ▽ ループ開始 ▽ -->
								  <li class="box5 f-gothic">
									<p class="title"><?php the_title(); ?></p>
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('full'); ?>
									<?php else : ?>
										<img src="<?php echo home_url(); ?>/assets/access/img/no-image.png" alt="デフォルト画像" />
									<?php endif ; ?>
									<p><?php the_content(); ?></p>
								  </li>
								<!-- △ ループ終了 △ -->

								<?php endwhile; ?>
							</ul>
						<?php wp_reset_postdata(); ?>
				</div>
			
			<a class="btn-home" href="<?php echo home_url(); ?>">トップページに戻る</a>

		</section>

	</main>

<?php get_footer(); ?> 