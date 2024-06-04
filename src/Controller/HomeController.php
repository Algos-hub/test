<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): JsonResponse
    {
        $app = require $_SERVER['SCRIPT_FILENAME'];
        $server = $_SERVER['SCRIPT_FILENAME'];
        $api = require __DIR__ . '/../../api/index.php';
        $api_require = require __DIR__ . '/../../api/index.php';
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
            'app' => $app,
            'server' => $server,
            'api' => $api,
            'api_require' => $api_require,
        ]);
    }
}
