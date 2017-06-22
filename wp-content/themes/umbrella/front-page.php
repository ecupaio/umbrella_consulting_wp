<?php get_header(); ?>
    <div id="main">

        <div class="section" id="services">

            <div id="services-slides">
                <?php
                    $query = new WP_Query( array( 'post_type' => 'services') );
                    if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="slide" style="background-image: url(<?php the_field('image');?>)">
                        <div class="slide-inner">
                            <div class="slide-content">
                                <div class="slide-title"><?php the_title(); ?></div>
                                <div class="slide-body"><?php the_content(); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>
            </div>
            <div><?php get_template_directory_uri(); ?></div>
            <div id="services-controls">
                <?php
                    $query = new WP_Query( array( 'post_type' => 'services') );
                    if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="slide-control">
                        <div class="slide-title"><?php the_title(); ?></div>
                        <span class="slide-highlight"></span>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>
            </div>
        </div>
    </div>
<!-- end wrapper  -->
</div>

<?php get_footer(); ?>
