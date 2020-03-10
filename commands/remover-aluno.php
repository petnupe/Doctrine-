<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();
$aluno = $entityManager->getReference(Aluno::class, $argv[1]);

$entityManager->remove($aluno);
$entityManager->flush();