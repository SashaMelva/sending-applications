<?php

use App\Controller\BaseController;
use App\Services\Api\ApiSettings;
use App\Services\Api\ForApiAutoCrm;
use App\Services\Response;
use App\Services\View;

session_start();

if (isset($_SERVER['REQUEST_URI'])) {
//    try {
        match ($_SERVER['REQUEST_URI']) {
            '/' => (new BaseController())->showStartView(),
            '/integration' => (new BaseController())->showCreateIntegrationView(),
            '/integration/create' => (new ForApiAutoCrm())->electrification($_POST['subdomain'], $_POST['client_secret'], $_POST['client_id'], $_POST['code']),
            '/lead' => (new BaseController())->showLeadCreateView(),
            '/lead/create' => (new ForApiAutoCrm())->createLead($_POST['name'], $_POST['email'], $_POST['phone'], (int)$_POST['price']),
            default => throw new Exception('Unexpected match value'),
        };
//    } catch (Exception $e) {
//        $html = new View(ViewPath::NotFound);
//        $templateWithContent = new View(ViewPath::Template, ['content' => $html]);
//        (new Response((string)$templateWithContent))->echo();
//    }
}