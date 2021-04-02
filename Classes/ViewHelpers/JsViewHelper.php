<?php
namespace Dagou\Howler\ViewHelpers;

use Dagou\Howler\Interfaces\Source;
use Dagou\Howler\Source\Local;
use Dagou\Howler\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper;

class JsViewHelper extends ScriptViewHelper {
    public function initializeArguments(): void {
        parent::initializeArguments();

        $this->overrideArgument(
            'identifier',
            'string',
            'Use this identifier within templates to only inject your JS once, even though it is added multiple times.',
            FALSE,
            'howler'
        );
    }

    /**
     * @return string
     */
    public function render(): string {
        if (!$this->arguments['src']) {
            if (($className = ExtensionUtility::getSource()) && is_subclass_of($className, Source::class) ) {
                $source = GeneralUtility::makeInstance($className);
            } else {
                $source = GeneralUtility::makeInstance(Local::class);
            }

            $this->tag->addAttribute('src', $source->getJs());
        }

        return parent::render();
    }
}