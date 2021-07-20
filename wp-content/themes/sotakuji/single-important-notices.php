<?php get_header(); ?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<main>
		<div id="sub_visual">
			<div class="main_img_shadow">
				<h2>重要なお知らせ</h2>
			</div>
			<div class="main_img bg-news"></div>
		</div>
		
		<div id="breadcrumb">
			<ul class="devsite-breadcrumb-list container">
				<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/">トップページ</a></li>
				<li class="devsite-breadcrumb-item"><a href=""><?php echo get_the_title(); ?></a></li>
			</ul>
		</div>
		
		<section id="news-article" class="contents important-notices">
			<div class="container">
				
				<div class="post-article important-notices f-gothic">
					<article>
						<p class="date"><?php the_date(); ?></p>
						<h2 class="f-gothic"><?php echo get_the_title(); ?></h2>
						<p class="post-text"><?php the_content(); ?></p>
					</article>
				</div>

				<a class="btn-home" href="<?php echo home_url(); ?>">トップページに戻る</a>
			</div>
		</section>
	
	</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?> 