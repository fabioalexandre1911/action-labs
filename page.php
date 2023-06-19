<?php get_header (); ?>

<main>
<?php
    if (have_posts( )):
        the_post( );
    ?>


<section class="themeContainer themeSingle-content">
    <div class="themeSingle-content">
    <div class="themeContainer__center">
                <div class="themeArchive-top__contents">
                <h1><?php the_title();?></h1>
                </div>
            </div>
    
       
       <?php the_content(); ?>
        
    </div>
    </section>
    <?php
    endif;
    ?>
</main>

<?php get_footer (); ?>