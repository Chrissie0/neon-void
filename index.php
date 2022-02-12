<?php

    get_header();

    if (is_front_page()==true) {
        echo "<div class='frontpage'>";
        the_post_thumbnail();
        the_content();
        echo "</div>";
    }

    if (is_tag()==true) {
        if (have_posts()==true) {
            echo "<h2 class='move'>";
            single_tag_title("Tag: ");
            echo "</h2>";
            echo "<div class='postswrapper'>";
            while (have_posts()==true) {
                the_post();
                get_template_part('template-parts/content', 'home');
            }
            echo "</div>";
        }
    }

    if (is_category()==true) {
        the_archive_title('<h2 class="move">', '</h2>');
        if (have_posts()==true) {
            // this was way more difficult than it needed to be
            $catarray = get_the_category();
            if ($catarray[0]->name=="Genre") {
                echo "<div class='genrewrapper'>";
                while (have_posts()==true) {
                    the_post();
                    get_template_part('template-parts/content', 'genre');
                }
            } else if ($catarray[0]->name=="Artist"){
                echo "<div class='artistwrapper'>";
                while (have_posts()==true) {
                    the_post();
                    get_template_part('template-parts/content', 'artist');
                }
            } else {
                echo "No such category";
            }
            echo "</div>";
            echo "<div id='lightbox'><span class='close'>&times;</span><img class='fullimg' id='fullimg'></div>";
        }
    }

    if (is_single()==true) {
        get_template_part('template-parts/content', 'post');
    }

    get_footer();

?>