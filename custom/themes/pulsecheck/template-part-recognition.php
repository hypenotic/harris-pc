<?php 
$recogs = rwmb_meta( 'rw_recognition_list' );
// Group is cloneable
if ( ! empty( $recogs ) ) { ?> 

<section class="product-recognitions base-padding no-lr-padding">
    <div class="container">
        <h3 class="grey-text ta-center">Recognition</h3>
        <div class="recognition-container">
            <?php 
            // Group is cloneable
            if ( ! empty( $recogs ) ) {
              foreach ( $recogs as $recog ) {
                $r_name     = $recog['rw_recog_name'];
                $r_image    = $recog['rw_recog_image'];
                $r_link     = $recog['rw_recog_link'];
                ?>
                <div class="recog__image">
                    <?php if ($r_link) { ?>
                        <a href="<?php echo $r_link;?>" target="_blank"><img src="<?php echo $r_image; ?>" alt="<?php echo $r_name; ?>"></a>
                    <?php } else { ?>
                        <img src="<?php echo $r_image; ?>" alt="<?php echo $r_name; ?>">
                    <?php } ?>
                </div>
              <?php }
            }?>
        </div>
    </div>
</section>
<?php } ?>