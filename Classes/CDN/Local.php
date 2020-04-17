<?php
namespace Dagou\Howler\CDN;

use Dagou\Howler\Traits\Asset;

class Local extends AbstractCDN {
    use Asset;
    const URL = 'EXT:howler/Resources/Public/';

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath(
            self::URL.$this->getBuild()
        );
    }
}