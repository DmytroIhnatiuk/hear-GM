<?php
function add_favicons()
{
    ?>
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-57x57.png' ?>">
    <link rel="apple-touch-icon" sizes="60x60"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-60x60.png' ?>">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-72x72.png' ?>">
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-76x76.png' ?>">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-114x114.png' ?>">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-120x120.png' ?>">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-144x144.png' ?>">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-152x152.png' ?>">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/apple-icon-180x180.png' ?>">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/android-icon-192x192.png' ?>">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/android-icon-96x96.png' ?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/icons/favicon/manifest.json' ?>">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
          content="<?php echo get_template_directory_uri() . '/assets/icons/favicon/ms-icon-144x144.png' ?>">
    <meta name="theme-color" content="#ffffff">
    <?php
}
function add_trust()
{
    switch (pll_current_language()) {
        case 'ru':
            ?>
            <script defer async src='https://cdn.trustindex.io/loader.js?16e130234e42808b11167eba2ca'></script>  <?php
            break;
        case 'ua':
            ?>
            <script defer async src='https://cdn.trustindex.io/loader.js?a4fca6e3418d808bcf46db3b3fb'></script>
            <?php
            break;
        default:
            echo "<script defer async src='https://cdn.trustindex.io/loader.js?f04e24d349e280796986c185a03'></script> ";
    }
    ?>

    <?php
}

add_action('wp_head', 'add_favicons', '1');
add_action('wp_head', 'add_trust', '99');