<?php

use App\Controller\BaseController;
use App\Services\Response;
use App\Services\View;
use App\Services\ViewPath;

if (isset($_SERVER['REQUEST_URI'])) {
    try {
        match ($_SERVER['REQUEST_URI']) {
            '/' => (new BaseController())->showStartView(),
            '/send' => (new BaseController())->showResultView($_POST['name'], $_POST['email'], $_POST['phone'], (int)$_POST['price']),
            default => throw new Exception('Unexpected match value'),
        };
    } catch (Exception $e) {
        $html = new View(ViewPath::NotFound);
        $templateWithContent = new View(ViewPath::Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }
}

exit;