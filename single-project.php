<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>


                </header>

                <div class="entry-content">
                    <a href="<?php the_permalink(); ?>">
                        <?php esc_html_e( 'The Thumbnail: ', '_themename' ); ?>
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>

                    <a href="<?php the_permalink(); ?>">
                        <?php the_content(); ?>
                    </a>

                    <p>
                        Skills:
                        <?php the_terms( $post->ID, 'skill' );?>
                    </p>

                    <p>
                        <a href="<?php the_field( 'url' ); ?>" class="button">
                            <?php esc_html_e( 'Visit the Site', '_themename'  ); ?>
                        </a>
                    </p>
                </div>

            </article>

        <?php endwhile; endif; ?>


        <p>Single-project.php</p>
    </main>
</div>



<?php get_footer(); ?>
