<section class="product-features base-padding">
    <div class="non-matcss-container">
        <div class="single-product-container">
            <?php 
            // Group is cloneable
            $features = rwmb_meta( 'rw_feature_list' );
            if ( ! empty( $features ) ) {
                $count = 1;
              foreach ( $features as $feature ) {
                $heading    = $feature['rw_feature_heading'];
                $desc       = $feature['rw_feature_desc'];
                // $points      = $feature['rw_feature_points'];
                // print_r($points);
                $img        = $feature['rw_feature_image'];
                ?>
                <div class="single-product-feature">
                    <img src="<?php echo $img;?>" alt="<?php echo $heading;?>" class="feature-icon">
                    <div class="feature__right">
                        <h3><?php echo $heading;?></h3>
                        <p><?php echo $desc;?></p>
                    </div>
                </div>
              <?php  $count++; }
            }?>
        </div>
    </div>
</section>


<?php 
$slides = rwmb_meta( 'rw_slider_single' );
// Group is cloneable
if ( ! empty( $slides ) ) { ?> 

<section class="product-who base-padding no-lr-padding">
    <div class="container">
        <?php 
            $sheading       = rwmb_meta( 'rw_slider_heading' );
            $slides         = rwmb_meta( 'rw_slider_single' );
        ?>
        <h3><?php echo $sheading; ?></h3>
        <div class="slider__headings">
            <ul>
                <?php 
                // Group is cloneable
                if ( ! empty( $slides ) ) {
                    $count = 1;
                  foreach ( $slides as $slide ) {
                    // print_r($count);
                    $stitle     = $slide['rw_slide_heading'];
                    ?>
                    <li class="product-slide-heading <?php if ($count==1) { echo'active-product-slide';}?>"><?php echo $stitle;?></li>
                  <?php $count++;}
                }?>
            </ul>
        </div>

        <!-- Swiper Slider -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                $slides = rwmb_meta( 'rw_slider_single' );
                // Group is cloneable
                if ( ! empty( $slides ) ) {
                    $count = 1;
                  foreach ( $slides as $slide ) {
                    $stitle     = $slide['rw_slide_heading'];
                    $scontent   = $slide['rw_slide_content'];
                    $lower = strtolower($stitle);
                    $url = preg_replace('/\s+/', '-', $lower);

                    if ( is_singular( 'product' ) && $post->post_parent ) {
                        $is_child = true;
                        $title = $post->post_parent;
                    } else {
                        $is_child = false; 
                        $title = get_the_title($post->ID);
                    }

                    ?>
                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <?php if ($is_child == true) {?>
                            <div class="slide__left child_slide">
                                <?php echo $scontent; ?>
                            </div><div class="slide__right child_slide">
                                <p>Speak to a team member who understands your workflow.</p>
                                <a href="#modal-demo" class="btn ghost-btn no-shadow modal-trigger-general modal-trigger-demo">Book a chat</a>
                            </div>

                            <?php } else { ?>
                            <div class="slide__left parent_slide">
                                <?php echo $scontent; ?>
                            </div><div class="slide__right parent_slide">
                                <p>See why <?php echo $title;?> is a good fit for <?php echo $stitle; ?></p>
                                <a href="<?php the_permalink();?><?php echo $url;?>" class="btn ghost-btn no-shadow">Show me</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                  <?php }
                }?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<?php } ?>