<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory)->getEntityManager();
$aluno = $entityManager->find(Aluno::class, $argv[1]);
$aluno->setNome($argv[2]);
$entityManager->flush();
