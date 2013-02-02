<?php get_header();?>
  <div id="main">
    <? get_sidebar(); ?>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="post">
					<h3 class="title"><?php the_title(); ?></a></h3>
					<?php the_content(''); ?>
			</div>
			
			<?php endwhile; ?>

    <?php endif; ?>

		
		</div>
	</div>
	
<?php get_footer(); ?>
