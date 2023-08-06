<?php

namespace App\Controller;

use App\Services\Response;
use App\Services\View;

class BaseController
{

    public function showStartView(): void
    {
        $html = new View(FormSendApplication);
        $templateWithContent = new View(Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }

    public function showResultView(string $name, string $email, string $phone, int $price)
    {
    }
}