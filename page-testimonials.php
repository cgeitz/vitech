<?php get_header(); ?>

<div class="testimonials-banner">
	<span>Our longevity in this business speaks for itself. But don’t take our word for it. Read what prominent and professional people have to say about us!</span>
</div>


<div class="testimonials">
	<?php 
	if( have_rows('testimonial') ):
	    while ( have_rows('testimonial') ) : the_row(); ?>
			<div class="single-testimonial">
				<div class="picture" style="background: url(<?php echo esc_html( the_sub_field('picture') ); ?>);     background-position: 50% 50%;background-size: cover;"></div>

		        <h3><?php echo esc_html( the_sub_field('name') ); ?></h3>
		        <h5>"<?php echo esc_html( the_sub_field('description') ); ?>"</h5>
	        </div>

		<?php endwhile; ?>
	<?php endif;?>
</div>

<?php get_footer(); ?>