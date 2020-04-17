<?php
namespace Dagou\Howler\CDN;

use Dagou\Howler\Interfaces\CDN;

class cdnjs extends AbstractCDN {
    const URL = '//cdnjs.cloudflare.com/ajax/libs/howler/'.CDN::VERSION.'/';
}