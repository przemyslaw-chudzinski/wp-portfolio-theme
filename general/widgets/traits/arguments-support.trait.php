<?php

trait ArgumentsSupport
{
    public function getArg($args, $key, $default)
    {
        echo isset($args[$key]) ? $args[$key] : $default;
    }
}
