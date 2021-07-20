<?php get_header(); ?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<main>
		<div id="sub_visual">
			<div class="main_img_shadow">
				<h2>お知らせ</h2>
			</div>
			<div class="main_img bg-news"></div>
		</div>
		
		<div id="breadcrumb">
			<ul class="devsite-breadcrumb-list container">
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/">トップページ</a></li>
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/お知らせ一覧/">お知らせ一覧</a></li>
				<li class="devsite-breadcrumb-item"><a href=""><?php echo get_the_title(); ?></a></li>
			</ul>
		</div>
		
		<section id="news-article" class="contents">
			<div class="container">
				<div class="inner">
				<div class="post-article f-gothic">
					<article>
						
						<?php $categories = get_the_category();
						if ( $categories ) {
							echo '<ul>';
							foreach ( $categories as $category ) {
								echo '<li class="category '.$category->slug.'"><a href="'.esc_url(get_category_link($category->term_id)).'">'.$category->name.'</a></li>';
							} echo '</ul>';
						} ?>
						<p class="date"><?php echo get_the_date(); ?></p>
						<h3><?php echo get_the_title(); ?></h3>
						<p><?php the_content(); ?></p>
					</article>
				</div>
				<div class="pagenation container f-gothic">
					<div class="btn-back"><?php next_post_link( '%link' ); ?></div>
					<div class="btn-next"><?php previous_post_link( '%link' ); ?></div>
				</div>

				<a class="btn-home" href="<?php echo home_url(); ?>">トップページに戻る</a>
				</div>
			</div>
		</section>
	
	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?> 