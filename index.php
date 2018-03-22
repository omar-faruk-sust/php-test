<?php

require "vendor/autoload.php";

use OmarPackage\Console;
use OmarPackage\Controller;
use OmarPackage\ElectronicItems;
use OmarPackage\Microwave;
use OmarPackage\Television;

$console = new Console();
$console->setPrice(133.98)->setType('console');

$cc_1 = new Controller();
$cc_1->setPrice(5.67)->setType('controller')->setWired(true);

$cc_2 = new Controller();
$cc_2->setPrice(7.67)->setType('controller')->setWired(true);

$cc_3 = new Controller();
$cc_3->setPrice(11.17)->setType('controller')->setWired(false);

$cc_4 = new Controller();
$cc_4->setPrice(9.97)->setType('controller')->setWired(false);

//add 4 controller as extra on console
$console->addExtras([
    $cc_1,
    $cc_2,
    $cc_3,
    $cc_4
]);

$tv1 = new Television();
$tv1->setPrice(4222.17)->setType('television');

$tv1_c1 = new Controller();
$tv1_c1->setPrice(22.17)->setType('controller')->setWired(false);

$tv1_c2 = new Controller();
$tv1_c2->setPrice(20.91)->setType('controller')->setWired(false);

//add two remote controller as extra to tv1
$tv1->addExtras([
    $tv1_c1,
    $tv1_c2
]);

$tv2 = new Television();
$tv2->setPrice(3322.17)->setType('television');

$tv2_c1 = new Controller();
$tv2_c1->setPrice(21.91)->setType('controller')->setWired(false);

//add two remote controller as extra to tv2
$tv2->addExtras([
    $tv2_c1
]);

$microvave = new Microwave();
$microvave->setPrice(922.17)->setType('microwave');

$customer_order = new ElectronicItems([
    $console,
    $cc_1,
    $cc_2,
    $cc_3,
    $cc_4,
    $tv1,
    $tv1_c1,
    $tv1_c2,
    $tv2,
    $tv2_c1,
    $microvave
]);
//load the view
require_once('views/index.php');
