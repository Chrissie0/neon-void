<?php
echo "<div class='category'>";
the_post_thumbnail("post-thumbnail", ['class' => 'catimage']);
the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>');
the_tags('<p>', ' | ', '</p>');
echo "</div>";

?>