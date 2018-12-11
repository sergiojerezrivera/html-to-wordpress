<?php get_header(); ?>
    <!--CONTENIDO-->


    <div class="container my-5">
        <div class="row">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!--articulo-->
            <div class="col-12 col-sm-6 col-md-4 mb-3">
                <div class="card">
                
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid'));
                        } 
                        ?>
                    </a>
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title();?></h5></a>
                        <p class="card-text"><?php the_excerpt(); ?></p>

                    </div>

                    <div class="card-footer">
                        <small class="text-muted">
                        <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?> / 
                        <?php the_category( ', ' ); ?> / 
                        <?php the_author(); ?> </small>
                    </div>

                </div>

            </div>     
            <!--FIN articulo-->
        <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
            
            
             
                

        </div>
    </div>
    <!--FIN CONTENIDO-->
<?php get_footer(); ?>