<?php
namespace Dagou\Howler\Source;

use Dagou\Howler\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    protected const URL = '';
    protected const VERSION = '2.2.4';

    /**
     * @param string $build
     *
     * @return string
     */
    public function getJs(string $build): string {
        return static::URL.$this->getJsBuild($build);
    }

    /**
     * @param string $buildName
     *
     * @return string
     */
    protected function getJsBuild(string $buildName): string {
        return 'howler'.($buildName ? '.'.$buildName : '').'.min.js';
    }
}