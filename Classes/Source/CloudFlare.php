<?php
namespace Dagou\Howler\Source;

class CloudFlare extends AbstractSource {
    protected const URL = '//cdnjs.cloudflare.com/ajax/libs/howler/'.self::VERSION.'/';
}