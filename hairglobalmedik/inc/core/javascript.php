<?php
if (!function_exists('gm_scripts_setup')) :
    function gm_scripts_setup()
    {
        $release_version = '1.1.0';
        wp_enqueue_script('gm-scripts', get_theme_file_uri('/assets/js/app.min.js'), array(), $release_version);
        if (is_front_page()) {
            wp_enqueue_script('homepage-scripts', get_theme_file_uri('/assets/js/home.min.js'), array(), $release_version);
        }

    }
endif;
add_action('wp_footer', 'gm_scripts_setup');
function php_script()
{
    ?>
    <script defer>
        <?php $isEn = get_locale(); ?>
        const lang = '<?php echo $isEn; ?>';
        const isEn = lang === 'en' ? true : false;
        let path = '<?php echo get_template_directory_uri(); ?>';
    </script>
    <?php
}

// Добавляем хук для выполнения функции в head
add_action('wp_footer', 'php_script');