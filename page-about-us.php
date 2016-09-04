<?php get_header(); ?>

<div class="about-banner">
	<span>For over two decades we have been providing our services to 
	business and home users alike.  Our services range from building 
	completely custom PC’s, to dealing with virus infections, clean-ups 
	and optimizations, hardware replacement and more. We thrive on tackling 
	challenging issues and implenting inventive custom solutions.  It's all 
	made possible by out Incredible staff members.</span>
</div>

<!-- <div class="about-copy">
	<h3>For over two decades we have been providing our services to business and home users alike.  Our services range from building completely custom PC’s, to dealing with virus infections, clean-ups and optimizations, hardware replacement and more. We thrive on tackling challenging issues and implenting inventive custom solutions.  It's all made possible by out Incredible staff memebers.</h3>
</div> -->

<div class="people">
	<?php 
	if( have_rows('person') ):
	    while ( have_rows('person') ) : the_row(); ?>
			<div class="single-person">
				<div class="picture" style="background: url('<?php the_sub_field('picture') ?>'); background-position: 50% 50%;background-size: cover;"></div>
				<div class="person-copy">
			        <h3><?php echo esc_html( the_sub_field('name') ); ?></h3>
			        <p><?php echo esc_html( the_sub_field('description') ); ?></p>
			    </div>
	        </div>

		<?php endwhile; ?>
	<?php endif;?>
</div>

<?php get_footer(); ?>