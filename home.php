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

        <h1><?php wp_title( ' ' ); ?></h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content-posts' , get_post_format() ); ?>

        <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content' , 'none' ); ?>

        <?php endif; ?>

        <?php echo paginate_links(); ?>


        <p>Home.php</p>
    </main>
</div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
