<?php $page='index' ?>

<?php get_header(); ?>

<div id="banner">
	<div id="message">
		<h1>Be a Social Entrepreneur!</h1>
		Because now is the time to change the world
		<br>
		<div class="button">Learn More</div>
	</div>
</div>

<?php include('navigation.php');?>

<div id="slider-wrapper">
	<div id="slider" class="nivoSlider"> 
		<img src="<?php bloginfo('template_url'); ?>/images/bcfy_200.jpg" data-transition="fade" title="Helping Hands: BCFY Initatives"/> 
		<img src="<?php bloginfo('template_url'); ?>/images/gk_kids_200.jpg" data-transition="fade" title="GK Sinag Build"/> 
		<img src="<?php bloginfo('template_url'); ?>/images/heart_200.jpg"  data-transition="fade" title="Pinoy Pride: Works of Heart"/> 
	</div> 
</div>

<div id="articles">
	<div class="intro">
  <a href="<?php echo get_page_link(9)?>"><h2>What is a Social Enterprise?</h2></a>
	<p>Social enterprise is defined as a business whose primary purpose is to address the needs of the common good. Methodology and discipline of businesses are applied to advance their social, environmental and human justice agendas. </p>
	<br>
	</div>
	<div class="seart">
		<h2><i class="icon-film icon-white"></i> Social Enterprise News</h2>
			<?php 
			query_posts('cat=3&orderby=date&posts_per_page=2'); 
			if (have_posts()) : ?>
				<div class="art-cont">
					<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class(); ?>>
						<div class="content">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
					<?php endwhile; ?>
					Read more <?php the_category(', '); ?>
				</div>
			<?php wp_reset_query(); ?>
			
			<div class="pagination">
				<p class="older"><?php next_posts_link('Older posts'); ?></p>
				<p class="newer"><?php previous_posts_link('Newer posts'); ?></p>
			</div>
			
			<?php else : ?>
			<div class="art-cont">
				Nothing Found
				<p>Sorry, but you are looking for something that isnt here.</p>
				<p><a href="<?php echo get_option('home'); ?>">Return to Home</a></p>
			</div>
			<?php endif; ?>
	</div>
	<div class="seart">
		<h2><i class="icon-comments icon-white"></i> Social Enterprise Stories</h2>
			<?php 
			query_posts('cat=2&orderby=date&posts_per_page=2'); 
			if (have_posts()) : ?>
				<div class="art-cont">
					<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class(); ?>>
						<div class="content">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</div>
					<?php endwhile; ?>
					Read more <?php the_category(', '); ?>
				</div>
			<?php wp_reset_query(); ?>
			
			<div class="pagination">
				<p class="older"><?php next_posts_link('Older posts'); ?></p>
				<p class="newer"><?php previous_posts_link('Newer posts'); ?></p>
			</div>
			
			<?php else : ?>
			<div class="art-cont">
				Nothing Found
				<p>Sorry, but you are looking for something that isnt here.</p>
				<p><a href="<?php echo get_option('home'); ?>">Return to Home</a></p>
			</div>
			<?php endif; ?>
	</div>
	<div class="seart">
		<h2><i class="icon-suitcase icon-white"></i> SE ToolBox</h2>
		<h2><i class="icon-minus-sign icon-large icon-white"></i> Coming Soon</h2>
	</div>
</div>

<div id="social">
	<div id="events-calendar">
    <h2>Be in the Know!</h2>
    <div class="event-articles">
      <p><span>Its Time</span><img src="http://localhost:8888/wordpress/wp-content/uploads/2013/02/292374_3526104272280_93125005_n-300x224.jpg"/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lectus lacus, suscipit quis aliquet tristique, gravida sed libero. Morbi tincidunt libero ac diam vulputate a sodales sem molestie. Maecenas non nibh odio. Suspendisse ac urna metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et dapibus nibh. Aenean convallis, ligula vel laoreet auctor, magna lectus convallis ante</p>
    </div>
    <div class="event-articles hide">
      <p><span>Time 2</span><img src="http://localhost:8888/wordpress/wp-content/uploads/2013/02/292374_3526104272280_93125005_n-300x224.jpg"/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lectus lacus, suscipit quis aliquet tristique, gravida sed libero. Morbi tincidunt libero ac diam vulputate a sodales sem molestie. Maecenas non nibh odio. Suspendisse ac urna metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et dapibus nibh. Aenean convallis, ligula vel laoreet auctor, magna lectus convallis ante</p>
    </div>
    <div class="event-articles hide">
      <p><span>Time 3</span><img src="http://localhost:8888/wordpress/wp-content/uploads/2013/02/292374_3526104272280_93125005_n-300x224.jpg"/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lectus lacus, suscipit quis aliquet tristique, gravida sed libero. Morbi tincidunt libero ac diam vulputate a sodales sem molestie. Maecenas non nibh odio. Suspendisse ac urna metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et dapibus nibh. Aenean convallis, ligula vel laoreet auctor, magna lectus convallis ante</p>
    </div>
	</div>
	<div id="media"class="soc">
		
			<h2>Latest Tweets</h2>
		<ul>
			<li>
      <i class="icon-twitter icon-blue"></i>
			I uploaded a @YouTube video <a href="http://t.co/Xg7SRDxr" rel="nofollow">http://t.co/Xg7SRDxr</a> Ms. Pacita Juan - 2nd Philippine Conference on Research in CSR | BCYF
			<small class="time-ago"><a href="https://twitter.com/#!/%40BCYFoundation/status/266003747531026432">26 days ago</a></small>
			</li>
			<li>
      <i class="icon-twitter icon-blue"></i>
			I uploaded a @YouTube video <a href="http://t.co/WN0E5zUd" rel="nofollow">http://t.co/WN0E5zUd</a> Mr. Thomas Thomas - 2nd Philippine Conference on Research in CSR | BCYF
			<small class="time-ago"><a href="https://twitter.com/#!/%40BCYFoundation/status/266003746163666944">26 days ago</a></small>
			</li>
			<li>
      <i class="icon-twitter icon-blue"></i>
			I uploaded a @YouTube video <a href="http://t.co/hyarf9FH" rel="nofollow">http://t.co/hyarf9FH</a> Dr. Alvin Ang - 2nd Philippine Conference on Research in CSR | BCYF
			<small class="time-ago"><a href="https://twitter.com/#!/%40BCYFoundation/status/266003546275729409">26 days ago</a></small>
			</li>
		</ul>
	</div>
</div>

<div id="partners" >
  <div class="intro">
    <h2>Our Partners</h2>
  </div>
  <div class="partner-picture-container">
    <div class="partner-picture">
      <img src="http://bcyfoundation.org/wp-content/uploads/2012/12/BCYF-logo-TEXT3.png"/>
    </div>
    <div class="partner-picture">
      <img src="http://entrepsbuild.ph/Images/Uploaded/eb_logo.png"/>
    </div>
    <div class="partner-picture">
      <img src="http://www.socialenterprise.org.uk/assets/default/images/misc/logo-5.png"/>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>

<?php get_footer(); ?>

