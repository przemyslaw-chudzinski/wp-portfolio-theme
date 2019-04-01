<?php

require_once 'widgets/wgt-reading-time.class.php';

function theme_register_reading_time_wgt()
{
    register_widget('Wgt_ReadingTime');
}
add_action('widgets_init', 'theme_register_reading_time_wgt');
