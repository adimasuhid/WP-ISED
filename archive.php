<?php get_header(); ?>

<div id="main">	
			<?php if (have_posts()) : ?>
			
			<?php if (is_category()) { ?>
				<h3 class="title">Browsing the <?php single_cat_title(); ?> category</h3>
			<?php } elseif (is_month()) {?>
				<h3 class="title">Browsing the <?php the_time('F, Y'); ?> category</h3>
			<?php } elseif (is_year()) {?>
				<h3 class="title">Browsing the <?php the_time('Y'); ?> category</h3>
			<?php } ?>
			
			<?php while (have_posts()) : the_post(); ?>
			
			<div <?php post_class(); ?>>
				<div class="content">
					<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(''); ?>
					<p class="btn"><a href="<?php the_permalink(); ?>">Read the article</a></p>
				</div>
				<div class="details">
					<ul>
						<li><?php the_time('m.d.Y.'); ?></li>
						<li><?php the_category(', '); ?></li>
					</ul>
				</div>
			</div>
			
			<?php endwhile; ?>
			
			<div class="pagination">
				<p class="older"><?php next_posts_link('Older posts'); ?></p>
				<p class="newer"><?php previous_posts_link('Newer posts'); ?></p>
			</div>
			
			<?php else : ?>
			<div class="post">
				<h3>Nothing Found</h3>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<p><a href="<?php echo get_option('home'); ?>">Return to Home</a></p>
			</div>
			<?php endif; ?>
		</div>
</div>

<?php get_footer();?>