<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="author-bio">
            <h1><?php the_archive_title(); ?></h1>
            <p><?php esc_html_e( 'The Author Bio: ' , '_themename'); ?><?php echo the_author_meta( 'description' , $post->post_author ); ?></p>
        </div>

        <hr>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content-posts' , get_post_format() ); ?>

        <?php endwhile; endif;?>

        <?php echo paginate_links(); ?>

        <p>Template: Author.php</p>
    </main>
</div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
