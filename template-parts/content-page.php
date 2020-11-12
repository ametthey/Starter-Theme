<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<p>Template-parts: Content-page.php</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>' ); ?>
    </header>

    <div class="entry-content">
        <!--
         <?php the_content(); ?>
        -->

        <h2>Présentation des différents composants du site</h2>

        <h3>Swiper</h3>


        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="/wp-content/uploads/2020/11/edwardcurtis-galerieorenda2-copie.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/wp-content/uploads/2020/11/edwardcurtis-galerieorenda1-copie.jpg" alt="">
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </div>

</article>
