<?php
// new_greek_c.php

require_once '../bootstrap.php';

$alphabet = ['alpha', 'beta', 'gamma', 'delta'];

$c_repro = $entityManager->getRepository('Container');

foreach ($alphabet as $name) {
    if (count($c_repro->findBy(array('name' => $name))) > 0) continue;
    $container = new Container();
    $container->set('name', $name);
    if (isset($container_parent)) $container->set('parent', $container_parent);
    $entityManager->persist($container);
    $entityManager->flush();
    echo 'Created Container with ID ' . $container->get('id') . "\n";    
    $container_parent = $container;
}
