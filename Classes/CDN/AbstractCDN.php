<?php
namespace Dagou\Howler\CDN;

use Dagou\Howler\Interfaces\CDN;
use Dagou\Howler\Traits\ExtConf;
use Dagou\Howler\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use ExtConf, PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('howler', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('howler', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return static::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        switch ($this->getExtConf('build')) {
            case 'default':
                return 'howler.min.js';
            case 'core':
                return 'howler.core.min.js';
            case 'spatial':
                return 'howler.spatial.min.js';
        }
    }
}