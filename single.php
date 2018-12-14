<?php get_header(); ?>

<!-------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------->


<!--CONTENIDO ARTICULO-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container my-3">
    <div class="row">
        <!--articulo-->
        <div class="col-12 col-md-9">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));
                        } 
                    ?>
            <h2 class="my-3"> <?php the_title();?> </h2>
            <p class="lead"><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
            <div class="text-justify">
                <?php the_excerpt(); ?>
                <?php the_content(); ?>
            </div>
        </div>

        <?php endwhile; endif; ?>
        <!--FIN ARTICULO-->




        <!--ASIDE-->
        <div class="col-12 col-md-3">
            <?php get_sidebar(); ?>
        </div>
        <!--FIN ASIDE-->


    </div>
</div>


<!--FIN CONTENIDO ARTICULO-->


<!-------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------->


<?php get_footer(); ?>