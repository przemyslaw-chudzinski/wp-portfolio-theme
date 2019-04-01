<?php

require_once 'traits/arguments-support.trait.php';

class Wgt_ReadingTime extends WP_Widget
{
    use ArgumentsSupport;

    protected $post;
    protected $readingTime;

    public function __construct()
    {
        $args = [
            'description' => 'Display time of reading'
        ];
        parent::__construct('wgt-reading-time', 'Reading time', $args);
    }

    public function widget($args, $instance)
    {
        $this->post = get_post();
        $this->calculateReadingTime();
        require_once 'wgt-reading-time.view.php';
    }

    public function form($instance)
    {
        require 'wgt-reading-time.form.php';
    }

    protected function calculateReadingTime()
    {
        if (!isset($this->post)) return $this->readingTime = null;
        $wordsArray = explode(' ', $this->post->post_content);
        return $this->readingTime = round(count($wordsArray) / 200);
    }
}


