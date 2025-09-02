<?php

// Ce fichier est normalement généré par Composer.
// Il charge l'autoloader et renvoie le Runtime de Symfony.

require_once __DIR__ . '/autoload.php';

if (!class_exists(Symfony\Component\Runtime\Runtime::class)) {
    throw new RuntimeException(
        'Symfony Runtime est manquant. Installez-le avec : composer require symfony/runtime'
    );
}

return new Symfony\Component\Runtime\SymfonyRuntime();
