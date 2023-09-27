# TYPO3 Extension: Howler

EXT:howler allows you to use [Howler.js](https://howlerjs.com/) in your extensions.

**The extension version only matches the Howler.js library version, it doesn't mean anything else.**

## How to use it

You can load the library in your Fluid template easily.

    <f:asset.script identifier="howler" src="{howler:uri.js()}" />

Or use other version.

    {howler:uri.js(build: '...')}

To use other Howler source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Howler\Utility\ExtensionUtility::registerSource(\Dagou\Howler\Source\JsDelivr::class);