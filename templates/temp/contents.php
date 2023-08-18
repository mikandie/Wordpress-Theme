    <!-- Your existing page content goes here -->


    <?php if(have_posts( )):?>
        <?php while (have_posts()) : the_post(); ?>
                <!-- ***** Demo Variations Start ***** -->
        
                <div class="col-lg-4">
                    <div class="demo-item">
                        <a href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url()?>" alt="DigiMedia - variation 1"></a>
                        <h4><?php echo the_title()?></h4>
                    </div>
                </div>
                
    <!-- ***** Demo Variations End ***** -->
        <?php endwhile; ?>
    <?php endif ?>