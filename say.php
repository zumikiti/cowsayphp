<?php
require 'vendor/autoload.php';

use Cowsayphp\Farm;
use Cowsayphp\Farm\Cow;
use Cowsayphp\Farm\Dragon;
use Cowsayphp\Farm\Kirby;
use Cowsayphp\Farm\Netero2;
use Cowsayphp\Farm\Netero;
use Cowsayphp\Farm\Tux;
use Cowsayphp\Farm\Whale;

$args = getopt('c::m:');

$char = $args['c'] ?? 'cow';

switch ($char) {
    case 'tux':
        $cow = Farm::create(Tux::class);
        break;
    case 'dragon':
        $cow = Farm::create(Dragon::class);
        break;
    case 'whale':
        $cow = Farm::create(Whale::class);
        break;
    case 'kirby':
        $cow = Farm::create(Kirby::class);
        $msg = 'ぽよぽよ〜';
        break;
    default:
        $cow = Farm::create(Cow::class);
}

echo $cow->say($args['m'] ?? $msg ?? 'Ohmg I\'m a cow!');
