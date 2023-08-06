<?php

namespace App\Services;

enum ViewPath :string
{
    case Template = __DIR__ . "/../../view/template-view.php";
    case FormSendApplication = __DIR__ . "/../../view/component/form-send.php";
    case Result = __DIR__ . "/../../view/component/result.php";
    case NotFound = __DIR__ . "/../../view/component/not-found.php";
}