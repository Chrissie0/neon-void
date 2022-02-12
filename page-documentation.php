<?php
    get_header();
    echo "<div class='documentation'>";
    the_title('<h1>', '</h1>');
    the_post_thumbnail();
    the_content();
    echo "</div>";
    get_footer();
?>