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