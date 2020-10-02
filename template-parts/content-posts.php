<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

        <h2><a href="<?php esc_url( the_permalink() );?>"><?php the_title(); ?></a></h2>

        <div class="byline">
            <?php esc_html_e( 'Author:' , '_themename'); ?><?php the_author_posts_link(); ?>
        </div>
    </header>

    <div class="entry-content">
        <p>what</p>
        <?php the_content(); ?>
    </div>

</article>
