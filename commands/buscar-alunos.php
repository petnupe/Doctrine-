<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerFactory())->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */

$alunoList = $alunoRepository->findAll();

echo 'TODOS' . PHP_EOL;
foreach ($alunoList as $aluno) {
  echo $aluno->getId().' - '.$aluno->getNome(). PHP_EOL;
}

$porId = $alunoRepository->find($argv[1]);

echo 'POR ID: ' . $argv[1] . PHP_EOL;
echo $porId->getId().' - '.$porId->getNome().PHP_EOL;


echo 'POR NOME: ' . PHP_EOL;
$porNome = $alunoRepository->findBy([
    'nome' => 'Mateus Pedroso'
]);

echo $porNome[0]->getNome();

