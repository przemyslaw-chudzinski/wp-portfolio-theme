<?php


require_once 'traits/arguments-support.trait.php';

class Wgt_ReadingTime extends WP_Widget
{
    use ArgumentsSupport;

    public function __construct()
    {
        $args = [
            'description' => 'Display time of reading'
        ];
        parent::__construct('wgt-reading-time', 'Reading time', $args);
    }

    public function widget($args, $instance)
    {
        require_once 'wgt-reading-time.view.php';
    }
}


