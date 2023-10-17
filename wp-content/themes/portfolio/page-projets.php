<?php get_header(); ?>

<?php

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => -1,
    'order' => 'ASC'
);

$my_query = new WP_Query($args);

?>

<h1 class="pt-16 pb-20  bg-[#f8fafc] font-barlow font-bold text-darkerColorText text-fz48/[48px] text-center"><?= get_the_title() ?></h1>

<div class="pb-20 js-lazycontainer">
    <ul>

        <?php

        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();

                $projet = get_field('projet', get_the_ID());

                $url_little = get_the_post_thumbnail_url(get_the_ID(), 'lazyimage');
        ?>
                <li class="first:border-t border-b" style="--bg-color:<?= $projet['couleur'] ?>;">

                    <div class="js-accordion relative before:w-full before:h-[1px] before:scale-0 before:transition-transform before:duration-450 before:origin-left before:bg-[--bg-color] before:absolute before:top-0 before:z-20 hover:before:scale-100
                    after:w-full after:h-[1px] after:scale-0 after:transition-transform after:duration-450 after:origin-left after:bg-[--bg-color] after:absolute after:bottom-0 after:z-20 hover:after:scale-100">

                        <div class="js-accordion__header relative cursor-pointer  pr-[13%] group after:content-['+'] after:absolute after:right-[6%] after:top-1/2 after:-translate-y-1/2 after:text-[30px] after:transition-transform hover:after:rotate-180 hover:after:content-['-']">

                            <div class="sm:w-max pl-[5%] 2xl:pl-[10%] relative">
                                <p class="text-darkerColorText group-hover:text-[--bg-color] uppercase py-8 font-barlow font-bold break-words text-fz28 sm:text-fz36 md:transition-transform md:origin-left md:duration-300 md:group-hover:relative md:group-hover:z-10 lg:group-hover:scale-110 xl:group-hover:scale-150"><?= get_the_title() ?></p>

                                <?php
                                $url = get_the_post_thumbnail_url(get_the_ID() ,array(500, 'auto'));
                                $alt= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                               ?>
                                <img width="500" height="300" src="<?= $url_little ?>" data-src="<?= $url ?>" alt="<?= $alt ? $alt : "image" ?>" decoding="async" class="absolute hidden lg:block z-[8] top-1/2 left-full -translate-y-[10%] lg:max-w-[30vw] xl:max-w-[36vw] ease-out rotate-6 transition-all duration-[450ms] opacity-0 pointer-events-none group-hover:-translate-y-1/2 group-hover:opacity-100 group-hover:rotate-0">
                           </div>

                        </div>

                        <div class="js-accordion__content h-0 overflow-hidden transition-all duration-300">
                            <div class="container mx-auto px-4 opacity-0">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-14 mt-4 sm:mt-12">
                                    <div>
                                        <?php 
                                            
                                            $url = get_the_post_thumbnail_url(get_the_ID());
                                            $alt= get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                                           ?>
                                            <img width="600" height="400" src="<?= $url_little ?>" data-src="<?= $url ?>" alt="<?= $alt ? $alt : "image" ?>" decoding="async">
                                        
                                    </div>
                                    <div class="Wysiwyg">
                                        <?php the_content() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>

        <?php endwhile;
        endif;

        wp_reset_postdata();
        ?>


    </ul>
</div>

<?php get_footer(); ?>


<!-- 

Comme mon précédent portfolio avec les titres en gros et les images qui apparaissent comme cncs sur le côté droit. Avec un remplissage de couleur principal de la capture affiché. Du haut vers le bas. Plus une ouverture accordéon si clique et les infos qui s'affichent avec la capture écran du site dans un pc plus texte explicatif.

-->