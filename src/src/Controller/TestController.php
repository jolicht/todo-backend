<?php

declare(strict_types=1);

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function test(Connection $connection)
    {
        $statement = $connection->query('SELECT now()');
        $result = $statement->fetchAll();

        print_r($result);


        $number = random_int(0, 100);
        return new Response(
            '<html><body>Lucky number: ' . $number . '</body></html>'
        );
    }
}
