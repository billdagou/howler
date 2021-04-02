<?php
namespace Dagou\Howler\Interfaces;

interface Source {
    const VERSION = '2.2.1';

    /**
     * @return string
     */
    public function getJs(): string;
}