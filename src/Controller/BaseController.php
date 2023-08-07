<?php

namespace App\Controller;

use App\Services\Api\ForApiAutoCrm;
use App\Services\Response;
use App\Services\View;

class BaseController
{

    public function showStartView(): void
    {
        $html = new View(Main);
        $templateWithContent = new View(Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }

    public function showResultView(string $name, string $email, string $phone, int $price)
    {
        $request = (new  ForApiAutoCrm())->createLead($name, $email, $phone, $price);
        $html = new View(Result);
        $templateWithContent = new View(Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }

    public function showCreateIntegrationView(): void
    {
        $html = new View(FormIntegration);
        $templateWithContent = new View(Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }

    public function showLeadCreateView(): void
    {
        $html = new View(FormSendApplication);
        $templateWithContent = new View(Template, ['content' => $html]);
        (new Response((string)$templateWithContent))->echo();
    }
}