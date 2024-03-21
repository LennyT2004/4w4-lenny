<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe #1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap" rel="stylesheet">

<body>
    <div id="menu" class="global clr-agencement-primaire">
        <header class="menu_header">
            <?php echo get_custom_logo(); ?>
            <input type="checkbox" name="" id="chk-burger">
            <label id="burger-bouton" for="chk-burger">
                <svg id="burger" width="48" height="48" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </label>
            <?php wp_nav_menu(array("container" => "nav")); ?>
        </header>
    </div>