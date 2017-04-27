<?php if ($is_child == true) { ?>
<?php 
$tslides = rwmb_meta( 'rw_tslider_single' );
// Group is cloneable
if ( ! empty( $tslides ) ) { ?> 

<section class="product-testimonial-slider base-padding no-lr-padding">
    <div class="container">
        <?php if (count($tslides) === 1) { ?>
        
        <?php foreach ( $tslides as $tslide ) {
            $quote      = $tslide['rw_tslide_content'];
            $source     = $tslide['rw_tslide_source'];
            ?>
            <div class="single-testimonial">
                <div><span>
                    
                    <svg id="slider-QS" width="28px" height="24px" viewBox="0 0 28 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.568444293">
                            <g id="Component" transform="translate(-59.000000, -771.000000)" fill="#00C185">
                                <path d="M59.4286103,771 C59.1715173,771 59,771.171152 59,771.428245 L59,782.571016 C59,782.828109 59.1715173,782.999627 59.4286103,782.999627 L66.7142547,782.999627 C66.7142547,787.346803 63.3471767,790.713881 59,790.713881 L59,794.999253 C65.6240777,794.999253 70.9996267,789.623704 70.9996267,782.999627 L70.9996267,771.428245 C70.9996267,771.171152 70.8284751,771 70.571382,771 L59.4286103,771 Z M74.856754,771 C74.599661,771 74.4285094,771.171152 74.4285094,771.428245 L74.4285094,782.571016 C74.4285094,782.828109 74.599661,782.999627 74.856754,782.999627 L82.1423984,782.999627 C82.1423984,787.346803 78.7753204,790.713881 74.4285094,790.713881 L74.4285094,794.999253 C81.0525871,794.999253 86.428136,789.623704 86.428136,782.999627 L86.428136,771.428245 C86.428136,771.171152 86.2566188,771 85.9995257,771 L74.856754,771 Z" id="Page-1" transform="translate(72.714068, 782.999627) scale(-1, -1) translate(-72.714068, -782.999627) "></path>
                            </g>
                        </g>
                    </svg>

                    <?php echo $quote;?>

                    
                    <svg id="slider-QE" width="28px" height="24px" viewBox="0 0 28 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 43.1 (39012) - http://www.bohemiancoding.com/sketch -->
                        <desc>Created with Sketch.</desc>
                        <defs></defs>
                        <g id="Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.568444293">
                            <g id="Component" transform="translate(-832.000000, -864.000000)" fill="#00C185">
                                <path d="M832.42861,864 C832.171517,864 832,864.171152 832,864.428245 L832,875.571016 C832,875.828109 832.171517,875.999627 832.42861,875.999627 L839.714255,875.999627 C839.714255,880.346803 836.347177,883.713881 832,883.713881 L832,887.999253 C838.624078,887.999253 843.999627,882.623704 843.999627,875.999627 L843.999627,864.428245 C843.999627,864.171152 843.828475,864 843.571382,864 L832.42861,864 Z M847.856754,864 C847.599661,864 847.428509,864.171152 847.428509,864.428245 L847.428509,875.571016 C847.428509,875.828109 847.599661,875.999627 847.856754,875.999627 L855.142398,875.999627 C855.142398,880.346803 851.77532,883.713881 847.428509,883.713881 L847.428509,887.999253 C854.052587,887.999253 859.428136,882.623704 859.428136,875.999627 L859.428136,864.428245 C859.428136,864.171152 859.256619,864 858.999526,864 L847.856754,864 Z" id="Page-1"></path>
                            </g>
                        </g>
                    </svg>  

                </span></div>
                <cite><?php echo $source;?></cite>
            </div>
        <?php }?>

        <?php } else { ?>
        <!-- Swiper Slider -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                // Group is cloneable
                if ( ! empty( $slides ) ) {
                    $count = 1;
                  foreach ( $slides as $slide ) {
                    $quote      = $slide['rw_tslide_content'];
                    $source     = $slide['rw_tslide_source'];
                    ?>
                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <?php echo $quote;?>
                            <?php echo $source;?>
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
        <?php } ?>
        
    </div>
</section>
<?php } ?>
<?php } ?>