<?php
echo "<div class='category'>";
echo "<a href=" . get_permalink() . ">";
the_post_thumbnail();
echo "</a>";
the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
the_excerpt();
the_tags();
echo "</div>";
?>