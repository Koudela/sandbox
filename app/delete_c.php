<?php
// delete_c.php <container_name>

require_once '../bootstrap.php';

$container = $entityManager->getRepository('Container')->findBy(array('name' => $argv[1]))[0];
$entityManager->remove($container);
$entityManager->flush();

echo 'Removed Container ' . $container->get('name') . ' from DB' . "\n";