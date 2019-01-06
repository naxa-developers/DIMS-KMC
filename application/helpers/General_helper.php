<?php
if (!defined('BASEPATH'))
    echo ('No direct script access allowed');

function pp($echo = '', $die = TRUE) {
    echo '<pre>';
    print_r($echo);
    echo '</pre>';
    $die && die;
}
