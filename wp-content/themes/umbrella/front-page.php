<?php get_header(); ?>
    <div id="main">
        <!-- About -->
        <?php get_page(6);?>
        <div class="section" id="about" style="background-image: url(<?php the_field('about_image');?>)">
            <div class="section-content">
                <div class="section-text">


                    <img class="site-logo" src="<?php the_field('site_logo');?>">
                    <?php the_field('about');?>
                    <a class="pure-button anchor-link" href="#services">What we do</a>
                </div>
            </div>
        </div>
        <!-- Services -->
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
    <!-- Clients -->
    <div class="section" id="clients">
        <?php get_page(6);?>
            <?php the_field('clients');?>
        <div class="client-grid pure-g">
        <?php
            $query = new WP_Query( array( 'post_type' => 'clients') );
            if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="client-tile pure-u-1 pure-u-md-1-2 pure-u-lg-1-3" >
                <a class="client-logo" href="<?php the_field('client_url'); ?>" target="_blank">
                    <img src="<?php the_field('client_logo'); ?>">
                </a>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Bio -->
    <?php get_page(6);?>
    <div class="section" id="bio" >
        <div class="section-content pure-g">
            <div class="section-text bio-text bio-section pure-u-1 pure-u-md-1-2">
                <?php the_field('bio');?>
            </div>
            <div class="bio-img bio-section pure-u-1 pure-u-md-1-2" data-bio-img='<?php the_field('bio_image');?>' style="background-image: linear-gradient(to right,rgba(2,65,109,1),transparent 50%),url(<?php the_field('bio_image');?>);">
            </div>
        </div>
    </div>

    <!-- Contact -->
    <?php get_page(6);?>
    <div class="section" id="contact" >
        <div class="contact-info">
            <div class="contact-body">
                <?php the_field('contact_text');?>
            </div>
            <div class="pure-g contact-btns">
                <div class="pure-u-1 pure-u-md-1-3">
                    <a class="pure-button" href="mailto:<?php the_field('contact_email');?>">
                        <i class="fa fa-envelope-o"></i><br> <?php the_field('contact_email');?>
                    </a>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <a class="pure-button" href="tel:<?php the_field('contact_phone');?>">
                        <i class="fa fa-phone"></i><br><?php the_field('contact_phone');?>
                    </a>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <a class="pure-button" href="https://www.google.com/maps/place/<?php the_field('contact_address');?>">
                        <i class="fa fa-map-marker"></i></i><br><span class="contact-addr"><?php the_field('contact_address');?></span>
                    </a>
                </div>
            </div>

        </div>
        <div class="contact-form-bg">
            <div class="form-container">
                <div class="form-success">
                    <div class="form-success-text">
                        <?php get_page(6);?>
                        <?php the_field('contact_form_success');?>
                    </div>
                </div>
                <form action="https://docs.google.com/forms/d/e/1FAIpQLSee9BCd8Oehab4HdRXyS235gDHZHekMl4VyeFRM5bpKE5zflw/formResponse" class="contact-form" method="POST" id="mG61Hd">
                    <!-- Name -->
                    <div class="form-field">
                        <input type="text" class="quantumWizTextinputPaperinputInput exportInput contact-name" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Name" aria-describedby="i.desc.814480587 i.err.814480587" name="entry.716104746"
                            value="" dir="auto" data-initial-dir="auto" data-initial-value="" required placeholder="Name">
                    </div>
                    <!-- Email -->
                    <div class="form-field">
                        <input type="email" class="quantumWizTextinputPaperinputInput exportInput contact-email" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Email" aria-describedby="i.desc.1517604728 i.err.1517604728" name="entry.1479226033"
                        value="" dir="auto" data-initial-dir="auto" data-initial-value="" required placeholder="Email">
                    </div>
                    <!-- Phone -->
                    <div class="form-field">
                        <input type="text" class="quantumWizTextinputPaperinputInput exportInput contact-phone" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Phone" aria-describedby="i.desc.317830038 i.err.317830038" name="entry.2096412461"
                        value="" dir="auto" data-initial-dir="auto" data-initial-value=""  placeholder="Phone" required pattern="\d{3}[\-]\d{3}[\-]\d{4}" oninvalid="this.setCustomValidity('Please enter a valid phone number format: 555-555-5555')" onchange="this.setCustomValidity('')">
                    </div>
                    <!-- Question -->
                    <div class="form-field">
                        <textarea placeholder="How can I help you?" class="quantumWizTextinputPapertextareaInput exportTextarea contact-text" jsname="YPqjbf" rows="5" data-rows="1" tabindex="0" aria-label="Question" jscontroller="gZjhIf" required jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" name="entry.455393523" dir="auto" data-initial-dir="auto" data-initial-value=""></textarea>
                    </div>
                    <!-- Submit -->
                    <div class="form-field">
                        <button type="submit" class="submit pure-button">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div><!-- end wrapper  -->

<?php get_footer(); ?>
