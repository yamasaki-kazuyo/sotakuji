<?php get_header("home"); ?> 
	
	
	<main class="front-page">
		<div id="main_visual">
			<ul class="slider">
				<li>
					<div class="slide-top">
						<div class="block">
							<img class="dsp-w" src="<?php echo home_url(); ?>/assets/home/img/slide-copy1.png" alt="">
							<img class="dsp-s" src="<?php echo home_url(); ?>/assets/home/img/slide-copy1-s.png" alt="">
							<a href="<?php echo home_url(); ?>/宗宅寺について/">宗宅寺について</a>
						</div>
					</div>
					<div class="slide-bottom">
						<img src="<?php echo home_url(); ?>/assets/home/img/slide01.jpg" alt="">
					</div>
				</li>
				<li>
					<div class="slide-top">
						<div class="block">
							<img class="dsp-w" src="<?php echo home_url(); ?>/assets/home/img/slide-copy2.png" alt="">
							<img class="dsp-s" src="<?php echo home_url(); ?>/assets/home/img/slide-copy2-s.png" alt="">
							<a href="<?php echo home_url(); ?>/永代供養/">永代供養墓「蓮生」</a>
						</div>
					</div>
					<div class="slide-bottom">
						<img src="<?php echo home_url(); ?>/assets/home/img/slide02.jpg" alt="">
					</div>
				</li>
				<li>
					<div class="slide-top">
						<div class="block">
							<img class="dsp-w" src="<?php echo home_url(); ?>/assets/home/img/slide-copy4.png" alt="">
							<img class="dsp-s" src="<?php echo home_url(); ?>/assets/home/img/slide-copy4-s.png" alt="">
							<a href="<?php echo home_url(); ?>/納骨堂/">納骨堂「光明」</a>
						</div>
					</div>
					<div class="slide-bottom">
						<img src="<?php echo home_url(); ?>/assets/home/img/slide03.jpg" alt="">
					</div>
				</li>
				<li>
					<div class="slide-top">
						<div class="block">
							<img class="dsp-w" src="<?php echo home_url(); ?>/assets/home/img/slide-copy3.png" alt="">
							<img class="dsp-s" src="<?php echo home_url(); ?>/assets/home/img/slide-copy3-s.png" alt="">
							<a href="<?php echo home_url(); ?>/アクセス/">アクセス</a>
						</div>
					</div>
					<div class="slide-bottom">
						<img src="<?php echo home_url(); ?>/assets/home/img/slide04.jpg" alt="">
					</div>
				</li>
			</ul>
		</div>
		
		
		<dection id="live">
			<?php
			$loop = new WP_Query(array("post_type" => "live",'posts_per_page' => 1,));
			if ( $loop->have_posts() ) : 
			?>
				<?php while($loop->have_posts()): $loop->the_post();?>
					<div class="container yt-wrapper"><?php the_content(); ?></div>
					<?php endwhile;?>
				<?php else : ?>
				<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			
		</dection>

		
			
		<?php
			$loop = new WP_Query(array("post_type" => "important-notices",'posts_per_page' => 3,));
			if ( $loop->have_posts() ) : 
		?>
				<section id="important-notices">
					<div class="container">
						<div class="inner">
						<div class="box"><p class="f-gothic">重要なお知らせ</p></div>
						<ul>
							<?php while($loop->have_posts()): $loop->the_post();?>
							<!-- ▽ ループ開始 ▽ -->
							<li class="f-gothic">
								<a href="<?php the_permalink(); ?>">
									<p class="date"><?php echo get_the_date(); ?></p>
									<p class="title"><?php the_title(); ?></p>
								</a>
							</li>
							<!-- △ ループ終了 △ -->
							<?php endwhile;?>
						</ul>
						</div>
					</div>
				</section>
				<?php else : ?>
				<?php endif; ?>
					
			<?php wp_reset_postdata(); ?>
		
		
		<section id="sns">
			<div class="container flex">
				<div class="yt">
					<h2>YouTube</h2>
					<div class="f-gothic">
						<p class="tag">最新動画</p>
						<div class="outer">
							<iframe src="https://www.youtube.com/embed/?list=UUJ8nndCGDRbu8WYoJ3Pcusg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<a target="_blank" class="btn2" href="https://www.youtube.com/channel/UCJ8nndCGDRbu8WYoJ3Pcusg"><img src="<?php echo home_url(); ?>/assets/home/img/image-icon.jpg" alt="">松音山 宗宅寺【公式チャンネル】</a>
						<a target="_blank" class="btn3" href="https://www.youtube.com/channel/UCJ8nndCGDRbu8WYoJ3Pcusg">YouTube公式チャンネルはこちら</a>
					</div>
				</div>
				<div class="fb">
					<h2>facebook</h2>
					<div class="dsp-w">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E6%25B5%2584%25E5%259C%259F%25E5%25AE%2597-%25E5%25AE%2597%25E5%25AE%2585%25E5%25AF%25BA-2085309881598863%2F&tabs=timeline&width=460&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="460" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
					<div class="dsp-s">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%25E6%25B5%2584%25E5%259C%259F%25E5%25AE%2597-%25E5%25AE%2597%25E5%25AE%2585%25E5%25AF%25BA-2085309881598863&tabs=timeline&width=335&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="335" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
					</div>
				</div>
			</div>
		</section>
		
		<section id="main-menu">
			<div class="block menu1">
				<a href="<?php echo home_url(); ?>/永代供養/"><h2>永代供養墓「蓮生」</h2><h3>Eternal memorial</h3></a>
			</div>
			<div class="block menu2">
				<a href="<?php echo home_url(); ?>/納骨堂/"><h2>納骨堂「光明」</h2><h3>Ossuary</h3></a>
			</div>
			<div class="block bottom menu3">
				<a href="<?php echo home_url(); ?>/宗宅寺について/"><h2>宗宅寺について</h2><h3>About</h3></a>
			</div>
			<div class="block bottom menu4">
				<a href="<?php echo home_url(); ?>/アクセス/"><h2>アクセス</h2><h3>Access</h3></a>
			</div>
			<div class="block bottom menu5">
				<a href="<?php echo home_url(); ?>/よくあるご質問/"><h2>よくあるご質問</h2><h3>Q &amp; A</h3></a>
			</div>
		</section>
		
		<section id="news" class="contents">
			<div class="bg-img"><img src="<?php echo home_url(); ?>/assets/common/img/bg-img01.png" alt=""></div>
			<div class="container">
				<div class="center">
					<h2>お知らせ</h2>
					<h3>News</h3>
				</div>
				<ul class="news-block grid">

					
					<?php
					$paged = (int) get_query_var('paged');
					$args = array(
						'posts_per_page' => 10,
						'paged' => $paged,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'post_type' => 'post',
						'post_status' => 'publish'
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					
					<a href="<?php the_permalink(); ?>">
					
						<li class="news-box grid-item">
							<div class="news-img">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('full'); ?>
								<?php else : ?>
									<img src="<?php echo home_url(); ?>/assets/home/img/no-img.jpg" alt="デフォルト画像" />
								<?php endif ; ?>
							</div>
							<p class="title">
								<?php
								if(mb_strlen($post->post_title, 'UTF-8')>21){
									$title= mb_substr($post->post_title, 0, 21, 'UTF-8');
									echo $title.'…';}
								else{echo $post->post_title;
								} ?>
							</p>
							<p class="date"><?php echo get_the_date(); ?></p>
							<div class="description"><?php the_excerpt(); ?></div>
							<?php $categories = get_the_category();
							if ( $categories ) {
								echo '<ul>';
								foreach ( $categories as $category ) {
									echo '<li class="category '.$category->slug.'"><a href="'.esc_url(get_category_link($category->term_id)).'"><span>'.$category->name.'</span></a></li>';
								} echo '</ul>';
							} ?>
						</li>
					</a>
					
					<?php endwhile; endif; ?>				
				
				</ul>
				
				<a class="btn" href="<?php echo home_url(); ?>/お知らせ一覧/">お知らせ一覧を見る</a>
			</div>
		</section>
	
	</main>

<?php get_footer("home"); ?> 