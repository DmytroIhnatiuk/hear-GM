<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hairglobalmedik
 */
$langs = pll_the_languages(array('echo' => 0));
//$langs = array_filter($langs, function ($lang) {
//    return in_array($lang['slug'], ['uk', 'ru', 'en']);
//});
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- TrustBox script --> <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> <!-- End TrustBox script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" async></script>
    <script src="https://assets.bookimed.com/partners/widget/bookimed-widget.js" async></script>
</head>

<body class="body 1">
<div class="page-container">
    <header class="header z-50 min-w-full">
        <div class="container h-full">
            <div
                    class="flex justify-between items-center border-dark-gray border-solid border-b-1 min-h-full pt-16 pb-[.08rem] sm:pt-32 sm:pb-4 sm:border-none"
            >
                <a href="<?= home_url('/'); ?>">
                    <svg class="h-[.4rem] w-[1.44rem] sm:h-[.6rem] sm:w-[2.63rem] fill-main">
                        <use class="size-full" xlink:href="#logo"></use>
                    </svg>
                </a>
                <div class="flex 11 items-center">
                    <a href="tel:<?= get_field('phone', 'option') ?>"
                       class="size-[.4rem] rounded main-color__gradient icon-phone text-white text-[.24rem] flex justify-center items-center mr-12 sm:hidden"></a>

                    <div class="language-switch  relative">
                        <div class="language-switch__header uppercase">
                            <?= pll_current_language() ?>
                            <span class="icon-arrow_s"></span>
                        </div>
                        <div class="language-switch__content">
                            <ul class="language-switch__languages">
                                <?php
                                pll_the_languages(array('slug' => 0, 'show_names' => 1));
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
