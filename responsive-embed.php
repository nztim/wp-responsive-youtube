<?php

/*
Plugin Name: Responsive YouTube Embed Shortcode
Version: 1.0
Author: Tim Wylie
License: GPLv2
*/

function nztim_responsive_youtube_shortcode($atts) 
{
    $html =<<<EOT
<style>
    .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } 
    .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
<div class='embed-container'>
    <iframe src='https://www.youtube.com/embed/***ID***' frameborder='0' allowfullscreen></iframe>
</div>
EOT;
    $id = isset($atts['id']) ? strval($atts['id']) : '';
    return $id ? str_replace('***ID***', $id, $html) : '';
}
add_shortcode ('responsive-youtube', 'nztim_responsive_youtube_shortcode' );