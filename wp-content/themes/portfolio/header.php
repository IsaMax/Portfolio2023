<!DOCTYPE html>
<html <?php language_attributes(); ?> class="font-inter text-colorText scroll-smooth">

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('overflow-x-hidden'); ?>>

    <?php wp_body_open(); ?>

    <header class="px-5 py-4 <?= is_page('services') ? "text-white bg-backgroundServices" : (!is_page('projets') ? "sticky top-0 w-full bg-white z-50" : "") ?>">
        <nav class=" flex justify-between items-center">

            <div class="menu-hamburger js-hamburger relative z-[99999] flex flex-col justify-center items-center md:hidden">
                <span class="w-9 h-[3px] <?= is_page('services') ? "bg-white" : "bg-black" ?>  block translate-y-3 transition-all"></span>
                <span class="w-9 h-[3px] <?= is_page('services') ? "bg-white" : "bg-black" ?>  block transition-all"></span>
                <span class="w-9 h-[3px] <?= is_page('services') ? "bg-white" : "bg-black" ?>  block -translate-y-3 transition-all"></span>
            </div>

            <div class="font-barlow logo relative z-[1000]">
                <a href="<?= home_url() ?>" class="<?= is_page('services') ? "text-white" : "text-darkerColorText" ?>">
                    <span class=" uppercase block font-bold text-fz22 lg:text-fz36/8">
                        Maxime Isambert
                    </span>
                    <span class=" block font-medium text-fz16 lg:text-fz24">
                        Conception Wordpress
                    </span>
                </a>
            </div>

            <div class="menu__mobile pointer-events-none invisible flex w-screen h-screen absolute top-0 left-0 z-[500] bg-white flex-col gap justify-center items-center gap-8 -translate-y-full transition-transform duration-700 ease-outexpo">
                <?php
                wp_nav_menu([
                    "theme_location" => "header",
                    "container" => "ul",
                    "menu_class" => "flex flex-col gap-10 mt-3",
                    "link_class" => "relative block text-blue text-fz28 font-bold font-barlow transition-all -translate-y-5 opacity-0 ease-outexpo duration-0 delay-0"
                ])
                ?>

                <a href="<?= home_url() . '/#contact' ?>" class="px-5 py-3 text-14 rounded-lg bg-blue text-white text-sm hover:bg-blueDarker transition -translate-y-5 opacity-0 ease-outexpo duration-0 delay-0">Donnez vie à votre projet</a>
            </div>

            <div class="hidden md:flex gap-8 items-center font-semibold">
                <?php
                wp_nav_menu([
                    "theme_location" => "header",
                    "container" => "ul",
                    "menu_class" => "flex gap-8 menu-header",
                    "link_class" => "relative before:w-full before:h-[1px] before:bg-blue before:scale-x-0 before:absolute before:-bottom-1 before:duration-[350ms] before:origin-right before:transition-transform hover:before:scale-x-100 hover:before:origin-left hover:text-blue/[.9]"
                ])
                ?>

                <a href="<?= home_url() . '/#contact' ?>" class="px-5 py-3 text-14 rounded-lg bg-blue text-white text-sm transition ease-linear hover:bg-blueDarker">Donnez vie à votre projet</a>
            </div>

        </nav>
    </header>