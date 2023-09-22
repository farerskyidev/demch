<?php
/**
 * The main template file
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <?php the_title( '<h4 class="">', '</h4>' ); ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn_thirth"><?php esc_html_e('Read More', 'lex'); ?></a>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();   
