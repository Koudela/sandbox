<?php
//add_bi_to_c.php <baseitem_id> <container_id>

require_once '../bootstrap.php';

$baseitem = $entityManager->find('Baseitem', $argv[1]);
$container = $entityManager->find('Container', $argv[2]);
$baseitem->add('containedIn', $container);

$entityManager->flush();

echo $baseitem->get('name') . ' has been added to ' . $container->get('name') . "\n";