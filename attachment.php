<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package WordPress
* @subpackage Twenty_Nineteen
* @since Twenty Nineteen 1.0
*/

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">

                <?php the_title( '<h1>', '</h1>' ); ?>

            </header>



            <div class="entry-content">

                <pre><?php var_export( $post ); ?></pre>

                <?php the_content(); ?>

            </div>

            <?php if ( comments_open() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        </article>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content' , 'none' ); ?>

        <?php endif; ?>


        <p>Attachment.php</p>
    </main>
</div>



<?php get_footer(); ?>
