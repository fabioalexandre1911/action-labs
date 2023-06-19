<?php get_header (); ?>

<main>
<?php
    if (have_posts( )):
        the_post( );
    ?>
<section class="themeArchive-top themeContainer">
            <div class="themeContainer__center">
                <div class="themeArchive-top__contents">
                </div>
            </div>
            <h1><?php the_title();?></h1>
            <div class="themeArchive-top__description">
                 <?php the_archive_description(); ?>    
            </div>
</section>

<section class="themeContainer themeSingle-content">
    <div class="themeSingle-content">
        <div class="themeSingle-content__thumbnail">
        <?php the_post_thumbnail(); ?>  
        </div>
        <div class="themeSingle-content__htmlchars">
            <?php the_content(); ?>
        </div>
    </div>
    </section>
    <?php
    endif;
    ?>
</main>

<?php get_footer (); ?>