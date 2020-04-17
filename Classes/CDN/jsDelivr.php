<?php
namespace Dagou\Howler\CDN;

use Dagou\Howler\Interfaces\CDN;

class jsDelivr extends AbstractCDN {
    const URL = '//cdn.jsdelivr.net/npm/howler@'.CDN::VERSION.'/dist/';
}