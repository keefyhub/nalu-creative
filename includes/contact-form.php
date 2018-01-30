<?php
if (function_exists('wpcf7_load_css')) {
    add_filter('wpcf7_load_css', '__return_false');
}