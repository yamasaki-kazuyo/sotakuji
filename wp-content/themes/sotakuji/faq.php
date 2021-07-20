<?php
/**
 * Template Name: faq */
?>


<?php get_header(); ?> 

<main>
		<div id="sub_visual">
			<div class="main_img_shadow">
				<h2>よくあるご質問</h2>
			</div>
			<div class="main_img bg-faq"></div>
		</div>
		
		<div id="breadcrumb">
			<ul class="devsite-breadcrumb-list container">
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/">トップページ</a></li>
				<li class="devsite-breadcrumb-item"><a href="">よくあるご質問</a></li>
			</ul>
		</div>
		
		<section id="faq" class="contents">
			<div class="container">
				
				<div class="sidebar">
					<h3 class="ub center">FAQ</h3>
					<ul>
						<li><a href="#anchor1">宗宅寺<br><span>についてのよくあるご質問</span></a></li>
						<li><a href="#anchor2">納骨堂<br><span>についてのよくあるご質問</span></a></li>
						<li><a href="#anchor3">永代供養墓<br><span>についてのよくあるご質問</span></a></li>
					</ul>
				</div>
				
				<div class="faq-contents">
					<section id="anchor1" class="mb40">
						<h4>宗宅寺についてのよくあるご質問</h4>
						

						
						<?php
						$args = array(
							'post_type' => 'faq', // カスタム投稿タイプ 
							'tax_query' => array(
							array(
								'taxonomy' => 'blog_cat', // カスタム分類 
								'field' => 'slug',
								'terms' => 'sotakuji', // ターム item1 
								)
							)
						);
						$the_query = new WP_Query($args); if($the_query->have_posts()):
						?>

						<?php
						/* （ステップ2）データの表示 */
						//if ( $query->have_posts() ) : ?>
							<div class="accordion">
								<ul>
									<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
								
										<li>
											<a class="toggle">
												<p class="accordion_icon"><span></span><span></span></p>
												<h5><label for="ac-1"><span>Q</span><p><?php the_title(); ?></p></label></h5>
											</a>
											<div class="answer"><p><span>A</span><?php the_content(); ?></p></div>
										</li>

									<?php endwhile; ?>
								</ul>
							</div>	
							
						<?php endif; wp_reset_postdata(); ?>
						
					</section>
					
					
					
					<section id="anchor2" class="mb40">
						<h4>納骨堂についてのよくあるご質問</h4>
						<?php
						$args = array(
							'post_type' => 'faq', // カスタム投稿タイプ 
							'tax_query' => array(
							array(
								'taxonomy' => 'blog_cat', // カスタム分類 
								'field' => 'slug',
								'terms' => 'ossuary', // ターム item1 
								)
							)
						);
						$the_query = new WP_Query($args); if($the_query->have_posts()):
						?>

						<?php
						/* （ステップ2）データの表示 */
						//if ( $query->have_posts() ) : ?>
							<div class="accordion">
								<ul>
									<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
								
										<li>
											<a class="toggle">
												<p class="accordion_icon"><span></span><span></span></p>
												<h5><label for="ac-1"><span>Q</span><p><?php the_title(); ?></p></label></h5>
											</a>
											<div class="answer"><p><span>A</span><?php the_content(); ?></p></div>
										</li>

									<?php endwhile; ?>
								</ul>
							</div>	
						<?php endif; wp_reset_postdata(); ?>
					
					</section>
					
					
					
					<section id="anchor3">
						<h4>永代供養墓についてのよくあるご質問</h4>
						<?php
						$args = array(
							'post_type' => 'faq', // カスタム投稿タイプ 
							'tax_query' => array(
							array(
								'taxonomy' => 'blog_cat', // カスタム分類 
								'field' => 'slug',
								'terms' => 'eitaikuyo', // ターム item1 
								)
							)
						);
						$the_query = new WP_Query($args); if($the_query->have_posts()):
						?>

						<?php
						/* （ステップ2）データの表示 */
						//if ( $query->have_posts() ) : ?>
							<div class="accordion">
								<ul>
									<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
								
										<li>
											<a class="toggle">
												<p class="accordion_icon"><span></span><span></span></p>
												<h5><label for="ac-1"><span>Q</span><p><?php the_title(); ?></p></label></h5>
											</a>
											<div class="answer"><p><span>A</span><?php the_content(); ?></p></div>
										</li>

									<?php endwhile; ?>
								</ul>
							</div>		
						<?php endif; wp_reset_postdata(); ?>
					
					</section>
					
					
				</div>

				<a class="btn-home" href="<?php echo home_url(); ?>/">トップページに戻る</a>
			</div>
		</section>
		
	
	</main>

<?php get_footer(); ?> 