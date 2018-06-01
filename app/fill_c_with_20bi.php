<?php
// fill_c_with_20bi.php

require_once '../bootstrap.php';

$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$greek = ['alpha', 'beta', 'gamma', 'delta'];

$bi_repro = $entityManager->getRepository('Baseitem'); 
$c_repro = $entityManager->getRepository('Container');

for ($i = 0; $i < 20; $i++) {
    $letter = $alphabet[rand(0, 25)];
    $name = $greek[rand(0, 3)];

    $baseitem = $bi_repro->findby(['name' => $letter])[0];
    $container = $c_repro->findby(['name' => $name])[0];
    $baseitem->add('containedIn', $container);

    echo $baseitem->get('name') . ' has been added to ' . $container->get('name') . "\n";
}
$entityManager->flush();
