<?php
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    function enqueue_parent_styles() {
       wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    }
    /*remove_action('storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'footer_hue', 20 );
    function footer_hue(){
    echo "<p> Création et dévéloppement par Hue GARCIA MONCADA</a> </p>";
    }*/
    //Remove "Storefront Designed by WooThemes" from Footer
add_action( 'init', 'custom_remove_footer_credit', 10 );
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 
 
function custom_storefront_credit() {
    ?>
    <div class="col-md-4">
        &copy; <?php echo get_bloginfo( 'name' ) . ' ' . get_the_date( 'Y' );
        echo "&nbsp;&nbsp;";?>
        <p> <a href="http://huegarciamoncada.fr/index.php/accueil/">Création et dévéloppement par Hue GARCIA MONCADA</a> </p> 
    </div><!-- .site-info -->
    <div class="col-md-4">
    <?php echo do_shortcode('[aps-social id="1"]')?>
    </div>
    <?php
}
    
    ?>
   