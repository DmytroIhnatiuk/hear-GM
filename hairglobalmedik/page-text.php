<?php /* Template Name: Text page */
get_header();

?>
<main class="">
    <section class="flex py-section items-center">
        <div class="container">
            <h1 class="h2 mt-42 pb-24 border-b border-solid  border-white mb-24">
                <?php the_title() ?>
            </h1>
            <div class="grid grid-cols-12 bg-dark-main py-48 rounded-md">
                <div class="col-start-2 col-span-10   ">

<div class="content-text">
    <?php the_content(); ?>
</div>




                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>

