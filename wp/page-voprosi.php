<?php
/*
*Template Name: Для "ВОПРОСЫ"
*/
get_header(); ?>
	<?php iinclude_page(29); ?>
	<?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || '0' != get_comments_number() ) :
		comments_template();
		endif;
	?>
<script>
$(document).ready(function(){
	//$("#respond h3").text("ЗАДАТЬ ВОПРОС");
	$("header li.menu4").addClass("active");
});
</script>
<?php get_footer(); ?>