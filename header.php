<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package remian-in
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="header" class="mb-3">
    <div class="wrap-logo">
        <a href="/">
            <img loading="lazy" src="<?= THEME_URI ?>/images/logo.svg" alt="logo">
        </a>
    </div>
    <div class="wrap-menu">
        <ul>
            <li>
                <a href="/">VISION</a>
            </li>
            <li>
                <a href="/">WHO WE ARE</a>
            </li>
            <li>
                <a href="/">SERVICE+</a>
            </li>
            <li>
                <a href="/">CASE</a>
            </li>
            <li>
                <a href="/">NEWS</a>
            </li>
            <li>
                <a href="/">RECRUIT</a>
            </li>
        </ul>
        <div class="wrap-locale">
            <button>JP</button>
            <div class="line"></div>
            <button>EN</button>
        </div>
        <button class="contact">CONTACT</button>
    </div>
    <button class="btn-menu">
        <span></span>
    </button>
</header>
