

            </div><!-- #content -->

            <footer>

                <?php
                    $footer_message = '&copy;' . date( 'Y' ) . ' ' . get_bloginfo( 'name' );
                ?>

                <p><?php echo apply_filters( '_themename_footer_message', $footer_message ); ?></p>

                <button class="button__top">Back to top</button>

            </footer>

        </div><!-- #page -->

        <?php wp_footer(); ?>
	</body>
</html>
