<?php get_header(); ?>
<?php if( have_posts() ) { ?>
    <?php while( have_posts() ) { ?>
        <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_title('<h2>', '</h2>'); ?>
        </a>
        <div>
            <?php firsttheme_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php firsttheme_readmore_link(); ?>
    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else { ?>
    <p> <?php esc_html_e('Sorry, no posts matched your criteria.', 'firsttheme'); ?></p>
<?php } ?>

<?php

$comments = 1;

 printf(_n('One comment', '%s comments', $comments, 'firsttheme' ), $comments);

 $city = 'London';

 printf(
         /* translators: %s is the city name */
        esc_html__('Your city is %s', 'firsttheme'),
        $city
 );
?>

<?php get_footer(); ?>
