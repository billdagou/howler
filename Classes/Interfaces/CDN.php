<?php
namespace Dagou\Howler\Interfaces;

interface CDN {
    const VERSION = '2.1.3';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}