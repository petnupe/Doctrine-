<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno  =  new Aluno();
$aluno->setNome($argv[1]);

// Estancioando a fabrica
$entityManagerFactory = new EntityManagerFactory();

// Pegando uma instancia do gerenciador de entidades
$entityManager = $entityManagerFactory->getEntityManager();
$entityManager->persist($aluno);

// Realmente grava no banco.
$entityManager->flush();
echo $aluno->getId();