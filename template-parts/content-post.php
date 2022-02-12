<?php

echo "<div class='singlepost'>";
the_post_thumbnail();
the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');

the_content();

the_tags('Tags: ');

echo "<br>Previous: ";
previous_post_link('%link');
echo "&nbsp| Next: ";
next_post_link('%link');
echo "</div>";

?>