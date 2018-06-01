<?php
// new_alphabet_bi.php

require_once '../bootstrap.php';

$alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

$baseitems = $entityManager->getRepository('Baseitem');

for ($i = 0; $i < 26; $i++) {
    $name = $alphabet[$i];
    if (count($baseitems->findBy(array('name' => $name))) > 0) continue;
    $baseitem = new Baseitem();
    $baseitem->set('name', $name);
    $entityManager->persist($baseitem);
    $entityManager->flush();
    echo 'Created Baseitem with ID ' . $baseitem->get('id') . "\n";
}


