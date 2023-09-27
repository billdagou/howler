<?php
namespace Dagou\Howler\Interfaces;

interface Source {
    /**
     * @param string $build
     *
     * @return string
     */
    public function getJs(string $build): string;
}