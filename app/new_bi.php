<?php
// new_bi.php <name>

require_once '../bootstrap.php';

$name = $argv[1];

$baseitem = new Baseitem();
$baseitem->set('name', $name);

$entityManager->persist($baseitem);
$entityManager->flush();

echo 'Created Baseitem with ID ' . $baseitem->get('id') . "\n";
