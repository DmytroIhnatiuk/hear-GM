<?php /* Template Name: Home page */

get_header();
?>
<main>
    <!-- promo -->

    <section class="pt-0 pb-32 lg:pb-0">
        <div class="container px-0">
            <div class="flex lg:flex-row flex-col-reverse min-w-0">
                <div class="pt-20 sm:pt-42 lg:pt-0 flex flex-col justify-center px-[var(--container-gap)] lg:pr-0">
                    <div class="text-l text-gray mb-4">
                        <?= get_field('above_title'); ?>
                    </div>
                    <h1 class="mb-20 sm:mb-32"><?php the_title(); ?></h1>
                    <button data-target="callback" class="btn btn__main-color h-[.54rem] w-[2.64rem]">
                        <?php pll_e('Online consultation'); ?>
                    </button>
                </div>
                <div class="pt-[var(--header-height)] relative sm:pt-0">
                    <a href="<?= get_field('youtube_link', 'option') ?>"
                       target="_blank"
                       class="gradient-youtube h-[.54rem] w-[1.8rem] sm:h-[.68rem] sm:w-[2.15rem] rounded-sm py-8 px-12 sm:py-12 sm:px-16 flex items-center absolute z-40 sm:bottom-[.6rem] bottom-20 right-[var(--container-gap)] transition-link lg:hover:text-light-main">
                        <svg class="w-[.4rem] h-[.335rem] sm:w-[.49rem] sm:h-[.42rem] mr-12">
                            <use class="size-full" xlink:href="#youtube"></use>
                        </svg>
                        <div class="text-s sm:text-m leading-normal cm:font-bold blur-none">
                            <?php pll_e('More result'); ?>
                            <?php pll_e('on our YouTube'); ?>

                        </div>
                    </a>
                    <div class="lg:w-[8rem] lg:h-[6.6rem] sm:h-[5.6rem] h-[3.8rem] w-full">
                        <div class="swiper z-10" data-swiper="promo-slider">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('homescreen_gallery')):
                                    while (have_rows('homescreen_gallery')) : the_row(); ?>


                                        <div class="swiper-slide overflow-hidden bg-black">
                                            <div class="promo-slide">
                                                <div class="label-before"><?= pll_e('Before'); ?></div>
                                                <div class="label-after"><?= pll_e('After'); ?></div>
                                                <div class="image h-full w-full absolute right-0 top-0">
                                                    <picture class="dn-preview-image">
                                                        <source srcset="<?= wp_get_attachment_image_srcset(get_sub_field('desktop_image')) ?>"
                                                                media="(min-width: 640px)"/>
                                                        <img src="<?= wp_get_attachment_url(get_sub_field('mobile_image')) ?>"
                                                             alt="Before/after image"

                                                        />
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile;
                                endif;
                                ?>


                            </div>
                            <div class="flex items-center absolute bottom-24 left-[var(--container-gap)] sm:bottom-[.6rem] z-30 text-[.4rem] sm:text-[.53rem] leading-none">
                                <div class="promo-slider-prev icon-arrow_l mr-16 sm:mr-32 transition-link lg:hover:text-main"></div>
                                <div class="promo-slider-next icon-arrow_l turn transition-link lg:hover:text-main"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (pll_current_language() === 'ua' && current_user_can('administrator')): ?>
        <section class="section__bg lg:-translate-y-20 lg:relative lg:z-40">
            <div class="container">
                <div
                        class="border border-solid border-dark-main px-32 lg:rounded-40 rounded-md lg:pt-[.9rem] lg:pb-[1.58rem] lg:px-[1rem] pb-56 pt-32"
                >
                    <h2 class="mb-24">
                        Пересадка волосся <span class="text-main"> в Києві</span>
                    </h2>
                    <div
                            class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-24"
                    >
                        <div class="lg:col-start-2 h5">
                            Немає можливості виїзду за кордон? <br>
                            Приходь до нашої клініки в
                            Києві
                        </div>
                        <a
                                href="hear-gm-kyiv.html"
                                class="btn btn__main-color max-w-[2.6rem] lg:ml-24 h-[.54rem] self-end"
                        >
                            Детальніше
                        </a>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>

    <!-- About us -->
    <section class="section__bg lg:-translate-y-20 lg:relative lg:z-40 lg:pb-[1.3rem]">
        <div class="container">
            <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                <?= pll_e('About us'); ?>
            </div>
            <h2 class="mb-32 sm:mb-48"><?= pll_e('Hair Globalmedik clinic'); ?></h2>
            <div class="flex-col flex lg:flex-row mb-24 sm:mb-48">
                <div class="image relative w-full h-[2.25rem] sm:h-[4rem] lg:min-w-[6.1rem] lg:w-[6.1rem] rounded-sm sm:rounded-md overflow-hidden lg:mr-[.94rem] mb-16 sm:mb-24 lg:mb-0">
                    <?= dn_get_image_attachment(get_field('about_main_image'), 'about_prev', 'section image') ?>
                </div>
                <div>
                    <div class="flex mb-16 sm:mb-42">
                        <div class="flex items-center px-12 py-8 sm:p-12 border border-solid border-dark-main rounded-sm sm:rounded-md mr-8">
                            <div class="text-[.28rem] leading-normal sm:text-[.48rem] text-accent mr-6">
                                <?= get_field('satisfied_patient'); ?>
                            </div>
                            <div class="text-s sm:text-l h-max"><?= pll_e('Satisfied patient'); ?></div>
                        </div>
                        <div class="flex items-center px-12 py-8 sm:p-12 border border-solid border-dark-main rounded-sm sm:rounded-md">
                            <div class="text-[.28rem] leading-normal sm:text-[.48rem] text-accent mr-6">
                                <?= get_field('years_of_experience'); ?>
                            </div>
                            <div class="text-s sm:text-l h-max">
                                <?= pll_e('Years of Experience'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="h5 mb-12 sm:mb-24">
                        <?= get_field('about_title'); ?>
                    </div>
                    <p class="font-normal sm:font-semibold text-light-gray">
                        <?= get_field('description_1'); ?>
                    </p>
                </div>
            </div>
            <div class="lg:flex lg:flex-row-reverse items-center">
                <div class="flex mb-24 lg:mb-0">
                    <div class="image relative rounded-md overflow-hidden w-[1.66rem] sm:w-[2.41rem] h-[1.58rem] sm:h-[2.3rem] mr-12 sm:mr-20">
                        <?= dn_get_image_attachment(get_field('about_image_1'), 'about_prev_small', 'section image') ?>

                    </div>
                    <div class="image relative rounded-md overflow-hidden w-[1.66rem] sm:w-[2.41rem] h-[1.58rem] sm:h-[2.3rem]">
                        <?= dn_get_image_attachment(get_field('about_image_2'), 'about_prev_small', 'section image') ?>

                    </div>
                </div>
                <div class="lg:mr-[1.32rem] leading-normal text-light-gray">
                    <p>
                        <?= get_field('description_2'); ?>
                    </p>
                    <p class="mb-24 sm:mb-32">
                        <?= get_field('description_3'); ?>
                    </p>
                    <button data-target="callback" class="btn btn__main-color h-[.54rem] min-w-[2.63rem]">
                        <?= pll_e('Contact us for consultation'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- The best price  -->
    <section>
        <div class="container">
            <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                <?= pll_e('The best price'); ?>
            </div>
            <h2 class="mb-32 sm:mb-48">
                <?= pll_e('All Inclusive Hair Transplantation Package'); ?>
            </h2>
            <div class="grid lg:grid-cols-3 gap-20">
                <?php
                $packages = get_posts(array(
                    'post_type' => 'hair-transplantation',
                    'numberposts' => -1,
                ));
                foreach ($packages

                         as $package) {
                    $packageID = $package->ID;
                    ?>
                    <div
                            data-options
                            class=" bg-dark-gray p-16 sm:p-24 rounded-md overflow-hidden flex flex-col justify-between h-full"
                    >
                        <div class="mb-12 lg:mb-24">
                            <div class="flex justify-between items-center mb-8">
                                <h3 class="h-gradient ">
                                    <?= get_the_title($packageID) ?>
                                </h3>
                                <div
                                        class="bg-accent h5 px-12 py-4 rounded-sm min-w-max ml-4"
                                >
                                    <?= get_field('price', $packageID); ?>
                                </div>
                            </div>
                            <div class="font-bold mb-8"><?= pll_e('The price includes:'); ?></div>
                            <ul class="text-s text-light-gray ">
                                <?php if (have_rows('price_includes', $packageID)):
                                    while (have_rows('price_includes', $packageID)) : the_row(); ?>


                                        <li class="flex items-center mb-8">
                                            <span class="icon-done text-main text-m mr-12"></span>
                                            <div><?= get_sub_field('item'); ?></div>
                                        </li>

                                    <?php endwhile;
                                endif;
                                ?>


                            </ul>
                        </div>
                        <button
                                class="option-btn relative w-[.66rem] text-main mx-auto sm:hidden text-s font-normal flex justify-between items-center mb-14"
                        >
                            <span><?= pll_e('More'); ?></span>
                            <span
                                    class="icon-arrow_s absolute right-0 transition-transform block text-20  -rotate-90"
                            ></span>
                        </button>

                        <button data-target="callback" class="btn btn__main-color w-full h-[.46rem]">
                            <?= pll_e('Contact us for consultation'); ?>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Instagram -->
    <section>
        <div class="container overflow-hidden">
            <div class="rounded-md bg-dark-main p-32 pb-0 pt-[.4rem] sm:py-32 sm:px-[.9rem] flex flex-col lg:flex-row items-center min-h-[5.38rem] sm:min-h-max">
                <div class="lg:mr-[1rem] mb-20 lg:mb-0">
                    <h2 class="mb-16 sm:mb-32 leading-normal">
                        <?= pll_e('More results and info in'); ?>
                        <span class="text-light-main block"> <?= pll_e('our Instagram'); ?> </span>
                    </h2>

                    <a href="<?= pll_current_language() !== 'en' ? get_field('instagram_link', 'option') : 'https://www.instagram.com/turkey.hairglobalmedik?igsh=YWNoNW82aG14N29i' ?>"
                       target="_blank"
                       class="btn btn__outline w-[1.83rem]">
                        Instagram
                        <svg class="size-32 ml-8">
                            <use class="size-full" xlink:href="#instagram"></use>
                        </svg>
                    </a>
                </div>
                <div class="flex w-full sm:min-w-[4.14rem] sm:w-[4.14rem] justify-center min-h-[2.4rem] relative">
                    <div class="-left-8 -bottom-[.65rem] absolute sm:static">
                        <div class="image relative rounded-sm overflow-hidden w-[1.44rem] h-[2.78rem] sm:w-[1.76rem] sm:h-[3.5rem] sm:mr-32">
                            <?= dn_get_image_attachment(get_field('instagram_image_1')) ?>
                        </div>
                    </div>

                    <div class="-right-8 -bottom-32 absolute sm:static">
                        <div class="image relative rounded-sm overflow-hidden w-[1.44rem] h-[2.78rem] sm:w-[1.76rem] sm:h-[3.5rem]">
                            <?= dn_get_image_attachment(get_field('instagram_image_2')) ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Before & After -->
    <section class="before-after relative">
        <div class="p-0 sm:px-[var(--container-gap)]">
            <div class="px-[var(--container-gap)] sm:px-0">
                <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                    <?= pll_e('Our clients results'); ?>
                </div>
                <h2 class="mb-32 sm:mb-48"><?= pll_e('Before & After'); ?></h2>
            </div>
            <div class="image size-[3rem] sm:size-[4.2rem] absolute top-1/2 right-1/2 translate-x-[50%] translate-y-[-50%]">


                <img class="size-full" src="<?= get_img_link('ellipse.png') ?>" alt="Ellipse"/>
            </div>
            <div class="swiper w-[3.5rem] sm:h-[4.3rem] sm:w-[5.8rem] mx-auto" data-swiper="beforeAfter">
                <div class="swiper-wrapper">
                    <?php

                    $results = get_posts(array(
                        'post_type' => 'result',
                        'lang' => pll_current_language('slug'),
                        'numberposts' => -1,
                    ));
                    foreach ($results as $result):?>
                        <div class="swiper-slide">
                            <div
                                    class="w-[3.53rem] h-[2.22rem] sm:w-[5.46rem] sm:h-[3.52rem] relative flex justify-center items-center"
                            >
                                <div
                                        class="label leading-normal absolute gradient-youtube text-s sm:text-l w-max -right-4 md:-right-32 bottom-8 md:bottom-20  px-12 py-4 rounded-sm z-30 opacity-0"
                                >
                                    <?= pll_e('After'); ?>
                                </div>
                                <div
                                        class="label leading-normal absolute gradient-youtube text-s sm:text-l w-max -left-4 md:-left-32 top-8 md:top-20 px-12 py-4 rounded-sm z-30 opacity-0"
                                >
                                    <?= pll_e('Before'); ?>
                                </div>

                                <div
                                        class="image   w-1/2 h-full relative  rounded-sm overflow-hidden "
                                >
                                    <?= dn_get_image_attachment(get_field('before', $result->ID), 'result_prev', $result->title, 'size-full') ?>
                                </div>
                                <div
                                        class="image  w-1/2 h-full relative rounded-sm overflow-hidden"
                                >
                                    <?= dn_get_image_attachment(get_field('after', $result->ID), 'result_prev', $result->title, 'size-full') ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    ?>

                </div>
                <div class="flex mx-auto mt-16 lg:mt-0 w-max items-center bottom-0 text-[.4rem] leading-none">
                    <div class="beforeAfter-prev icon-arrow_l mr-16 md:mr-32 transition-link lg:hover:text-main"></div>
                    <div class="beforeAfter-next icon-arrow_l turn transition-link lg:hover:text-main"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="test ">
        <div class="container">
            <div class="test__wrapper px-32  md:px-24 py-32 lg:px-[.8rem] lg:py-[.66rem] rounded-md bg-dark-main relative">
                <div class="test__content">
                    <div class="testing relative">
                        <div class="swiper-pagination fraction h4"></div>
                        <div class="test__slider  swiper" data-swiper="slider__test">
                            <div class="swiper-wrapper ">


                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e('How long have you been losing hair?'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Recently'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Up to 3 years'); ?>
                                                </div>
                                            </li>
                                            <li class=" answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Approximately 5 years'); ?>
                                                </div>
                                            </li>
                                            <li class=" answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e("Don't know"); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e('Where is the baldness zone?'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Front line, temple area'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Top of the head'); ?>
                                                </div>
                                            </li>
                                            <li class=" answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('All over the head'); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e(' Have you had a hair transplant before?'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Yes'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('No'); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e('Have you already consulted in Turkish clinics?'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Yes'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('No'); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e('I want to have the operation in:'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Month'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('2-3 months'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Half a year'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e("I don't know yet"); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e('What is the best way to communicate with you?'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Call me'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?= pll_e('Please write to WhatsApp'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Please write to Viber'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Please write to Telegram'); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem]">
                                        <h3 class=" ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10">
                                            <?php pll_e('How did you hear about us?'); ?>
                                        </h3>
                                        <ul>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center ">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    Instagram
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    YouTube
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    Google
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    Yandex
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('By recommendation'); ?>
                                                </div>
                                            </li>
                                            <li class="  answer__item flex mb-12 md:mb-16 items-center">
                                                <div class="checkbox   ">
                                                    <span class="icon-done"></span>
                                                </div>
                                                <div class="h5 font-medium ml-16">
                                                    <?php pll_e('Other'); ?>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="swiper-slide ">
                                    <div class="test__slide md:pl-[.75rem] ">

                                        <h3 class="ml-16 md:h-[.63rem] mb-24 md:mb-0 mt-6 md:mt-10 ">
                                            <?php pll_e('Contact details'); ?>
                                        </h3>

                                        <form class="form grid md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16"
                                              data-form="questions">
                                            <input type="hidden"
                                                   value="Hairglobalmedik test form">

                                            <div class="text-s flex flex-col font-medium form-item ">
                                                <label for="questions-name" class="mb-4 font-normal"
                                                ><?php pll_e('Name/Surname'); ?></label
                                                >
                                                <input
                                                        type="text"
                                                        id="questions-name"
                                                        name="name"
                                                        class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                                                />
                                                <div class="form-item__message"></div>
                                            </div>
                                            <div class="text-s flex flex-col font-medium  form-item">
                                                <label for="questions-phone" class="mb-4 font-normal"
                                                ><?php pll_e('Phone number'); ?></label
                                                >
                                                <input
                                                        type="text"
                                                        id="questions-phone"
                                                        name="phone"
                                                        class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                                                />
                                                <div class="form-item__message"></div>
                                            </div>
                                            <div
                                                    class=" form-item text-s flex flex-col font-medium md:col-span-2 lg:col-span-1"
                                            >
                                                <label for="questions-email" class="mb-4 font-normal">E-mail</label>
                                                <input
                                                        type="email"
                                                        id="questions-email"
                                                        name="email"
                                                        class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                                                />
                                                <div class="form-item__message"></div>
                                            </div>
                                            <div
                                                    class="text-s  md:col-span-2    form-item flex flex-col font-medium "
                                            >
                                                <label for="questions-comment" class="mb-4 font-normal"
                                                ><?php pll_e('When do you plan to come?'); ?></label
                                                >
                                                <textarea

                                                        type="text"
                                                        id="questions-comment"
                                                        name="name"
                                                        class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                                                ></textarea>
                                                <div class="form-item__message"></div>
                                            </div>
                                            <div>
                                                <div class="policy flex">

                                                    <input
                                                            type="checkbox"
                                                            id="questions-policy"
                                                            name="policy"
                                                            class="hidden"
                                                    />
                                                    <div class="checkbox mr-8 ">
                                                        <span class="icon-done"></span>
                                                    </div>
                                                    <label for="questions-policy"
                                                           class="text-s font-medium cursor-pointer">
                                                        <?php pll_e('By clicking "Submit", you agree to the Terms of Use and
                                                        Privacy Policy of Globalmedik'); ?>
                                                    </label>
                                                </div>
                                                <button
                                                        type="submit"
                                                        class="btn btn__gray h-[.5rem] mt-16 w-full "
                                                >
                                                    <?php pll_e('Submit'); ?>
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="test__nav flex items-center justify-end md:justify-between md:pl-[.75rem]  md:pr-[1.3rem]">
                                <button class="font-semibold h-[.4rem] mr-12 md:h-[.54rem] w-[.4rem] md:w-[1.5rem] transition-all rounded md:rounded-[.3rem] border-2 border-solid border-white  prev__test ">
                                        <span class="hidden md:inline">
                                            <?php pll_e('Back'); ?>
                                        </span>
                                    <span class="icon-arrow_s md:hidden text-[.24rem]"></span>
                                </button>
                                <button class="bg-dark-gray px-24 md:px-0 text-white h-[.38rem]  md:h-[.54rem] md:w-[1.5rem]  transition-all rounded-[.3rem] next__test">
                                    <?php pll_e('Next'); ?>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>
    <!-- Our doctors -->
    <section>
        <div class="container p-0 lg:px-[var(--container-gap)]">
            <div class="px-[var(--container-gap)] lg:px-0">
                <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                    <?= pll_e('Best quality specialists'); ?>
                </div>
                <div class="flex justify-between items-center mb-32 sm:mb-48">
                    <h2><?= pll_e('Our doctors'); ?></h2>
                    <button data-target="callback" class="btn btn__main-color btn__none h-[.54rem] lg:flex">
                        <?= pll_e('Contact us for consultation'); ?>
                    </button>
                </div>
            </div>
            <div class="lg:ml-auto w-full lg:max-w-[9.25rem]">
                <div class="swiper w-full mb-42 lg:mb-0 min-w-0" data-swiper="doctors">
                    <div class="swiper-wrapper">
                        <?php
                        $lang = pll_get_post_language(get_the_ID(), 'slug');
                        //                        var_dump($lang);

                        $doctors = get_posts(array(
                            'post_type' => 'doctor',
                            'lang' => pll_current_language('slug'),
                            'post_status' => 'publish',
                            'meta_query' => array(
                                'relation' => 'AND',
                                array(
                                    'key' => 'show',
                                    'value' => '1',
                                    'compare' => '='
                                )
                            )
                        ));
                        //
                        foreach ($doctors as $doctor):?>
                            <div class="swiper-slide w-full max-w-[2.95rem]">
                                <div class="block h-[3.74rem] relative">
                                    <div class="image relative rounded-sm overflow-hidden h-[3.2rem]">

                                        <?= dn_get_image_attachment(get_post_thumbnail_id($doctor->ID), 'doctor_prev', $doctor->title, "w-full") ?>
                                    </div>
                                    <div class="w-full h-[.73rem] gradient-youtube absolute rounded-sm bottom-0 left-0 p-8 flex-col items-center justify-center text-center blur-0">
                                        <div class="text-20 font-bold"><?= $doctor->post_title; ?></div>
                                        <div class="font-normal">
                                            (<?= get_the_title(get_field('transplantation-method', $doctor->ID)[0]); ?>)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>

            <div class="flex mx-auto w-max items-center bottom-0 text-[.4rem] sm:text-[.53rem] leading-none lg:hidden">
                <div class="doctors-prev icon-arrow_l mr-16 md:mr-32 transition-link lg:hover:text-main"></div>
                <div class="doctors-next icon-arrow_l turn transition-link lg:hover:text-main"></div>
            </div>
        </div>
    </section>
    <!-- Why patients choose Turkey -->
    <section>
        <div class="container">
            <div class="bg-dark-main rounded-sm px-32 pt-48 pb-[.56rem] lg:px-[1.1rem] lg:py-[.75rem]">
                <h2 class="text-20 md:text-[.36rem] lg:text-[.48rem] leading-normal mb-12 lg:w-[8.5rem]">
                    <?= pll_e('Why patients choose Turkey for'); ?>
                    <span class="text-light-main"><?= pll_e('Hair Transplantation Treatment?'); ?>
							</span>
                </h2>
                <div class="sm:ml-[30%] lg:ml-[4.38rem]">
                    <p class="mb-24 font-medium text-l leading-normal">
                        <?= pll_e('Today more and more patients from Europe, Asia and Middle East
                        travel to Turkey for treatment. Recent years Turkey has been
                        in the TOP 3 of the countries’ chosen for international
                        medical tourism.'); ?>
                    </p>
                    <button data-target="callback" class="btn btn__gray h-[.54rem] w-full md:w-auto">
                        <?= pll_e('Contact us for consultation'); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- steps -->
    <section class="pb-[1rem] sm:pb-[1.4rem]">
        <div class="container relative">
            <div class="image hidden lg:block w-[3.78rem] h-[3.78rem] absolute -z-10">
                <img class="size-full" src="<?= get_img_link('logo_bg.png') ?>" alt="logo"/>
            </div>
            <div class="text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                <?= pll_e('My next steps'); ?>
            </div>
            <h2 class="mb-lg font-bold mb-32 sm:mb-48"><?= pll_e('How can I come?'); ?></h2>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-8 sm:gap-20">
                <div class="min-h-[.8rem] sm:min-h-[.96rem] rounded-sm bg-dark-gray pl-[.68rem] sm:pl-[.6rem] sm:py-32 py-24 pr-24 sm:pr-32 relative text-20 w-full h-max">
                    <div class="-rotate-90 absolute w-ma -left-8 lg:text-24 text-main">
                        1 <?= pll_e('step'); ?>
                    </div>
                    <div class="font-bold"><?= pll_e('Online Consultation'); ?></div>
                </div>
                <div class="min-h-[.8rem] sm:min-h-[.96rem] rounded-sm bg-dark-gray pl-[.68rem] sm:pl-[.6rem] py-24 sm:py-32 pr-24 sm:pr-32 relative text-20 w-full h-max">
                    <div class="-rotate-90 absolute w-ma -left-8 lg:text-24 text-main">
                        2 <?= pll_e('step'); ?>
                    </div>
                    <div class="font-bold"><?= pll_e('Date confirmation'); ?></div>
                </div>
                <div class="min-h-[.8rem] sm:min-h-[.96rem] rounded-sm bg-[#595959] pl-[.68rem] sm:pl-[.6rem] py-24 sm:py-32 pr-24 sm:pr-32 relative text-20 w-full h-max">
                    <div class="-rotate-90 absolute w-ma -left-8 lg:text-24 text-accent">
                        3 <?= pll_e('step'); ?>
                    </div>
                    <div class="mb-8 sm:mb-16 font-bold"><?= pll_e('1st day Arrival'); ?></div>
                    <div class="mb-8 sm:mb-16 font-bold">
                        <?= pll_e('2nd day hair transplant'); ?>
                    </div>
                    <div class="font-bold"><?= pll_e('3nd day departure'); ?></div>
                </div>
                <div class="min-h-[.8rem] sm:min-h-[.96rem] rounded-sm bg-dark-gray pl-[.68rem] sm:pl-[.6rem] py-24 sm:py-32 pr-24 sm:pr-32 relative text-20 w-full h-max self-end">
                    <div class="-rotate-90 absolute w-ma -left-8 lg:text-24 text-main">
                        4 <?= pll_e('step'); ?>
                    </div>
                    <div><?= pll_e('1 year of online support'); ?></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Hospital -->
    <section class="section__bg">
        <div class="lg:px-[var(--container-gap)]">
            <div class="px-[var(--container-gap)] lg:px-0">
                <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                    Hair Globalmedik
                </div>
                <h2 class="mb-lg mb-32 sm:mb-48"><?= pll_e('Our Hospital'); ?></h2>
            </div>
            <div class="swiper" data-swiper="ourHospital">
                <div class="swiper-wrapper mb-32">
                    <?php
                    $imagesHospital = get_field('our_hospital');

                    if ($imagesHospital): foreach ($imagesHospital as $image_id): ?>
                        <div class="swiper-slide max-w-max">
                            <div class="image relative w-[3.22rem] h-[2.19rem] sm:w-[4rem] sm:h-[2.72rem] overflow-hidden rounded-sm">
                                <?= dn_get_image_attachment($image_id, 'gallery_rooms', 'Our Hospital photo', "size-full") ?>
                            </div>
                        </div>
                    <?php endforeach;
                    endif; ?>


                </div>
                <div class="flex mx-auto w-max items-center bottom-0 text-[.4rem] leading-none">
                    <div class="ourHospital-prev icon-arrow_l mr-16 md:mr-32 transition-link lg:hover:text-main"></div>
                    <div class="ourHospital-next icon-arrow_l turn transition-link lg:hover:text-main"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotel -->
    <section>
        <div class="lg:px-[var(--container-gap)]">
            <div class="px-[var(--container-gap)] lg:px-0">
                <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                    <?= pll_e('Best accommodation'); ?>
                </div>
                <h2 class="mb-lg mb-32 sm:mb-48"><?= pll_e('Grand Makel Hotel Topkapı  5*'); ?></h2>
            </div>
            <div class="swiper" data-swiper="hotel">
                <div class="swiper-wrapper mb-32">
                    <?php
                    $imagesHotel = get_field('our_Hotel');

                    if ($imagesHotel): foreach ($imagesHotel as $image_id): ?>
                        <div class="swiper-slide max-w-max">
                            <div class="image relative w-[3.22rem] h-[2.19rem] sm:w-[4rem] sm:h-[2.72rem] overflow-hidden rounded-sm">
                                <?= dn_get_image_attachment($image_id, 'gallery_rooms', 'Our Hotel photo', "size-full") ?>
                            </div>
                        </div>
                    <?php endforeach;
                    endif; ?>

                </div>
                <div class="flex mx-auto w-max items-center bottom-0 text-[.4rem] leading-none">
                    <div class="hotel-prev icon-arrow_l mr-16 md:mr-32 transition-link lg:hover:text-main"></div>
                    <div class="hotel-next icon-arrow_l turn transition-link lg:hover:text-main"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container  ">
            <div class="px-24 py-32 md:px-0 block md:grid rounded-md bg-dark-main md:grid-cols-12 justify-center  md:pt-[.72rem] md:pb-[.56rem]">
                <div class="col-start-2 col-span-7 text-white  ">
                    <h2 class="h2 md:text-[.4rem]"><?php pll_e('Do you want the same result?'); ?></h2>
                    <h3 class="h2 md:text-[.4rem]  text-light-main"><?= pll_e('Contact us for a free consultation'); ?></h3>


                </div>
                <div class="mt-24 md:mt-0 col-span-3 self-center justify-self-end">
                    <button data-target="callback" class="btn btn__gray h-[.54rem] w-full md:w-auto">
                        <?php pll_e('Contact us for consultation'); ?>
                    </button>
                </div>
                <div class="col-start-2 col-span-10 mt-42">
                    <div class="swiper" data-swiper="patients">
                        <div class="swiper-wrapper ">
                            <?php
                            $patients = get_field('our_patients');

                            if ($patients): foreach ($patients as $image_id): ?>
                                <div class="swiper-slide rounded-md overflow-hidden ">
                                    <div class="image h-[3.2rem] md:h-[2.83rem]">
                                        <?= dn_get_image_attachment($image_id, 'patients', 'Our patients photo', " object-cover size-full") ?>
                                    </div>
                                </div>

                            <?php endforeach;
                            endif; ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-[var(--container-gap)] lg:px-0">
                <div class="text-l text-gray mb-4 sm:mb-8 font-bold sm:font-semibold">
                    <?php pll_e('Reviews'); ?>
                </div>
                <h2 class="mb-lg mb-32 sm:mb-48"><?= pll_e('Our clients say'); ?></h2>
            </div>
            <?php
            $form = '';
            switch (pll_current_language()) {
                case 'ru':
                    $form = '[trustindex data-widget-id=16e130234e42808b11167eba2ca]';
                    break;
                case 'ua':
                    $form = '[trustindex data-widget-id=a4fca6e3418d808bcf46db3b3fb]';
                    break;
                default:
                    $form = '[trustindex data-widget-id=f04e24d349e280796986c185a03]';
            }
            ?>
            <?= do_shortcode($form) ?>
        </div>
    </section>
    <!-- form -->
    <section>
        <div class="container">
            <div class="rounded-md bg-dark-main px-32 py-42 lg:px-[.84rem] lg:py-[.74rem]">
                <div class="pb-16 lg:pb-32 border-b-1 border-solid border-white lg:flex mb-16 sm:mb-24">
                    <h2 class="text-20 sm:text-[.32rem] lg:text-[.40rem] font-semibold leading-normal lg:leading-[110%] mb-16 sm:mb-0 lg:min-w-[6.23rem] lg:mr-[.45rem]">
                        <?= pll_e('Start your hair transplant journey'); ?>
                        <span class="text-light-main"> <?= pll_e('with online consultation'); ?></span>
                    </h2>
                    <p class="font-medium leading-normal">
                        <?= pll_e('You can start your hair transplant journey by scheduling an
                        appointment. Our expert physician will determine the best
                        treatment plan for you and initiate the process. Following the
                        necessary assessments, your treatment plan will be put into
                        action'); ?>
                    </p>
                </div>
                <form
                        data-form="contact"
                        class="grid form sm:grid-cols-2 lg:grid-cols-[repeat(2,_3.3rem)_auto] gap-x-8 gap-y-[.12rem]"
                >
                    <input class="hidden" type="hidden" value="Hairglobalmedik WEBSITE">
                    <div class="text-s flex flex-col font-medium form-item ">
                        <label for="name" class="mb-4 font-normal"
                        ><?= pll_e('Name/Surname'); ?></label
                        >
                        <input
                                type="text"
                                id="name"
                                name="name"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <div class="text-s flex flex-col font-medium  form-item">
                        <label for="phone" class="mb-4 font-normal"
                        ><?= pll_e('Phone number'); ?></label
                        >
                        <input
                                type="text"
                                id="phone"
                                name="phone"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <div
                            class="  form-item text-s flex flex-col font-medium lg:row-start-2 lg:row-end-3 lg:col-start-1 lg:col-end-2"
                    >
                        <label for="email" class="mb-4 font-normal">Email</label>
                        <input
                                type="email"
                                id="email"
                                name="email"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <div
                            class="text-s   form-item flex flex-col font-medium lg:row-start-2 lg:row-end-3 lg:col-start-2 lg:col-end-3"
                    >
                        <label for="comment" class="mb-4 font-normal"
                        ><?= pll_e('When do you plan to come?'); ?></label
                        >
                        <input
                                type="text"
                                id="comment"
                                name="comment"
                                class="bg-transparent rounded-sm border-1 border-solid border-white h-[.5rem] text-m p-12"
                        />
                        <div class="form-item__message"></div>
                    </div>
                    <button
                            type="submit"
                            class="btn btn__gray h-[.5rem] mt-8 sm:col-start-2 sm:col-end-3 lg:row-start-2 lg:row-end-3 lg:col-start-3 lg:col-end-4 self-end lg:ml-24 lg:w-[3.3rem]"
                    >
                        <?= pll_e('Make appointment'); ?>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- location -->
    <section class="pb-[1rem] sm-[1.2rem]">
        <div class="container">
            <div class="lg:flex items-center">
                <div class="rounded-sm overflow-hidden h-[1.83rem] sm:h-[3.33rem] lg:min-w-[6.1rem] mb-24 lg:mb-0 lg:mr-[1rem]">

                    <iframe class="size-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.435523459645!2d28.935042000000003!3d41.037603999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb9f57782fdd%3A0x6ced16a82501d0e9!2sHair.Globalmedik!5e0!3m2!1sru!2sua!4v1726600788113!5m2!1s<?= pll_current_language(); ?>!2s<?= pll_current_language(); ?>"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <h2 class="text-20 sm:text-[.32rem] lg:text-[.40rem] font-semibold leading-normal lg:leading-[110%] mb-16 sm:mb-24">
                        <?= pll_e('Are you ready to transform your look and boost your confidence'); ?>
                        <span class="text-[#27C1C2]"> <?= pll_e('with a hair transplant?'); ?> </span>
                    </h2>
                    <p class="text-light-gray leading-normal font-medium">
                        <?= pll_e('The journey begins with a simple yet crucial step – scheduling
                        an appointment. Our dedicated team is here to guide you
                        through the process and provide you with the information you
                        need to make your informed decisions.'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
