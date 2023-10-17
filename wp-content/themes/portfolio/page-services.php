<?php get_header(); ?>

<?php

$header_group = get_field('header');
$header_surtitre = $header_group['sur-titre'];
$header_texte = $header_group['texte'];
$header_image = $header_group['image'];
$header_couleur = $header_group['couleur'];

$worpdress_group = get_field('section_wordpress');
$worpdress_group_titre = $worpdress_group['titre'];
$worpdress_group_soustitre = $worpdress_group['sous-titre'];
$worpdress_group_bloc_1 = $worpdress_group['bloc_1'];
$worpdress_group_bloc_2 = $worpdress_group['bloc_2'];
$worpdress_group_bloc_3 = $worpdress_group['bloc_3'];
$worpdress_group_bloc_4 = $worpdress_group['bloc_4'];


$outils_groupe = get_field('section_outils');
$outils_groupe_titre = $outils_groupe['titre'];
$outils_groupe_soustitre = $outils_groupe['sous-titre'];
$outils_groupe_bloc_1 = $outils_groupe['bloc_1'];
$outils_groupe_bloc_2 = $outils_groupe['bloc_2'];
$outils_groupe_bloc_3 = $outils_groupe['bloc_3'];
$outils_groupe_bloc_4 = $outils_groupe['bloc_4'];

?>

<section class="bg-backgroundServices">
    <div class="container mx-auto px-5 relative pt-16 md:pt-24 pb-20 md:pb-[465px] lg:pb-20 text-white overflow-hidden">

        <p class="text-fz18"><?= $header_surtitre ?></p>

        <h1 class="md:mt-3 md:mb-2 lg:w-1/2 font-barlow font-bold text-[40px]/[47px] xs:text-fz48/[55px] md:text-[65px]/[65px]"><?= get_the_title() ?></h1>

        <p class="mt-6 text-fz18 lg:w-1/3"><?= $header_texte ?></p>

        <a href="<?= home_url() . '/services/#contact' ?>" class="block w-fit font-bold mt-5 px-5 py-3 text-fz14 xs:text-fz16 rounded-lg bg-blue text-white text-sm transition ease-linear hover:bg-blueDarker">Vous avez un projet Wordpress ?</a>

        <img width="<?= $header_image['width'] ?>" height="<?= $header_image['height'] ?>" src="<?= $header_image['url'] ?>" alt="<?= $header_image['alt'] ?>" class="absolute hidden md:block lg:-bottom-20 xl:-bottom-0 left-0 lg:left-auto  lg:right-0">

    </div>
</section>

<section class="pt-16 pb-20 md:pb-28">
    <div class="container mx-auto px-5 relative">

        <h2 class=" text-darkerColorText text-center text-fz36/[42px] md:text-fz48/[55px] font-barlow font-bold"><?= $worpdress_group_titre ?></h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 xs:gap-7 mt-8 md:mt-12">

            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <?php
                if (intval($worpdress_group_bloc_1['image'])) : ?>

                    <img width="155" height="155" src="<?= wp_get_attachment_image_url($worpdress_group_bloc_1['image'], array(155, 155)) ?>" alt="<?= $worpdress_group_bloc_1['image']['alt'] ?>" class="w-24 xs:w-[155px]">

                <?php else : ?>
                    <img width="155" height="155" src="<?= $worpdress_group_bloc_1['image']['url'] ?>" alt="<?= $worpdress_group_bloc_1['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <?php endif; ?>

                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $worpdress_group_bloc_1['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $worpdress_group_bloc_1['texte'] ?></p>
            </div>
            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <?php
                if (intval($worpdress_group_bloc_2['image'])) : ?>

                    <img width="155" height="155" src="<?= wp_get_attachment_image_url($worpdress_group_bloc_2['image'], array(155, 155)) ?>" alt="<?= $worpdress_group_bloc_2['image']['alt'] ?>" class="w-24 xs:w-[155px]">

                <?php else : ?>
                    <img width="155" height="155" src="<?= $worpdress_group_bloc_2['image']['url'] ?>" alt="<?= $worpdress_group_bloc_2['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <?php endif; ?>

                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $worpdress_group_bloc_2['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $worpdress_group_bloc_2['texte'] ?></p>
            </div>

            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">

                <?php
                if (intval($worpdress_group_bloc_3['image'])) : ?>

                    <img width="155" height="155" src="<?= wp_get_attachment_image_url($worpdress_group_bloc_3['image'], array(155, 155)) ?>" alt="<?= $worpdress_group_bloc_3['image']['alt'] ?>" class="w-24 xs:w-[155px]">

                <?php else : ?>
                    <img width="155" height="155" src="<?= $worpdress_group_bloc_3['image']['url'] ?>" alt="<?= $worpdress_group_bloc_3['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <?php endif; ?>

                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $worpdress_group_bloc_3['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $worpdress_group_bloc_3['texte'] ?></p>
            </div>

            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <img width="155" height="155" src="<?= $worpdress_group_bloc_4['image']['url'] ?>" alt="<?= $worpdress_group_bloc_4['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $worpdress_group_bloc_4['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $worpdress_group_bloc_4['texte'] ?></p>
            </div>

        </div>
    </div>
</section>


<section class="pt-4 pb-20">
    <div class="container mx-auto px-5">

        <h2 class="text-darkerColorText text-center text-fz36/[42px] md:text-fz48/[55px] font-barlow font-bold"><?= $outils_groupe_titre ?></h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 xs:gap-7 mt-8 md:mt-12">

            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <img width="155" height="155" src="<?= $outils_groupe_bloc_1['image']['url'] ?>" alt="<?= $outils_groupe_bloc_1['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $outils_groupe_bloc_1['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $outils_groupe_bloc_1['texte'] ?></p>
            </div>
            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <img width="155" height="155" src="<?= $outils_groupe_bloc_2['image']['url'] ?>" alt="<?= $outils_groupe_bloc_2['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $outils_groupe_bloc_2['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $outils_groupe_bloc_2['texte'] ?></p>
            </div>

            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <img width="155" height="155" src="<?= $outils_groupe_bloc_3['image']['url'] ?>" alt="<?= $outils_groupe_bloc_3['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $outils_groupe_bloc_3['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $outils_groupe_bloc_3['texte'] ?></p>
            </div>

            <div class="flex flex-col items-center gap-1 xs:gap-3 text-center">
                <img width="155" height="155" src="<?= $outils_groupe_bloc_4['image']['url'] ?>" alt="<?= $outils_groupe_bloc_4['image']['alt'] ?>" class="w-24 xs:w-[155px]">
                <h3 class="font-barlow font-bold text-fz22 xs:text-fz28 md:text-fz36/[36px]"><?= $outils_groupe_bloc_4['titre'] ?></h3>
                <p class="text-fz16 xs:text-fz18/[31px] mt-1"><?= $outils_groupe_bloc_4['texte'] ?></p>
            </div>

        </div>
    </div>
</section>

<section class="pt-16 pb-20 bg-[#2d5daf1f]">

    <div class="container mx-auto px-5">

        <div class="Wysiwyg page-services">
            <?php the_content() ?>
        </div>

    </div>

</section>

<section id="contact" class="py-16 bg-lightGreen">
    <div class="container mx-auto px-5">
        <h2 class="font-barlow font-bold text-darkerColorText text-fz36/[42px] md:text-fz48/[48px] text-center mb-6 md:mb-8">
           Confiez moi votre projet
        </h2>

        <?= do_shortcode('[contact-form-7 id="5746777" title="Contact"]') ?>
    </div>
</section>




<?php get_footer(); ?>