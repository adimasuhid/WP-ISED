<?php get_header(); ?>
	<div id="main">
	
			<?php if (have_posts()) : ?>
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
					<li>
				</div>
			</div>
			
			<?php comments_template(); ?>
			
			<?php endwhile; ?>
			
			<?php else : ?>
			<div class="post">
				<h3>Nothing Found</h3>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<p><a href="<?php echo get_option('home'); ?>">Return to Home</a></p>
			</div>
			<div class="details">
				<ul>
					<li>/404</li>
				</ul>
			</div>
			<?php endif; ?>
		
		</div>
	</div>

	<?php get_footer(); ?>