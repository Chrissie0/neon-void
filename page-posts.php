<!-- code taken and modified from https://www.wpbeginner.com/wp-tutorials/how-to-display-all-your-wordpress-posts-on-one-page/ -->
<?php 
get_header();
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
    <div class="postswrapper">
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
    get_template_part('template-parts/content', 'home');
    endwhile; ?>
 
    <?php wp_reset_postdata(); ?>
    </div>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>