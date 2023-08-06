<?php

namespace App\Controller;

use App\Services\Response;
use App\Services\View;
use App\Services\ViewPath;

class BaseController
{

    public function showStartView()
    {
        $html = new View(ViewPath::FormSendApplication);
        $templateWithContent = new View(ViewPath::Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }

    public function showResultView(string $name, string $email, string $phone, int $price)
    {
    }
}