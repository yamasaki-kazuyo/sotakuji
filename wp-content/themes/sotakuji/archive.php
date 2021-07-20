<?php
/**
 * Template Name: archive */
?>


<?php get_header(); ?> 

<main>
	
	<div id="sub_visual">
		<div class="main_img_shadow">
			<h2>お知らせ一覧</h2>
		</div>
		<div class="main_img bg-news"></div>
	</div>
		
	<div id="breadcrumb">
		<ul class="devsite-breadcrumb-list container">
			<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/">トップページ</a></li>
			<li class="devsite-breadcrumb-item"><a href="<?php echo home_url(); ?>/お知らせ一覧/">お知らせ一覧</a></li>
		</ul>
	</div>
	
	<section id="news" class="contents bg-dark">
			<div class="container">
				<div class="center">
					<h2>お知らせ一覧</h2>
					<h3>News</h3>
				</div>
				<ul class="news-block grid">

					<?php
					$paged = (int) get_query_var('paged');
					$args = array(
						'posts_per_page' => 16,
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
				
				<div class="pagination">
					<?php
					if ($the_query->max_num_pages > 1) {
						echo paginate_links(array(
							'base' => get_pagenum_link(1) . '%_%',
							'format' => 'page/%#%/',
							'current' => max(1, $paged),
							'total' => $the_query->max_num_pages
						));
					}
					?>

					<?php wp_reset_postdata(); ?>
				</div>
				
			</div>
			<a class="btn-home" href="<?php echo home_url(); ?>/">トップページに戻る</a>
		
		</section>

</main>

<?php get_footer(); ?> 