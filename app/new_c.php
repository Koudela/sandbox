<?php
// new_c <name> <parent_id>

require_once '../bootstrap.php';

$name = $argv[1];
$container = new Container();
$container->set('name', $name);
if (isset($argv[2])) {
    $parent = $argv[2];
    $container->set('parent', $entityManager->find('Container', $parent));
}

$entityManager->persist($container);
$entityManager->flush();

echo 'Created Container with ID ' . $container->get('id') . "\n";