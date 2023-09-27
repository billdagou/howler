<?php
namespace Dagou\Howler\ViewHelpers\Uri;

use Dagou\Howler\Interfaces\Source;
use Dagou\Howler\Source\Local;
use Dagou\Howler\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class JsViewHelper extends AbstractViewHelper {
    protected static array $builds = [
        'core',
        'spatial',
    ];

    public function initializeArguments(): void {
        $this->registerArgument('build', 'string', 'Build name');
    }

    /**
     * @return string
     */
    public function render(): string {
        if (is_subclass_of(($className = ExtensionUtility::getSource()), Source::class)) {
            $source = GeneralUtility::makeInstance($className);
        } else {
            $source = GeneralUtility::makeInstance(Local::class);
        }

        $build = in_array($this->arguments['build'], self::$builds) ? $this->arguments['build'] : '';

        return $source->getJs($build);
    }
}