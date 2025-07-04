<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hairglobalmedik
 */

?>

<?php if(1!==1): ?>
    <div id="bookimed-widget" data-bookimed-widget-id="591453f6-723a-4f39-a406-4dc2d3059f1f" data-lang="<?= pll_current_language() ?>"
         data-theme="light"><a
                href="ᐈ Лечение за границей – 1611 клиник по всему миру, отзывы и цены | Bookimed "
                target="_blank"><?php pll_e('Платформа №1 по лечению за рубежом'); ?></a></div>
<?php endif;?>
<footer class="footer bg-dark-gray rounded-t-md py-42">
    <div class="container">
        <div class="grid mb-32 sm:grid-cols-2 lg:grid-cols-[auto_1fr_1fr] lg:gap-x-[1rem] sm:gap-x-[.4rem]">
            <a href="<?= home_url('/'); ?>"
               class="mb-42 sm:col-start-1 sm:col-end-3 lg:row-start-1 lg:col-start-1 lg:col-end-2">
                <svg class="h-[.67rem] w-[2.95rem] sm:h-[.6rem] sm:w-[2.63rem] fill-main">
                    <use class="size-full" xlink:href="#logo"></use>
                </svg>
            </a>


            <div class="pl-24 mb-48 sm:p-0 lg:row-start-1 lg:row-end-3">
                <p class="font-medium mb-16 text-light-gray">
                    <?php pll_e('Our goal is to provide quality care in a courteous, respectful and
                    compassionate manner. We hope you will seek care from us and strive to
                    be the first and best choice for healthcare.'); ?>
                </p>
                <button class="btn btn__main-color h-[.54rem] w-[2.36rem] mb-16">
                    <?php pll_e('Online consultation'); ?>
                </button>

            </div>

            <div class="pl-24 flex flex-col mb-32 sm:p-0 sm:row-start-2 sm:row-end-4 lg:row-start-1 lg:row-end-3">

                <div class="text-20 text-main mb-16"><?php pll_e('Quick contacts'); ?></div>
                <p class="font-medium mb-32">
                    <?= pll_e('If you have any questions or need help, please feel free to contact us
                    for medical assistance.'); ?>
                </p>
                <a class="text-20 font-medium mb-8 transition-link lg:hover:text-main w-max"
                   href="<?= get_field('google_pin', 'option') ?>" target="_blank">
                    Istanbul, Тurkey
                </a>
                <a href="tel:<?= get_field('phone', 'option') ?>"
                   class="text-20 font-medium mb-16 transition-link lg:hover:text-main w-max">
                    <?= get_field('phone', 'option') ?>
                </a>
                <div class="flex mb-20">
                    <a href="<?= get_field('whatsapp_link', 'option') ?>" class="mr-24 last:mr-0"><span
                                class="icon-whatsapp text-[.32rem] text-main transition-link lg:hover:text-accent"></span></a>
                    <a href="<?= get_field('telegram_link', 'option') ?>" class="mr-24 last:mr-0"><span
                                class="icon-telegram text-[.32rem] text-main transition-link lg:hover:text-accent"></span></a>
                    <a href="<?= get_field('viber_link', 'option') ?>" class="mr-24 last:mr-0"><span
                                class="icon-viber text-[.32rem] text-main transition-link lg:hover:text-accent"></span></a>
                    <a href="<?= pll_current_language() !== 'en' ? get_field('instagram_link', 'option') : 'https://www.instagram.com/turkey.hairglobalmedik?igsh=YWNoNW82aG14N29i' ?>"

                       class="mr-24 w-32 h-32 rounded bg-main flex items-center justify-center last:mr-0">
                        <svg width="20" height="20" class="fill-dark-gray ">
                            <use xlink:href="#instagram_logo"></use>
                        </svg>
                    </a>


                </div>
                <!-- TrustBox widget - Review Collector -->
                <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc"
                     data-businessunit-id="665ee33a3eb83ca97fbb5768" data-style-height="52px" data-style-width="100%"><a
                            href="https://www.trustpilot.com/review/hairglobalmedik.com" target="_blank" rel="noopener">Trustpilot</a>
                </div> <!-- End TrustBox widget -->

            </div>

            <div class="mx-24 sm:m-0 relative h-[1.8rem] w-[2.92rem]">
                <div class="image">
                    <img src="<?= get_img_link('cert.png') ?>" alt="certificate"/>
                </div>

            </div>
        </div>
        <div class="flex flex-col sm:flex-row justify-center items-center text-s font-medium">
            <?php
            $policyLink = '';
            switch (pll_current_language()) {
                case 'ru':
                    $policyLink = '/ru/policy/';
                    break;
                case 'ua':
                    $policyLink = '/ua/policy-privat/';
                default:
                    $policyLink = '/privacy-policy/';
            } ?>


            <a href="<?= $policyLink; ?>" class="mb-14 sm:mb-0 transition-link lg:hover:text-main">
                <?php pll_e('Privacy policy'); ?>
            </a>
            <span class="mx-16 h-20 w-[2px] bg-white hidden sm:block"></span>
            <a href="https://digitalnation.com.ua/" target="_blank" class="flex items-center">
                <div class="mr-16 transition-link lg:hover:text-main">Powered by</div>
                <div class="image relative h-[.25rem] w-[1.2rem]">
                    <svg class="icon" viewBox="0 0 125 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="path"
                              d="M33.926 9.965C34.888 9.965 35.7287 10.1513 36.448 10.524C37.176 10.888 37.735 11.4167 38.125 12.11C38.5237 12.7947 38.723 13.5963 38.723 14.515C38.723 15.4337 38.5237 16.231 38.125 16.907C37.735 17.583 37.176 18.103 36.448 18.467C35.7287 18.8223 34.888 19 33.926 19H30.975V9.965H33.926ZM33.926 17.791C34.9833 17.791 35.7937 17.505 36.357 16.933C36.9203 16.361 37.202 15.555 37.202 14.515C37.202 13.4663 36.9203 12.6473 36.357 12.058C35.7937 11.4687 34.9833 11.174 33.926 11.174H32.457V17.791H33.926ZM40.9458 10.888C40.6771 10.888 40.4518 10.797 40.2698 10.615C40.0878 10.433 39.9968 10.2077 39.9968 9.939C39.9968 9.67033 40.0878 9.445 40.2698 9.263C40.4518 9.081 40.6771 8.99 40.9458 8.99C41.2058 8.99 41.4268 9.081 41.6088 9.263C41.7908 9.445 41.8818 9.67033 41.8818 9.939C41.8818 10.2077 41.7908 10.433 41.6088 10.615C41.4268 10.797 41.2058 10.888 40.9458 10.888ZM41.6738 11.837V19H40.1918V11.837H41.6738ZM46.5055 11.72C47.0602 11.72 47.5499 11.8327 47.9745 12.058C48.4079 12.2747 48.7459 12.5477 48.9885 12.877V11.837H50.4835V19.117C50.4835 19.7757 50.3449 20.3607 50.0675 20.872C49.7902 21.392 49.3872 21.7993 48.8585 22.094C48.3385 22.3887 47.7145 22.536 46.9865 22.536C46.0159 22.536 45.2099 22.3063 44.5685 21.847C43.9272 21.3963 43.5632 20.781 43.4765 20.001H44.9455C45.0582 20.3737 45.2965 20.6727 45.6605 20.898C46.0332 21.132 46.4752 21.249 46.9865 21.249C47.5845 21.249 48.0655 21.067 48.4295 20.703C48.8022 20.339 48.9885 19.8103 48.9885 19.117V17.921C48.7372 18.259 48.3949 18.545 47.9615 18.779C47.5369 19.0043 47.0515 19.117 46.5055 19.117C45.8815 19.117 45.3095 18.961 44.7895 18.649C44.2782 18.3283 43.8709 17.8863 43.5675 17.323C43.2729 16.751 43.1255 16.1053 43.1255 15.386C43.1255 14.6667 43.2729 14.0297 43.5675 13.475C43.8709 12.9203 44.2782 12.4913 44.7895 12.188C45.3095 11.876 45.8815 11.72 46.5055 11.72ZM48.9885 15.412C48.9885 14.918 48.8845 14.489 48.6765 14.125C48.4772 13.761 48.2129 13.4837 47.8835 13.293C47.5542 13.1023 47.1989 13.007 46.8175 13.007C46.4362 13.007 46.0809 13.1023 45.7515 13.293C45.4222 13.475 45.1535 13.748 44.9455 14.112C44.7462 14.4673 44.6465 14.892 44.6465 15.386C44.6465 15.88 44.7462 16.3133 44.9455 16.686C45.1535 17.0587 45.4222 17.3447 45.7515 17.544C46.0895 17.7347 46.4449 17.83 46.8175 17.83C47.1989 17.83 47.5542 17.7347 47.8835 17.544C48.2129 17.3533 48.4772 17.076 48.6765 16.712C48.8845 16.3393 48.9885 15.906 48.9885 15.412ZM53.1841 10.888C52.9154 10.888 52.6901 10.797 52.5081 10.615C52.3261 10.433 52.2351 10.2077 52.2351 9.939C52.2351 9.67033 52.3261 9.445 52.5081 9.263C52.6901 9.081 52.9154 8.99 53.1841 8.99C53.4441 8.99 53.6651 9.081 53.8471 9.263C54.0291 9.445 54.1201 9.67033 54.1201 9.939C54.1201 10.2077 54.0291 10.433 53.8471 10.615C53.6651 10.797 53.4441 10.888 53.1841 10.888ZM53.9121 11.837V19H52.4301V11.837H53.9121ZM57.5868 13.046V17.011C57.5868 17.2797 57.6475 17.4747 57.7688 17.596C57.8988 17.7087 58.1155 17.765 58.4188 17.765H59.3288V19H58.1588C57.4915 19 56.9801 18.844 56.6248 18.532C56.2695 18.22 56.0918 17.713 56.0918 17.011V13.046H55.2468V11.837H56.0918V10.056H57.5868V11.837H59.3288V13.046H57.5868ZM60.2007 15.386C60.2007 14.6667 60.3481 14.0297 60.6427 13.475C60.9461 12.9203 61.3534 12.4913 61.8647 12.188C62.3847 11.876 62.9567 11.72 63.5807 11.72C64.1441 11.72 64.6337 11.8327 65.0497 12.058C65.4744 12.2747 65.8124 12.5477 66.0637 12.877V11.837H67.5587V19H66.0637V17.934C65.8124 18.272 65.4701 18.5537 65.0367 18.779C64.6034 19.0043 64.1094 19.117 63.5547 19.117C62.9394 19.117 62.3761 18.961 61.8647 18.649C61.3534 18.3283 60.9461 17.8863 60.6427 17.323C60.3481 16.751 60.2007 16.1053 60.2007 15.386ZM66.0637 15.412C66.0637 14.918 65.9597 14.489 65.7517 14.125C65.5524 13.761 65.2881 13.4837 64.9587 13.293C64.6294 13.1023 64.2741 13.007 63.8927 13.007C63.5114 13.007 63.1561 13.1023 62.8267 13.293C62.4974 13.475 62.2287 13.748 62.0207 14.112C61.8214 14.4673 61.7217 14.892 61.7217 15.386C61.7217 15.88 61.8214 16.3133 62.0207 16.686C62.2287 17.0587 62.4974 17.3447 62.8267 17.544C63.1647 17.7347 63.5201 17.83 63.8927 17.83C64.2741 17.83 64.6294 17.7347 64.9587 17.544C65.2881 17.3533 65.5524 17.076 65.7517 16.712C65.9597 16.3393 66.0637 15.906 66.0637 15.412ZM70.9873 9.38V19H69.5053V9.38H70.9873ZM83.733 19H82.251L77.792 12.253V19H76.31V9.952H77.792L82.251 16.686V9.952H83.733V19ZM91.1261 17.154H87.3431L86.6931 19H85.1461L88.3831 9.952H90.0991L93.3361 19H91.7761L91.1261 17.154ZM90.7101 15.945L89.2411 11.746L87.7591 15.945H90.7101ZM100.581 9.965V11.174H98.1756V19H96.6936V11.174H94.2756V9.965H100.581ZM103.563 9.965V19H102.081V9.965H103.563ZM109.63 19.091C108.79 19.091 108.014 18.896 107.303 18.506C106.601 18.1073 106.042 17.557 105.626 16.855C105.219 16.1443 105.015 15.347 105.015 14.463C105.015 13.579 105.219 12.786 105.626 12.084C106.042 11.382 106.601 10.836 107.303 10.446C108.014 10.0473 108.79 9.848 109.63 9.848C110.48 9.848 111.255 10.0473 111.957 10.446C112.668 10.836 113.227 11.382 113.634 12.084C114.042 12.786 114.245 13.579 114.245 14.463C114.245 15.347 114.042 16.1443 113.634 16.855C113.227 17.557 112.668 18.1073 111.957 18.506C111.255 18.896 110.48 19.091 109.63 19.091ZM109.63 17.804C110.228 17.804 110.761 17.6697 111.229 17.401C111.697 17.1237 112.061 16.7337 112.321 16.231C112.59 15.7197 112.724 15.1303 112.724 14.463C112.724 13.7957 112.59 13.2107 112.321 12.708C112.061 12.2053 111.697 11.8197 111.229 11.551C110.761 11.2823 110.228 11.148 109.63 11.148C109.032 11.148 108.499 11.2823 108.031 11.551C107.563 11.8197 107.195 12.2053 106.926 12.708C106.666 13.2107 106.536 13.7957 106.536 14.463C106.536 15.1303 106.666 15.7197 106.926 16.231C107.195 16.7337 107.563 17.1237 108.031 17.401C108.499 17.6697 109.032 17.804 109.63 17.804ZM123.127 19H121.645L117.186 12.253V19H115.704V9.952H117.186L121.645 16.686V9.952H123.127V19Z"
                              fill="#fff"></path>
                        <path d="M15.8779 24.963C22.1078 24.963 27.1581 19.9664 27.1581 13.8028C27.1581 7.63917 22.1078 2.64258 15.8779 2.64258C9.64797 2.64258 4.59766 7.63917 4.59766 13.8028C4.59766 19.9664 9.64797 24.963 15.8779 24.963Z"
                              stroke="url(#paint0_radial_475_1676)" stroke-width="3"></path>
                        <path d="M13.2802 24.3204C19.5101 24.3204 24.5604 19.3238 24.5604 13.1602C24.5604 6.9966 19.5101 2 13.2802 2C7.05032 2 2 6.9966 2 13.1602C2 19.3238 7.05032 24.3204 13.2802 24.3204Z"
                              stroke="url(#paint1_radial_475_1676)" stroke-width="3"></path>
                        <path class="letter"
                              d="M13.6044 26.2501C19.8343 26.2501 24.8846 21.2535 24.8846 15.0899C24.8846 8.92628 19.8343 3.92969 13.6044 3.92969C7.37454 3.92969 2.32422 8.92628 2.32422 15.0899C2.32422 21.2535 7.37454 26.2501 13.6044 26.2501Z"
                              stroke="#fff" stroke-width="3"></path>
                        <defs>
                            <radialGradient id="paint0_radial_475_1676" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(15.8779 13.8028) rotate(4.1367) scale(14.3764 14.4756)">
                                <stop stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0.12"></stop>
                            </radialGradient>
                            <radialGradient id="paint1_radial_475_1676" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(13.2802 13.1602) rotate(159.973) scale(3.287 3.26028)">
                                <stop stop-color="#fff"></stop>
                                <stop offset="1" stop-color="#fff" stop-opacity="0.49"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</footer>

</div>
<?php echo get_template_part('template-parts/svg-icons'); ?>
<div data-fullscreen class="modal  hide  ">
    <div class="modal__wrapper pos-r">
        <div class="modal__body pos-r container">
            <div class="modal__content w-100 pos-r">

            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
