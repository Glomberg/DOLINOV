<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'Комментарии Вам не доступны.', 'striped' ); ?></p>
</div><!-- #comments -->
<?php
	/*
	* Stop the rest of comments.php from being processed,
	* but don't kill the script entirely -- we still have
	* to fully load the template.
	*/
	return;
endif;
?>
<?php if ( have_comments() ) : ?>
	<ul class="commentlist">
		<!--<h2>Комментарии:</h2>-->
		<?php wp_list_comments(); ?>
	</ul>
	<?php
			paginate_comments_links(); ?>
	<?php endif; ?>
<?php if (!comments_open()) {
	echo "<p class='nocomments'>Комментарии запрещены</p>";
}
else {
	if (!get_comments_number()) {
		echo "<p class='nocomments'>Никто ничего еще не написал, будьте первым.</p>";
	}
}
?>
<?php 
$fields =  array(
	'author' => '<label for="author">Ваше имя:</label><input id="author" name="author" type="text" value="' .esc_attr( $commenter['comment_author'] ) . '" />',
	'email'  => '<label for="phone">Ваш телефон:</label><input id="phone" name="phone" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />',
);
$comments_args = array(
	'fields' => $fields,
    'comment_notes_after' => '',
	'title_reply' => 'ОСТАВИТЬ ОТЗЫВ<span></span>',
	'comment_field' => '<label for="comment">' . _x( 'Текст:', 'noun' ) . '</label> <textarea id="comment" name="comment" aria-required="true"></textarea>',
	'label_submit' => 'Отправить',
);
comment_form($comments_args); ?>
<div class="clear"></div>
</div><!-- #comments -->