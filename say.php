<?php
require 'vendor/autoload.php';

use Cowsayphp\Farm;
use Cowsayphp\Farm\Dragon;
use Cowsayphp\Farm\Netero2;
use Cowsayphp\Farm\Netero;
use Cowsayphp\Farm\Tux;

$args = getopt('c::m:');

if (!array_key_exists('c', $args)) {
    return print("-c の引数は必須です。");
}

$arg = $args['c'];
$msg = $args['m'] ?? "Ohmg I'm a cow!";

switch ($arg) {
    case 'tux':
        $cow = Farm::create(Tux::class);
        break;
    case 'dragon':
        $cow = Farm::create(Dragon::class);
        break;
    case 'netero':
        $cow = Farm::create(Netero::class);
        break;
    case 'netero2':
        $cow = Farm::create(Netero2::class);
        $msg = $args['m'] ?? "感謝するぜ!お前と出会えた。これまでの全てに!";
        break;
}

echo $cow->say($msg);
