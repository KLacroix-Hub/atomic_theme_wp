<?php 
function a__button($args){
$defaults = array(
"type" => "button",
"button_text" => "Submiut",
"link" =>"",
"class" => ""
);
$args = wp_parse_args((array)$args, $defaults);

if("button" == $args["type"]):?>
<button class="button <?php esc_attr_e($args["class"]); ?>">
    <?php esc_html_e($args["button_text"]); ?>
</button>
<?php
elseif('text' == $args["type"]):?>
<a href="<?php esc_url($args["link"]); ?>" class="text-button"><?php esc_html_e($args["button_text"]) ?></a>
<?php endif;
}?>