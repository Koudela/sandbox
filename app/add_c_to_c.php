<?php
// add_c_to_c.php <container_id> <container_id>

require_once '../bootstrap.php';

$container_child = $entityManager->getRepository('Container')->findBy(array('name' => $argv[1]))[0];
$container_parent = $entityManager->getRepository('Container')->findBy(array('name' => $argv[2]))[0];
$container_child->set('parent', $container_parent);

$entityManager->flush();

echo 'Added container ' . $container_child->get('name') . ' to container ' . $container_parent->get('name') . "\n";