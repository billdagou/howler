<?php
namespace Dagou\Howler\Source;

use Dagou\Howler\Interfaces\Source;
use Dagou\Howler\Traits\ExtConf;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    use ExtConf;

    const URL = '';

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        switch ($this->getExtConf('build')) {
            case 'core':
                return 'howler.core.min.js';
            case 'default':
                return 'howler.min.js';
            case 'spatial':
                return 'howler.spatial.min.js';
        }
    }
}