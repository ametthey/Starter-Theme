<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<p>Template: Content-portfolio.php</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
        </a>

    </header>

</article>
