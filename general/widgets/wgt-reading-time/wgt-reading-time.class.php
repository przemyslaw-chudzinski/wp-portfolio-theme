<?php

require get_template_directory().'/general/widgets/traits/arguments-support.trait.php';

class Wgt_ReadingTime extends WP_Widget
{
    use ArgumentsSupport;

    protected $post;
    protected $readingTime;
    protected $words_per_min;

    public function __construct()
    {
        $this->post = null;
        $this->readingTime = 0;
        $this->words_per_min = 150;

        $args = [
            'description' => 'Display time of reading'
        ];
        parent::__construct('wgt-reading-time', 'Reading time', $args);
    }

    public function widget($args, $instance)
    {
        $this->post = get_post();
        $this->words_per_min = (int) $this->getWgtWordsPerMin($instance);
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
        return $this->words_per_min > 0 ? $this->readingTime = round(count($wordsArray) / (int) $this->words_per_min) : 0;
    }

    public function getWgtTitle($instance, $default = 'Cas czytania')
    {
        return isset($instance['title']) ? $instance['title'] : $default;
    }

    public function getWgtWordsPerMin($instance, $default = 200)
    {
        return isset($instance['words']) ? $instance['words'] : $default;
    }
}


