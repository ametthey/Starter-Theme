#======= THIS IS THE README TO USE THIS THEME ========

1. change url of .local project in gulpfile (line 57)
2. change text of same name in package.json

_____

#======= STRUCTURE OF THE DIFFERENT FOLDER & FILES  ========

#### index.php
includes:
-> content-post.php

#### home.php

includes:
-> content-post.php

#### single.php

includes:
-> content-audio.php
-> content-gallery.php
-> content-quote.php
-> content-video.php

#### singular.php

includes:
-> content-page.php


#======= Differents types of Template Tags =======
https://developer.wordpress.org/themes/references/list-of-template-tags/


1. Include tags
2. General tags
 1_ Include tags

 2_ Login tags
    wp_loginout()
    wp_logout_url()
    wp_login_url()
    wp_login_form()
    wp_lostpassword_url()
    wp_register()
    is_user_logged_in()

 3_ bloginfo()

 4_ Archive tags
    single_post_title() // can be use outside the loop
    post_type_archive_title() // for custom post type
    single_cat_title()
    single_tag_title()
    single_term_title()
    single_month_title()
    get_archive_link()
    wp_get_archives()
 5_ Calendar tags
 6_ Misc General tags

3. Navigation tags
    wp_nav_menu();
4. Post tags
5. Post Thumbnail tags
6. Link tags
7. Comment tags
8. Author tags
9. Category tags
10. Bookmark tags
11. Conditional Tags
12. Sanitization and Escaping


