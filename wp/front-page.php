<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h2>
					<a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
				</h2>				
				<section>
					<figure><?php if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink() ?>"> 
							<?php the_post_thumbnail();}  ?>
						</a>
					</figure>
					<p><?php the_content('Далее'); ?></p>
				</section>
			</article>
			<div class="grey-line"></div>
		<?php endwhile; ?>
		<?php if (function_exists('bazz_pagination')) bazz_pagination();  ?>
		<script>
			$(document).ready(function(){
				$("header li.menu1").addClass("active");
			});
		</script>
<?php get_footer(); ?>