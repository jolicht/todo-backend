<?php

declare(strict_types=1);

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class TestController extends AbstractController
{
    public function test(Connection $connection)
    {
        $statement = $connection->query('SELECT now()');
        $time = $statement->fetchColumn();

        return new JsonResponse([
            'time' => $time
        ]);
    }
}
