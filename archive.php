<?php get_header (); ?>

<main>
<section class="themeHomeHero themeContainer">
            <h1><?php single_term_title();?></h1>
            <div class="themeArchive-top__description">
                 <?php the_archive_description(); ?>    
            </div>
</section>

    <section class="themeContainer themeHomeBlog">
    <div class="themeContainer__center">
        <div class="themeHomeBlog__contents themeGrid">
        <?php
            if (have_posts()):
                while (have_posts()):   
                    the_post();
                    get_template_part( 'templates/content/content-grid');
                endwhile;
            endif;
            ?>
        </div>
        </div>
    </section>
</main>

<?php get_footer (); ?>