<?php 

function m__card($args){
    $defaults = array(
        "src" => get_template_directory_uri() . "images/placeholder.png",
        "use_img_url" => true,
        "heading" => "Lorem Ipsum",
        "excerpt" => "nfvlkdfjnvôfvmoefnvpmdfjpmdfhiovudfomiuhnfdivbjufdlibvflbvilhfdugvlifdbvidlbhvildfv",
        "link" => "#" 
    );
    $args = wp_parse_args((array)$args, $defaults)

    ?>

<div class="m__card">
    <div class="m__card-image">
        <img src="<?php $args["src"] ?>" alt="">
    </div>

    <h3 class="m__card-heading">
        <?php esc_html_e($args["heading"]); ?>
    </h3>
</div>
}