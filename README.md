# TYPO3 Extension: Howler

EXT:howler allows you to use [howler.js](https://howlerjs.com/) in your extensions.

The extension version only matches the howler.js library version, it doesn't mean anything else.

## How to use it

You can load the library in your Fluid template with **LoadViewHelper**.

    <howler:load />

You can also load your own libraries.

    <howler:load js="..." />
    
Or, load the javascript library on top.

    <howler:load footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['howler']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['howler']['CDN'] = \Dagou\Howler\CDN\jsDelivr::class;