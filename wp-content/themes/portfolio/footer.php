<?php wp_footer(); ?>

<section class="t-16 pt-7 pb-10">
    <h2 class=" text-center uppercase font-barlow font-bold text-fz20 mb-8">
        Ils me font confiance
    </h2>

    <?php dynamic_sidebar('logos-sidebar'); ?>
</section>
<footer class="bg-[#212938] pt-16 pb-16 md:pb-28 text-white">
    <div class="container mx-auto px-5 grid grid-cols-1 md:grid-cols-3 gap-x-5 gap-y-8 justify-around items-center">
        <div class="font-barlow">
            <a href="<?= home_url() ?>">
                <span class=" uppercase block font-bold text-[32px] xs:text-fz36/8">
                    Maxime Isambert
                </span>
                <span class=" block font-medium text-fz24">
                    Conception Wordpress
                </span>
            </a>
        </div>

        <div class=" flex gap-3 md:items-center flex-col">
            <a href="https://www.linkedin.com/in/maxime-isambert/" class="group flex items-center justify-center w-16 h-16 rounded-full border border-blue overflow-hidden relative before:absolute before:top-0 before:w-full before:h-full before:bg-white before:scale-y-0 before:origin-bottom before:z-10 before:transition-transform before:duration-300 hover:before:scale-y-100 hover:before:origin-top" target="_blank">
                <svg viewBox="0 0 448 512" id="icon-linkedin" class="w-7 fill-white relative z-10 transition-all duration-75 delay-[90ms] group-hover:fill-[#0b66c2]">
                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                </svg>
            </a>

            <a href="mailto:maxime.isambert@gmail.com">
                Email:
                <span class="relative before:w-full before:h-[1px] before:bg-blue before:scale-x-0 before:absolute before:-bottom-1 before:duration-[350ms] before:origin-right before:transition-transform hover:before:scale-x-100 hover:before:origin-left">maxime.isambert@gmail.com</span>
            </a>
        </div>

        <div>
            <ul class="flex flex-col gap-5 md:items-center">
                <li>
                    <a class="relative before:w-full before:h-[1px] before:bg-blue before:scale-x-0 before:absolute before:-bottom-1 before:duration-[350ms] before:origin-right before:transition-transform hover:before:scale-x-100 hover:before:origin-left" href="<?= home_url() . '/services' ?>">Développeur Wordpress</a>
                </li>
                <li>
                    <a class="relative before:w-full before:h-[1px] before:bg-blue before:scale-x-0 before:absolute before:-bottom-1 before:duration-[350ms] before:origin-right before:transition-transform hover:before:scale-x-100 hover:before:origin-left" href="<?= home_url() . '/services' ?>">Consultant Wordpress</a>
                </li>
                <li>
                    <a class="relative before:w-full before:h-[1px] before:bg-blue before:scale-x-0 before:absolute before:-bottom-1 before:duration-[350ms] before:origin-right before:transition-transform hover:before:scale-x-100 hover:before:origin-left" href="<?= home_url() . '/services' ?>">Maintenance Wordpress</a>
                </li>
                <li>
                    <a class="relative before:w-full before:h-[1px] before:bg-blue before:scale-x-0 before:absolute before:-bottom-1 before:duration-[350ms] before:origin-right before:transition-transform hover:before:scale-x-100 hover:before:origin-left" href="<?= home_url() . '/services' ?>">Urgence Wordpress</a>
                </li>
            </ul>

        </div>
    </div>
</footer>
</body>

</html>