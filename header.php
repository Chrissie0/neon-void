<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2030 Project</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <!-- Displays blog name -->
        <h1><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
    </header>
    <button type="button" id="hidemenu">Menu</button>
    <nav>
        <!-- Displays the primary navigation menu -->
        <div class="nav"><?php wp_nav_menu(array('theme_location'=>'menu'));?></div>
    </nav>
    <main>